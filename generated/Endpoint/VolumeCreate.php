<?php

namespace PRSW\Docker\Generated\Endpoint;

class VolumeCreate extends \PRSW\Docker\Generated\Runtime\Client\BaseEndpoint implements \PRSW\Docker\Generated\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param \PRSW\Docker\Generated\Model\VolumeCreateOptions $volumeConfig Volume configuration
     */
    public function __construct(\PRSW\Docker\Generated\Model\VolumeCreateOptions $volumeConfig)
    {
        $this->body = $volumeConfig;
    }
    use \PRSW\Docker\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/volumes/create';
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
     * @throws \PRSW\Docker\Generated\Exception\VolumeCreateInternalServerErrorException
     *
     * @return null|\PRSW\Docker\Generated\Model\Volume
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
            return $serializer->deserialize($body, 'PRSW\Docker\Generated\Model\Volume', 'json');
        }
        if (500 === $status) {
            throw new \PRSW\Docker\Generated\Exception\VolumeCreateInternalServerErrorException($serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}