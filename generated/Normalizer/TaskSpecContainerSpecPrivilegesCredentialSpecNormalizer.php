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
    class TaskSpecContainerSpecPrivilegesCredentialSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesCredentialSpec();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Config', $data)) {
                $object->setConfig($data['Config']);
            }
            if (\array_key_exists('File', $data)) {
                $object->setFile($data['File']);
            }
            if (\array_key_exists('Registry', $data)) {
                $object->setRegistry($data['Registry']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('config') && null !== $object->getConfig()) {
                $data['Config'] = $object->getConfig();
            }
            if ($object->isInitialized('file') && null !== $object->getFile()) {
                $data['File'] = $object->getFile();
            }
            if ($object->isInitialized('registry') && null !== $object->getRegistry()) {
                $data['Registry'] = $object->getRegistry();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class => false];
        }
    }
} else {
    class TaskSpecContainerSpecPrivilegesCredentialSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class;
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
            $object = new \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesCredentialSpec();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Config', $data)) {
                $object->setConfig($data['Config']);
            }
            if (\array_key_exists('File', $data)) {
                $object->setFile($data['File']);
            }
            if (\array_key_exists('Registry', $data)) {
                $object->setRegistry($data['Registry']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('config') && null !== $object->getConfig()) {
                $data['Config'] = $object->getConfig();
            }
            if ($object->isInitialized('file') && null !== $object->getFile()) {
                $data['File'] = $object->getFile();
            }
            if ($object->isInitialized('registry') && null !== $object->getRegistry()) {
                $data['Registry'] = $object->getRegistry();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class => false];
        }
    }
}