<?php

namespace PRSW\Docker\Generated\Endpoint;

class ImageDelete extends \PRSW\Docker\Generated\Runtime\Client\BaseEndpoint implements \PRSW\Docker\Generated\Runtime\Client\Endpoint
{
    protected $name;
    /**
    * Remove an image, along with any untagged parent images that were
    referenced by that image.
    
    Images can't be removed if they have descendant images, are being
    used by a running container or are being used by a build.
    
    *
    * @param string $name Image name or ID
    * @param array $queryParameters {
    *     @var bool $force Remove the image even if it is being used by stopped containers or has other tags
    *     @var bool $noprune Do not delete untagged parent images
    * }
    */
    public function __construct(string $name, array $queryParameters = [])
    {
        $this->name = $name;
        $this->queryParameters = $queryParameters;
    }
    use \PRSW\Docker\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{name}'], [$this->name], '/images/{name}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['force', 'noprune']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['force' => false, 'noprune' => false]);
        $optionsResolver->addAllowedTypes('force', ['bool']);
        $optionsResolver->addAllowedTypes('noprune', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PRSW\Docker\Generated\Exception\ImageDeleteNotFoundException
     * @throws \PRSW\Docker\Generated\Exception\ImageDeleteConflictException
     * @throws \PRSW\Docker\Generated\Exception\ImageDeleteInternalServerErrorException
     *
     * @return null|\PRSW\Docker\Generated\Model\ImageDeleteResponseItem[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ImageDeleteResponseItem[]', 'json');
        }
        if (404 === $status) {
            throw new \PRSW\Docker\Generated\Exception\ImageDeleteNotFoundException($serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (409 === $status) {
            throw new \PRSW\Docker\Generated\Exception\ImageDeleteConflictException($serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \PRSW\Docker\Generated\Exception\ImageDeleteInternalServerErrorException($serializer->deserialize($body, 'PRSW\Docker\Generated\Model\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}