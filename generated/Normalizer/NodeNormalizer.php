<?php

namespace PRSW\Docker\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PRSW\Docker\Generated\Runtime\Normalizer\CheckArray;
use PRSW\Docker\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class NodeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \PRSW\Docker\Generated\Model\Node::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PRSW\Docker\Generated\Model\Node::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PRSW\Docker\Generated\Model\Node();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ID', $data)) {
                $object->setID($data['ID']);
            }
            if (\array_key_exists('Version', $data)) {
                $object->setVersion($this->denormalizer->denormalize($data['Version'], \PRSW\Docker\Generated\Model\ObjectVersion::class, 'json', $context));
            }
            if (\array_key_exists('CreatedAt', $data)) {
                $object->setCreatedAt($data['CreatedAt']);
            }
            if (\array_key_exists('UpdatedAt', $data)) {
                $object->setUpdatedAt($data['UpdatedAt']);
            }
            if (\array_key_exists('Spec', $data)) {
                $object->setSpec($this->denormalizer->denormalize($data['Spec'], \PRSW\Docker\Generated\Model\NodeSpec::class, 'json', $context));
            }
            if (\array_key_exists('Description', $data)) {
                $object->setDescription($this->denormalizer->denormalize($data['Description'], \PRSW\Docker\Generated\Model\NodeDescription::class, 'json', $context));
            }
            if (\array_key_exists('Status', $data)) {
                $object->setStatus($this->denormalizer->denormalize($data['Status'], \PRSW\Docker\Generated\Model\NodeStatus::class, 'json', $context));
            }
            if (\array_key_exists('ManagerStatus', $data) && $data['ManagerStatus'] !== null) {
                $object->setManagerStatus($this->denormalizer->denormalize($data['ManagerStatus'], \PRSW\Docker\Generated\Model\ManagerStatus::class, 'json', $context));
            }
            elseif (\array_key_exists('ManagerStatus', $data) && $data['ManagerStatus'] === null) {
                $object->setManagerStatus(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('iD') && null !== $object->getID()) {
                $data['ID'] = $object->getID();
            }
            if ($object->isInitialized('version') && null !== $object->getVersion()) {
                $data['Version'] = $this->normalizer->normalize($object->getVersion(), 'json', $context);
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['CreatedAt'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
                $data['UpdatedAt'] = $object->getUpdatedAt();
            }
            if ($object->isInitialized('spec') && null !== $object->getSpec()) {
                $data['Spec'] = $this->normalizer->normalize($object->getSpec(), 'json', $context);
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['Description'] = $this->normalizer->normalize($object->getDescription(), 'json', $context);
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['Status'] = $this->normalizer->normalize($object->getStatus(), 'json', $context);
            }
            if ($object->isInitialized('managerStatus') && null !== $object->getManagerStatus()) {
                $data['ManagerStatus'] = $this->normalizer->normalize($object->getManagerStatus(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PRSW\Docker\Generated\Model\Node::class => false];
        }
    }
} else {
    class NodeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \PRSW\Docker\Generated\Model\Node::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PRSW\Docker\Generated\Model\Node::class;
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PRSW\Docker\Generated\Model\Node();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ID', $data)) {
                $object->setID($data['ID']);
            }
            if (\array_key_exists('Version', $data)) {
                $object->setVersion($this->denormalizer->denormalize($data['Version'], \PRSW\Docker\Generated\Model\ObjectVersion::class, 'json', $context));
            }
            if (\array_key_exists('CreatedAt', $data)) {
                $object->setCreatedAt($data['CreatedAt']);
            }
            if (\array_key_exists('UpdatedAt', $data)) {
                $object->setUpdatedAt($data['UpdatedAt']);
            }
            if (\array_key_exists('Spec', $data)) {
                $object->setSpec($this->denormalizer->denormalize($data['Spec'], \PRSW\Docker\Generated\Model\NodeSpec::class, 'json', $context));
            }
            if (\array_key_exists('Description', $data)) {
                $object->setDescription($this->denormalizer->denormalize($data['Description'], \PRSW\Docker\Generated\Model\NodeDescription::class, 'json', $context));
            }
            if (\array_key_exists('Status', $data)) {
                $object->setStatus($this->denormalizer->denormalize($data['Status'], \PRSW\Docker\Generated\Model\NodeStatus::class, 'json', $context));
            }
            if (\array_key_exists('ManagerStatus', $data) && $data['ManagerStatus'] !== null) {
                $object->setManagerStatus($this->denormalizer->denormalize($data['ManagerStatus'], \PRSW\Docker\Generated\Model\ManagerStatus::class, 'json', $context));
            }
            elseif (\array_key_exists('ManagerStatus', $data) && $data['ManagerStatus'] === null) {
                $object->setManagerStatus(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('iD') && null !== $object->getID()) {
                $data['ID'] = $object->getID();
            }
            if ($object->isInitialized('version') && null !== $object->getVersion()) {
                $data['Version'] = $this->normalizer->normalize($object->getVersion(), 'json', $context);
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['CreatedAt'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
                $data['UpdatedAt'] = $object->getUpdatedAt();
            }
            if ($object->isInitialized('spec') && null !== $object->getSpec()) {
                $data['Spec'] = $this->normalizer->normalize($object->getSpec(), 'json', $context);
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['Description'] = $this->normalizer->normalize($object->getDescription(), 'json', $context);
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['Status'] = $this->normalizer->normalize($object->getStatus(), 'json', $context);
            }
            if ($object->isInitialized('managerStatus') && null !== $object->getManagerStatus()) {
                $data['ManagerStatus'] = $this->normalizer->normalize($object->getManagerStatus(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PRSW\Docker\Generated\Model\Node::class => false];
        }
    }
}