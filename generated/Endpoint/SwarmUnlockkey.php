<?php

namespace PRSW\Docker\Generated\Endpoint;

class SwarmUnlockkey extends \PRSW\Docker\Generated\Runtime\Client\BaseEndpoint implements \PRSW\Docker\Generated\Runtime\Client\Endpoint
{
    use \PRSW\Docker\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/swarm/unlockkey';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PRSW\Docker\Generated\Exception\SwarmUnlockkeyInternalServerErrorException
     * @throws \PRSW\Docker\Generated\Exception\SwarmUnlockkeyServiceUnavailableException
     *
     * @return null|\PRSW\Docker\Generated\Model\SwarmUnlockkeyGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'PRSW\Docker\Generated\Model\SwarmUnlockkeyGetResponse200', 'json');
        }
        if (500 === $status) {
            throw new \PRSW\Docker\Generated\Exception\SwarmUnlockkeyInternalServerErrorException($serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (503 === $status) {
            throw new \PRSW\Docker\Generated\Exception\SwarmUnlockkeyServiceUnavailableException($serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}