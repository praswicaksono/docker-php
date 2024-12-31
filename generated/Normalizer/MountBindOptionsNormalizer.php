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
    class MountBindOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \PRSW\Docker\Generated\Model\MountBindOptions::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PRSW\Docker\Generated\Model\MountBindOptions::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PRSW\Docker\Generated\Model\MountBindOptions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Propagation', $data)) {
                $object->setPropagation($data['Propagation']);
            }
            if (\array_key_exists('NonRecursive', $data)) {
                $object->setNonRecursive($data['NonRecursive']);
            }
            if (\array_key_exists('CreateMountpoint', $data)) {
                $object->setCreateMountpoint($data['CreateMountpoint']);
            }
            if (\array_key_exists('ReadOnlyNonRecursive', $data)) {
                $object->setReadOnlyNonRecursive($data['ReadOnlyNonRecursive']);
            }
            if (\array_key_exists('ReadOnlyForceRecursive', $data)) {
                $object->setReadOnlyForceRecursive($data['ReadOnlyForceRecursive']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('propagation') && null !== $object->getPropagation()) {
                $data['Propagation'] = $object->getPropagation();
            }
            if ($object->isInitialized('nonRecursive') && null !== $object->getNonRecursive()) {
                $data['NonRecursive'] = $object->getNonRecursive();
            }
            if ($object->isInitialized('createMountpoint') && null !== $object->getCreateMountpoint()) {
                $data['CreateMountpoint'] = $object->getCreateMountpoint();
            }
            if ($object->isInitialized('readOnlyNonRecursive') && null !== $object->getReadOnlyNonRecursive()) {
                $data['ReadOnlyNonRecursive'] = $object->getReadOnlyNonRecursive();
            }
            if ($object->isInitialized('readOnlyForceRecursive') && null !== $object->getReadOnlyForceRecursive()) {
                $data['ReadOnlyForceRecursive'] = $object->getReadOnlyForceRecursive();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PRSW\Docker\Generated\Model\MountBindOptions::class => false];
        }
    }
} else {
    class MountBindOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \PRSW\Docker\Generated\Model\MountBindOptions::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PRSW\Docker\Generated\Model\MountBindOptions::class;
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
            $object = new \PRSW\Docker\Generated\Model\MountBindOptions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Propagation', $data)) {
                $object->setPropagation($data['Propagation']);
            }
            if (\array_key_exists('NonRecursive', $data)) {
                $object->setNonRecursive($data['NonRecursive']);
            }
            if (\array_key_exists('CreateMountpoint', $data)) {
                $object->setCreateMountpoint($data['CreateMountpoint']);
            }
            if (\array_key_exists('ReadOnlyNonRecursive', $data)) {
                $object->setReadOnlyNonRecursive($data['ReadOnlyNonRecursive']);
            }
            if (\array_key_exists('ReadOnlyForceRecursive', $data)) {
                $object->setReadOnlyForceRecursive($data['ReadOnlyForceRecursive']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('propagation') && null !== $object->getPropagation()) {
                $data['Propagation'] = $object->getPropagation();
            }
            if ($object->isInitialized('nonRecursive') && null !== $object->getNonRecursive()) {
                $data['NonRecursive'] = $object->getNonRecursive();
            }
            if ($object->isInitialized('createMountpoint') && null !== $object->getCreateMountpoint()) {
                $data['CreateMountpoint'] = $object->getCreateMountpoint();
            }
            if ($object->isInitialized('readOnlyNonRecursive') && null !== $object->getReadOnlyNonRecursive()) {
                $data['ReadOnlyNonRecursive'] = $object->getReadOnlyNonRecursive();
            }
            if ($object->isInitialized('readOnlyForceRecursive') && null !== $object->getReadOnlyForceRecursive()) {
                $data['ReadOnlyForceRecursive'] = $object->getReadOnlyForceRecursive();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PRSW\Docker\Generated\Model\MountBindOptions::class => false];
        }
    }
}