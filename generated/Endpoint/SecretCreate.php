<?php

namespace PRSW\Docker\Generated\Endpoint;

class SecretCreate extends \PRSW\Docker\Generated\Runtime\Client\BaseEndpoint implements \PRSW\Docker\Generated\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param \PRSW\Docker\Generated\Model\SecretsCreatePostBody $body 
     */
    public function __construct(\PRSW\Docker\Generated\Model\SecretsCreatePostBody $body)
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
        return '/secrets/create';
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
     * @throws \PRSW\Docker\Generated\Exception\SecretCreateConflictException
     * @throws \PRSW\Docker\Generated\Exception\SecretCreateInternalServerErrorException
     * @throws \PRSW\Docker\Generated\Exception\SecretCreateServiceUnavailableException
     *
     * @return null|\PRSW\Docker\Generated\Model\IdResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
            return $serializer->deserialize($body, 'PRSW\Docker\Generated\Model\IdResponse', 'json');
        }
        if (409 === $status) {
            throw new \PRSW\Docker\Generated\Exception\SecretCreateConflictException($serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \PRSW\Docker\Generated\Exception\SecretCreateInternalServerErrorException($serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (503 === $status) {
            throw new \PRSW\Docker\Generated\Exception\SecretCreateServiceUnavailableException($serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}