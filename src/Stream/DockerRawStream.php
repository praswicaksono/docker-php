<?php
declare(strict_types=1);

namespace PRSW\Docker\Stream;

use Psr\Http\Message\StreamInterface;

final class DockerRawStream extends AbstractResponseStream
{

    public function __construct(
        private readonly StreamInterface $stream
    ) {
    }

    public function getGenerator(): \Generator
    {
        while (! $this->stream->eof()) {
            $header = $this->readBlock(8);
            if (strlen($header) < 8) {
                return;
            }

            $headerDecoded = unpack('C1type/C3/N1size', $header);
            $content = $this->readBlock($headerDecoded['size']);

            yield (int) $headerDecoded['type'] => $content;
        }
    }

    private function readBlock( int $len): string
    {
        $content = '';

        do {
            $content .= $this->stream->read($len - strlen($content));
        } while (strlen($content) < $len && !$this->stream->eof());

        return $content;
    }

    public function close(): void
    {
        $this->stream->close();
    }
}