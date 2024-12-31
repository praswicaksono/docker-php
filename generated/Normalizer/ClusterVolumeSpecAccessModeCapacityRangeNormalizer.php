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
    class ClusterVolumeSpecAccessModeCapacityRangeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('RequiredBytes', $data)) {
                $object->setRequiredBytes($data['RequiredBytes']);
            }
            if (\array_key_exists('LimitBytes', $data)) {
                $object->setLimitBytes($data['LimitBytes']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('requiredBytes') && null !== $object->getRequiredBytes()) {
                $data['RequiredBytes'] = $object->getRequiredBytes();
            }
            if ($object->isInitialized('limitBytes') && null !== $object->getLimitBytes()) {
                $data['LimitBytes'] = $object->getLimitBytes();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange::class => false];
        }
    }
} else {
    class ClusterVolumeSpecAccessModeCapacityRangeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange::class;
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
            $object = new \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('RequiredBytes', $data)) {
                $object->setRequiredBytes($data['RequiredBytes']);
            }
            if (\array_key_exists('LimitBytes', $data)) {
                $object->setLimitBytes($data['LimitBytes']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('requiredBytes') && null !== $object->getRequiredBytes()) {
                $data['RequiredBytes'] = $object->getRequiredBytes();
            }
            if ($object->isInitialized('limitBytes') && null !== $object->getLimitBytes()) {
                $data['LimitBytes'] = $object->getLimitBytes();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange::class => false];
        }
    }
}