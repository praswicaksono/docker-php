<?php
declare(strict_types=1);

namespace PRSW\Docker;

use Amp\Http\Client\Connection\DefaultConnectionFactory;
use Amp\Http\Client\Connection\UnlimitedConnectionPool;
use Amp\Http\Client\HttpClientBuilder;
use Amp\Http\Client\Interceptor\ResolveBaseUri;
use Amp\Http\Client\Interceptor\SetRequestTimeout;
use Amp\Http\Client\Psr7\PsrAdapter;
use Amp\Http\Client\Psr7\PsrHttpClient;
use Amp\Socket\StaticSocketConnector;
use Laminas\Diactoros\RequestFactory;
use Laminas\Diactoros\ResponseFactory;
use PRSW\Docker\Generated\Client as BaseClient;
use PRSW\Docker\Generated\Endpoint\ContainerLogs;
use PRSW\Docker\Generated\Endpoint\SystemEvents;
use PRSW\Docker\Generated\Model\EventMessage;
use PRSW\Docker\Model\Stream;
use PRSW\Docker\Stream\DockerRawStream;
use PRSW\Docker\Stream\JsonResponseStream;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\ResponseInterface;

use function Amp\Socket\socketConnector;

final class Client extends BaseClient
{
    public const FETCH_STREAM = 'stream';

    public static function withHttpClient(
        string $socketPath = '/var/run/docker.sock',
        array $options = [],
        array $additionalPlugins = [],
        array $additionalNormalizers = [],
    ): self {

        $options['unix_socket'] = $socketPath;
        return parent::create(self::createAmphpPsrHttpClient($options), $additionalPlugins, $additionalNormalizers);
    }

    private static function createAmphpPsrHttpClient(array $options = []): ClientInterface
    {
        $timeout = $options['timeout'] ?? -1;
        $connector = new StaticSocketConnector("unix:///{$options['unix_socket']}", socketConnector());

        $client = (new HttpClientBuilder())
            ->usingPool(new UnlimitedConnectionPool(new DefaultConnectionFactory($connector)))
            ->retry((int) $options['retry'] ?? 3)
            ->intercept(new ResolveBaseUri('http://docker'))
            ->intercept(new SetRequestTimeout(transferTimeout: $timeout, inactivityTimeout: $timeout))
            ->build();

        $psrAdapter = new PsrAdapter(
            new RequestFactory(),
            new ResponseFactory(),
        );

        return new PsrHttpClient($client, $psrAdapter);
    }

    public function withHttpClientOptions(array $options): self
    {
        $that = clone $this;
        $that->httpClient = self::createAmphpPsrHttpClient($options);

        return $that;
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