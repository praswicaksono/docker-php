<?php

namespace PRSW\Docker\Generated\Endpoint;

class SwarmJoin extends \PRSW\Docker\Generated\Runtime\Client\BaseEndpoint implements \PRSW\Docker\Generated\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param \PRSW\Docker\Generated\Model\SwarmJoinPostBody $body 
     */
    public function __construct(\PRSW\Docker\Generated\Model\SwarmJoinPostBody $body)
    {
        $this->body = $body;
    }
    use \PRSW\Docker\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/swarm/join';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PRSW\Docker\Generated\Exception\SwarmJoinBadRequestException
     * @throws \PRSW\Docker\Generated\Exception\SwarmJoinInternalServerErrorException
     * @throws \PRSW\Docker\Generated\Exception\SwarmJoinServiceUnavailableException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \PRSW\Docker\Generated\Exception\SwarmJoinBadRequestException($serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \PRSW\Docker\Generated\Exception\SwarmJoinInternalServerErrorException($serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (503 === $status) {
            throw new \PRSW\Docker\Generated\Exception\SwarmJoinServiceUnavailableException($serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}