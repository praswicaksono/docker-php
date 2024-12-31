<?php

namespace PRSW\Docker\Generated\Endpoint;

class ServiceUpdate extends \PRSW\Docker\Generated\Runtime\Client\BaseEndpoint implements \PRSW\Docker\Generated\Runtime\Client\Endpoint
{
    protected $id;
    /**
    * 
    *
    * @param string $id ID or name of service.
    * @param \PRSW\Docker\Generated\Model\ServicesIdUpdatePostBody $body 
    * @param array $queryParameters {
    *     @var int $version The version number of the service object being updated. This is
    required to avoid conflicting writes.
    This version number should be the value as currently set on the
    service *before* the update. You can find the current version by
    calling `GET /services/{id}`
    
    *     @var string $registryAuthFrom If the `X-Registry-Auth` header is not specified, this parameter
    indicates where to find registry authorization credentials.
    
    *     @var string $rollback Set to this parameter to `previous` to cause a server-side rollback
    to the previous service spec. The supplied spec will be ignored in
    this case.
    
    * }
    * @param array $headerParameters {
    *     @var string $X-Registry-Auth A base64url-encoded auth configuration for pulling from private
    registries.
    
    Refer to the [authentication section](#section/Authentication) for
    details.
    
    * }
    */
    public function __construct(string $id, \PRSW\Docker\Generated\Model\ServicesIdUpdatePostBody $body, array $queryParameters = [], array $headerParameters = [])
    {
        $this->id = $id;
        $this->body = $body;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \PRSW\Docker\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/services/{id}/update');
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
        $optionsResolver->setDefined(['version', 'registryAuthFrom', 'rollback']);
        $optionsResolver->setRequired(['version']);
        $optionsResolver->setDefaults(['registryAuthFrom' => 'spec']);
        $optionsResolver->addAllowedTypes('version', ['int']);
        $optionsResolver->addAllowedTypes('registryAuthFrom', ['string']);
        $optionsResolver->addAllowedTypes('rollback', ['string']);
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['X-Registry-Auth']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('X-Registry-Auth', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PRSW\Docker\Generated\Exception\ServiceUpdateBadRequestException
     * @throws \PRSW\Docker\Generated\Exception\ServiceUpdateNotFoundException
     * @throws \PRSW\Docker\Generated\Exception\ServiceUpdateInternalServerErrorException
     * @throws \PRSW\Docker\Generated\Exception\ServiceUpdateServiceUnavailableException
     *
     * @return null|\PRSW\Docker\Generated\Model\ServiceUpdateResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ServiceUpdateResponse', 'json');
        }
        if (400 === $status) {
            throw new \PRSW\Docker\Generated\Exception\ServiceUpdateBadRequestException($serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (404 === $status) {
            throw new \PRSW\Docker\Generated\Exception\ServiceUpdateNotFoundException($serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \PRSW\Docker\Generated\Exception\ServiceUpdateInternalServerErrorException($serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (503 === $status) {
            throw new \PRSW\Docker\Generated\Exception\ServiceUpdateServiceUnavailableException($serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}