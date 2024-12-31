<?php

namespace PRSW\Docker\Generated\Endpoint;

class NetworkCreate extends \PRSW\Docker\Generated\Runtime\Client\BaseEndpoint implements \PRSW\Docker\Generated\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param \PRSW\Docker\Generated\Model\NetworksCreatePostBody $networkConfig Network configuration
     */
    public function __construct(\PRSW\Docker\Generated\Model\NetworksCreatePostBody $networkConfig)
    {
        $this->body = $networkConfig;
    }
    use \PRSW\Docker\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/networks/create';
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
     * @throws \PRSW\Docker\Generated\Exception\NetworkCreateBadRequestException
     * @throws \PRSW\Docker\Generated\Exception\NetworkCreateForbiddenException
     * @throws \PRSW\Docker\Generated\Exception\NetworkCreateNotFoundException
     * @throws \PRSW\Docker\Generated\Exception\NetworkCreateInternalServerErrorException
     *
     * @return null|\PRSW\Docker\Generated\Model\NetworkCreateResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
            return $serializer->deserialize($body, 'PRSW\Docker\Generated\Model\NetworkCreateResponse', 'json');
        }
        if (400 === $status) {
            throw new \PRSW\Docker\Generated\Exception\NetworkCreateBadRequestException($serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (403 === $status) {
            throw new \PRSW\Docker\Generated\Exception\NetworkCreateForbiddenException($serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (404 === $status) {
            throw new \PRSW\Docker\Generated\Exception\NetworkCreateNotFoundException($serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \PRSW\Docker\Generated\Exception\NetworkCreateInternalServerErrorException($serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}