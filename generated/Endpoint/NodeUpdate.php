<?php

namespace PRSW\Docker\Generated\Endpoint;

class NodeUpdate extends \PRSW\Docker\Generated\Runtime\Client\BaseEndpoint implements \PRSW\Docker\Generated\Runtime\Client\Endpoint
{
    protected $id;
    /**
    * 
    *
    * @param string $id The ID of the node
    * @param \PRSW\Docker\Generated\Model\NodeSpec $body 
    * @param array $queryParameters {
    *     @var int $version The version number of the node object being updated. This is required
    to avoid conflicting writes.
    
    * }
    */
    public function __construct(string $id, \PRSW\Docker\Generated\Model\NodeSpec $body, array $queryParameters = [])
    {
        $this->id = $id;
        $this->body = $body;
        $this->queryParameters = $queryParameters;
    }
    use \PRSW\Docker\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/nodes/{id}/update');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['version']);
        $optionsResolver->setRequired(['version']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('version', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PRSW\Docker\Generated\Exception\NodeUpdateBadRequestException
     * @throws \PRSW\Docker\Generated\Exception\NodeUpdateNotFoundException
     * @throws \PRSW\Docker\Generated\Exception\NodeUpdateInternalServerErrorException
     * @throws \PRSW\Docker\Generated\Exception\NodeUpdateServiceUnavailableException
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
            throw new \PRSW\Docker\Generated\Exception\NodeUpdateBadRequestException($serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (404 === $status) {
            throw new \PRSW\Docker\Generated\Exception\NodeUpdateNotFoundException($serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \PRSW\Docker\Generated\Exception\NodeUpdateInternalServerErrorException($serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (503 === $status) {
            throw new \PRSW\Docker\Generated\Exception\NodeUpdateServiceUnavailableException($serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}