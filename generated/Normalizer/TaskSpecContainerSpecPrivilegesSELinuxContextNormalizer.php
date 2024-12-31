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
    class TaskSpecContainerSpecPrivilegesSELinuxContextNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesSELinuxContext();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Disable', $data)) {
                $object->setDisable($data['Disable']);
            }
            if (\array_key_exists('User', $data)) {
                $object->setUser($data['User']);
            }
            if (\array_key_exists('Role', $data)) {
                $object->setRole($data['Role']);
            }
            if (\array_key_exists('Type', $data)) {
                $object->setType($data['Type']);
            }
            if (\array_key_exists('Level', $data)) {
                $object->setLevel($data['Level']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('disable') && null !== $object->getDisable()) {
                $data['Disable'] = $object->getDisable();
            }
            if ($object->isInitialized('user') && null !== $object->getUser()) {
                $data['User'] = $object->getUser();
            }
            if ($object->isInitialized('role') && null !== $object->getRole()) {
                $data['Role'] = $object->getRole();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['Type'] = $object->getType();
            }
            if ($object->isInitialized('level') && null !== $object->getLevel()) {
                $data['Level'] = $object->getLevel();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class => false];
        }
    }
} else {
    class TaskSpecContainerSpecPrivilegesSELinuxContextNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class;
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
            $object = new \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesSELinuxContext();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Disable', $data)) {
                $object->setDisable($data['Disable']);
            }
            if (\array_key_exists('User', $data)) {
                $object->setUser($data['User']);
            }
            if (\array_key_exists('Role', $data)) {
                $object->setRole($data['Role']);
            }
            if (\array_key_exists('Type', $data)) {
                $object->setType($data['Type']);
            }
            if (\array_key_exists('Level', $data)) {
                $object->setLevel($data['Level']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('disable') && null !== $object->getDisable()) {
                $data['Disable'] = $object->getDisable();
            }
            if ($object->isInitialized('user') && null !== $object->getUser()) {
                $data['User'] = $object->getUser();
            }
            if ($object->isInitialized('role') && null !== $object->getRole()) {
                $data['Role'] = $object->getRole();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['Type'] = $object->getType();
            }
            if ($object->isInitialized('level') && null !== $object->getLevel()) {
                $data['Level'] = $object->getLevel();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class => false];
        }
    }
}