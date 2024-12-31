<?php
declare(strict_types=1);

namespace PRSW\Docker;

use PRSW\Docker\Generated\Client as BaseClient;
use PRSW\Docker\Generated\Endpoint\ContainerLogs;
use PRSW\Docker\Generated\Endpoint\SystemEvents;
use PRSW\Docker\Generated\Model\EventMessage;
use PRSW\Docker\Model\Stream;
use PRSW\Docker\Stream\DockerRawStream;
use PRSW\Docker\Stream\JsonResponseStream;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\HttpClient\AmpHttpClient;
use Symfony\Component\HttpClient\Psr18Client;

final class Client extends BaseClient
{
    public const FETCH_STREAM = 'stream';

    public static function withHttpClient(
        string $socketPath = '/var/run/docker.sock',
        array $options = [],
        array $additionalPlugins = [],
        array $additionalNormalizers = [],
    ): self {
        $options += [
            'bindto' => $socketPath,
            'base_uri' => 'http://docker'
        ];

        $client = new Psr18Client(new AmpHttpClient($options));

        return parent::create($client, $additionalPlugins, $additionalNormalizers);
    }

    public function withHttpClientOptions(array $options): self
    {
        if ($this->httpClient instanceof Psr18Client) {
            $self = clone $this;
            $self->httpClient = $this->httpClient->withOptions($options);
            return $self;
        }

        return $this;
    }

    /**
     * @return EventMessage|Stream<null, EventMessage>
     */
    public function systemEvents(array $queryParameters = [], string $fetch = self::FETCH_OBJECT): EventMessage|Stream
    {
        if ($fetch === self::FETCH_STREAM) {
            $endpoint = new SystemEvents($queryParameters);
            $response = $this->executeRawEndpoint($endpoint);
            $stream = new JsonResponseStream($response, $endpoint, $this->streamFactory, $this->serializer);

            return new Stream($stream);
        }

        return parent::systemEvents($queryParameters, $fetch);
    }

    /**
     * @return ResponseInterface|Stream<int, string>|array<int, string>
     */
    public function containerLogs(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT): ResponseInterface|Stream|array
    {
        $endpoint = new ContainerLogs($id, $queryParameters);
        $response = $this->executeRawEndpoint($endpoint);

        if (array_key_exists('follow', $queryParameters) && $queryParameters['follow'] === true) {
            $fetch = self::FETCH_STREAM;
        }

        if ($response->getStatusCode() === 200) {
            $stream = new Stream(new DockerRawStream($response->getBody()));

            if ($fetch === self::FETCH_STREAM) {
                return $stream;
            }

            $output = [];
            foreach ($stream->stream() as $key => $value) {
                $output[$key] = $value;
            }

            return $output;
        }

        return $response;
    }
}