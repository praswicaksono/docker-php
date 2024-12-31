<?php

namespace PRSW\Docker\Generated\Endpoint;

class ContainerUpdate extends \PRSW\Docker\Generated\Runtime\Client\BaseEndpoint implements \PRSW\Docker\Generated\Runtime\Client\Endpoint
{
    protected $id;
    /**
    * Change various configuration options of a container without having to
    recreate it.
    
    *
    * @param string $id ID or name of the container
    * @param \PRSW\Docker\Generated\Model\ContainersIdUpdatePostBody $update 
    */
    public function __construct(string $id, \PRSW\Docker\Generated\Model\ContainersIdUpdatePostBody $update)
    {
        $this->id = $id;
        $this->body = $update;
    }
    use \PRSW\Docker\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/containers/{id}/update');
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
     * @throws \PRSW\Docker\Generated\Exception\ContainerUpdateNotFoundException
     * @throws \PRSW\Docker\Generated\Exception\ContainerUpdateInternalServerErrorException
     *
     * @return null|\PRSW\Docker\Generated\Model\ContainersIdUpdatePostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ContainersIdUpdatePostResponse200', 'json');
        }
        if (404 === $status) {
            throw new \PRSW\Docker\Generated\Exception\ContainerUpdateNotFoundException($serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \PRSW\Docker\Generated\Exception\ContainerUpdateInternalServerErrorException($serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}