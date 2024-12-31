<?php
declare(strict_types=1);

namespace PRSW\Docker\Stream;

use Generator;
use PRSW\Docker\Generated\Runtime\Client\Endpoint;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\StreamInterface;
use Symfony\Component\Serializer\SerializerInterface;

final class JsonResponseStream extends AbstractResponseStream
{

    public function __construct(
        private readonly ResponseInterface $response,
        private readonly Endpoint $endpoint,
        private readonly StreamFactoryInterface $streamFactory,
        private readonly SerializerInterface $serializer,
    ) {
    }

    private function read(StreamInterface $stream): ?string
    {
        $jsonFrameEnd = false;
        $lastJsonChar = '';
        $inquote      = false;
        $jsonFrame    = '';
        $level        = 0;

        while (!$stream->eof() && !$jsonFrameEnd) {
            $jsonChar   = $stream->read(1);

            if ($jsonChar == '"' && $lastJsonChar != '\\') {
                $inquote = !$inquote;
            }

            if (!$inquote && in_array($jsonChar, [" ", "\r", "\n", "\t"])) {
                continue;
            }

            if (!$inquote && in_array($jsonChar, ['{', '['])) {
                $level++;
            }

            if (!$inquote && in_array($jsonChar, ['}', ']'])) {
                $level--;

                if ($level == 0) {
                    $jsonFrameEnd = true;
                    $jsonFrame .= $jsonChar;

                    continue;
                }
            }

            $jsonFrame .= $jsonChar;
        }

        if (!$jsonFrameEnd) {
            return null;
        }

        return $jsonFrame;
    }

    public function getGenerator(): Generator
    {
        $clonedResponse = clone $this->response;

        $bodyStream = $this->response->getBody();

        while (! $bodyStream->eof()) {
            $json = $this->read($bodyStream);
            $clonedResponse = $clonedResponse->withBody($this->streamFactory->createStreamFromResource(
                $json
            ));

            yield $this->endpoint->parseResponse($clonedResponse, $this->serializer);

            $clonedResponse->getBody()->close();
        }
    }

    public function close(): void
    {
        $this->response->getBody()->close();
    }
}