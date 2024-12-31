<?php

namespace PRSW\Docker\Generated\Endpoint;

class SystemAuth extends \PRSW\Docker\Generated\Runtime\Client\BaseEndpoint implements \PRSW\Docker\Generated\Runtime\Client\Endpoint
{
    /**
    * Validate credentials for a registry and, if available, get an identity
    token for accessing the registry without password.
    
    *
    * @param \PRSW\Docker\Generated\Model\AuthConfig $authConfig Authentication to check
    */
    public function __construct(\PRSW\Docker\Generated\Model\AuthConfig $authConfig)
    {
        $this->body = $authConfig;
    }
    use \PRSW\Docker\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/auth';
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
     * @throws \PRSW\Docker\Generated\Exception\SystemAuthUnauthorizedException
     * @throws \PRSW\Docker\Generated\Exception\SystemAuthInternalServerErrorException
     *
     * @return null|\PRSW\Docker\Generated\Model\AuthPostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'PRSW\Docker\Generated\Model\AuthPostResponse200', 'json');
        }
        if (204 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \PRSW\Docker\Generated\Exception\SystemAuthUnauthorizedException($serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \PRSW\Docker\Generated\Exception\SystemAuthInternalServerErrorException($serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}