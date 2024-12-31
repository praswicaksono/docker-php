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
    class SwarmSpecCAConfigExternalCAsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \PRSW\Docker\Generated\Model\SwarmSpecCAConfigExternalCAsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PRSW\Docker\Generated\Model\SwarmSpecCAConfigExternalCAsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PRSW\Docker\Generated\Model\SwarmSpecCAConfigExternalCAsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Protocol', $data)) {
                $object->setProtocol($data['Protocol']);
            }
            if (\array_key_exists('URL', $data)) {
                $object->setURL($data['URL']);
            }
            if (\array_key_exists('Options', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Options'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setOptions($values);
            }
            if (\array_key_exists('CACert', $data)) {
                $object->setCACert($data['CACert']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('protocol') && null !== $object->getProtocol()) {
                $data['Protocol'] = $object->getProtocol();
            }
            if ($object->isInitialized('uRL') && null !== $object->getURL()) {
                $data['URL'] = $object->getURL();
            }
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $values = [];
                foreach ($object->getOptions() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['Options'] = $values;
            }
            if ($object->isInitialized('cACert') && null !== $object->getCACert()) {
                $data['CACert'] = $object->getCACert();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PRSW\Docker\Generated\Model\SwarmSpecCAConfigExternalCAsItem::class => false];
        }
    }
} else {
    class SwarmSpecCAConfigExternalCAsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \PRSW\Docker\Generated\Model\SwarmSpecCAConfigExternalCAsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PRSW\Docker\Generated\Model\SwarmSpecCAConfigExternalCAsItem::class;
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
            $object = new \PRSW\Docker\Generated\Model\SwarmSpecCAConfigExternalCAsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Protocol', $data)) {
                $object->setProtocol($data['Protocol']);
            }
            if (\array_key_exists('URL', $data)) {
                $object->setURL($data['URL']);
            }
            if (\array_key_exists('Options', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Options'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setOptions($values);
            }
            if (\array_key_exists('CACert', $data)) {
                $object->setCACert($data['CACert']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('protocol') && null !== $object->getProtocol()) {
                $data['Protocol'] = $object->getProtocol();
            }
            if ($object->isInitialized('uRL') && null !== $object->getURL()) {
                $data['URL'] = $object->getURL();
            }
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $values = [];
                foreach ($object->getOptions() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['Options'] = $values;
            }
            if ($object->isInitialized('cACert') && null !== $object->getCACert()) {
                $data['CACert'] = $object->getCACert();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PRSW\Docker\Generated\Model\SwarmSpecCAConfigExternalCAsItem::class => false];
        }
    }
}