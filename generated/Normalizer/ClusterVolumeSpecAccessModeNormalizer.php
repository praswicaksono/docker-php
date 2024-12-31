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
    class ClusterVolumeSpecAccessModeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessMode::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessMode::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessMode();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Scope', $data)) {
                $object->setScope($data['Scope']);
            }
            if (\array_key_exists('Sharing', $data)) {
                $object->setSharing($data['Sharing']);
            }
            if (\array_key_exists('MountVolume', $data)) {
                $object->setMountVolume($data['MountVolume']);
            }
            if (\array_key_exists('Secrets', $data)) {
                $values = [];
                foreach ($data['Secrets'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessModeSecretsItem::class, 'json', $context);
                }
                $object->setSecrets($values);
            }
            if (\array_key_exists('AccessibilityRequirements', $data)) {
                $object->setAccessibilityRequirements($this->denormalizer->denormalize($data['AccessibilityRequirements'], \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessModeAccessibilityRequirements::class, 'json', $context));
            }
            if (\array_key_exists('CapacityRange', $data)) {
                $object->setCapacityRange($this->denormalizer->denormalize($data['CapacityRange'], \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange::class, 'json', $context));
            }
            if (\array_key_exists('Availability', $data)) {
                $object->setAvailability($data['Availability']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('scope') && null !== $object->getScope()) {
                $data['Scope'] = $object->getScope();
            }
            if ($object->isInitialized('sharing') && null !== $object->getSharing()) {
                $data['Sharing'] = $object->getSharing();
            }
            if ($object->isInitialized('mountVolume') && null !== $object->getMountVolume()) {
                $data['MountVolume'] = $object->getMountVolume();
            }
            if ($object->isInitialized('secrets') && null !== $object->getSecrets()) {
                $values = [];
                foreach ($object->getSecrets() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Secrets'] = $values;
            }
            if ($object->isInitialized('accessibilityRequirements') && null !== $object->getAccessibilityRequirements()) {
                $data['AccessibilityRequirements'] = $this->normalizer->normalize($object->getAccessibilityRequirements(), 'json', $context);
            }
            if ($object->isInitialized('capacityRange') && null !== $object->getCapacityRange()) {
                $data['CapacityRange'] = $this->normalizer->normalize($object->getCapacityRange(), 'json', $context);
            }
            if ($object->isInitialized('availability') && null !== $object->getAvailability()) {
                $data['Availability'] = $object->getAvailability();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessMode::class => false];
        }
    }
} else {
    class ClusterVolumeSpecAccessModeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessMode::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessMode::class;
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
            $object = new \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessMode();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Scope', $data)) {
                $object->setScope($data['Scope']);
            }
            if (\array_key_exists('Sharing', $data)) {
                $object->setSharing($data['Sharing']);
            }
            if (\array_key_exists('MountVolume', $data)) {
                $object->setMountVolume($data['MountVolume']);
            }
            if (\array_key_exists('Secrets', $data)) {
                $values = [];
                foreach ($data['Secrets'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessModeSecretsItem::class, 'json', $context);
                }
                $object->setSecrets($values);
            }
            if (\array_key_exists('AccessibilityRequirements', $data)) {
                $object->setAccessibilityRequirements($this->denormalizer->denormalize($data['AccessibilityRequirements'], \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessModeAccessibilityRequirements::class, 'json', $context));
            }
            if (\array_key_exists('CapacityRange', $data)) {
                $object->setCapacityRange($this->denormalizer->denormalize($data['CapacityRange'], \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange::class, 'json', $context));
            }
            if (\array_key_exists('Availability', $data)) {
                $object->setAvailability($data['Availability']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('scope') && null !== $object->getScope()) {
                $data['Scope'] = $object->getScope();
            }
            if ($object->isInitialized('sharing') && null !== $object->getSharing()) {
                $data['Sharing'] = $object->getSharing();
            }
            if ($object->isInitialized('mountVolume') && null !== $object->getMountVolume()) {
                $data['MountVolume'] = $object->getMountVolume();
            }
            if ($object->isInitialized('secrets') && null !== $object->getSecrets()) {
                $values = [];
                foreach ($object->getSecrets() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Secrets'] = $values;
            }
            if ($object->isInitialized('accessibilityRequirements') && null !== $object->getAccessibilityRequirements()) {
                $data['AccessibilityRequirements'] = $this->normalizer->normalize($object->getAccessibilityRequirements(), 'json', $context);
            }
            if ($object->isInitialized('capacityRange') && null !== $object->getCapacityRange()) {
                $data['CapacityRange'] = $this->normalizer->normalize($object->getCapacityRange(), 'json', $context);
            }
            if ($object->isInitialized('availability') && null !== $object->getAvailability()) {
                $data['Availability'] = $object->getAvailability();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessMode::class => false];
        }
    }
}