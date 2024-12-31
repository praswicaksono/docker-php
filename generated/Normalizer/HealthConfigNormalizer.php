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
    class HealthConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \PRSW\Docker\Generated\Model\HealthConfig::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PRSW\Docker\Generated\Model\HealthConfig::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PRSW\Docker\Generated\Model\HealthConfig();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Test', $data)) {
                $values = [];
                foreach ($data['Test'] as $value) {
                    $values[] = $value;
                }
                $object->setTest($values);
            }
            if (\array_key_exists('Interval', $data)) {
                $object->setInterval($data['Interval']);
            }
            if (\array_key_exists('Timeout', $data)) {
                $object->setTimeout($data['Timeout']);
            }
            if (\array_key_exists('Retries', $data)) {
                $object->setRetries($data['Retries']);
            }
            if (\array_key_exists('StartPeriod', $data)) {
                $object->setStartPeriod($data['StartPeriod']);
            }
            if (\array_key_exists('StartInterval', $data)) {
                $object->setStartInterval($data['StartInterval']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('test') && null !== $object->getTest()) {
                $values = [];
                foreach ($object->getTest() as $value) {
                    $values[] = $value;
                }
                $data['Test'] = $values;
            }
            if ($object->isInitialized('interval') && null !== $object->getInterval()) {
                $data['Interval'] = $object->getInterval();
            }
            if ($object->isInitialized('timeout') && null !== $object->getTimeout()) {
                $data['Timeout'] = $object->getTimeout();
            }
            if ($object->isInitialized('retries') && null !== $object->getRetries()) {
                $data['Retries'] = $object->getRetries();
            }
            if ($object->isInitialized('startPeriod') && null !== $object->getStartPeriod()) {
                $data['StartPeriod'] = $object->getStartPeriod();
            }
            if ($object->isInitialized('startInterval') && null !== $object->getStartInterval()) {
                $data['StartInterval'] = $object->getStartInterval();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PRSW\Docker\Generated\Model\HealthConfig::class => false];
        }
    }
} else {
    class HealthConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \PRSW\Docker\Generated\Model\HealthConfig::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PRSW\Docker\Generated\Model\HealthConfig::class;
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
            $object = new \PRSW\Docker\Generated\Model\HealthConfig();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Test', $data)) {
                $values = [];
                foreach ($data['Test'] as $value) {
                    $values[] = $value;
                }
                $object->setTest($values);
            }
            if (\array_key_exists('Interval', $data)) {
                $object->setInterval($data['Interval']);
            }
            if (\array_key_exists('Timeout', $data)) {
                $object->setTimeout($data['Timeout']);
            }
            if (\array_key_exists('Retries', $data)) {
                $object->setRetries($data['Retries']);
            }
            if (\array_key_exists('StartPeriod', $data)) {
                $object->setStartPeriod($data['StartPeriod']);
            }
            if (\array_key_exists('StartInterval', $data)) {
                $object->setStartInterval($data['StartInterval']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('test') && null !== $object->getTest()) {
                $values = [];
                foreach ($object->getTest() as $value) {
                    $values[] = $value;
                }
                $data['Test'] = $values;
            }
            if ($object->isInitialized('interval') && null !== $object->getInterval()) {
                $data['Interval'] = $object->getInterval();
            }
            if ($object->isInitialized('timeout') && null !== $object->getTimeout()) {
                $data['Timeout'] = $object->getTimeout();
            }
            if ($object->isInitialized('retries') && null !== $object->getRetries()) {
                $data['Retries'] = $object->getRetries();
            }
            if ($object->isInitialized('startPeriod') && null !== $object->getStartPeriod()) {
                $data['StartPeriod'] = $object->getStartPeriod();
            }
            if ($object->isInitialized('startInterval') && null !== $object->getStartInterval()) {
                $data['StartInterval'] = $object->getStartInterval();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PRSW\Docker\Generated\Model\HealthConfig::class => false];
        }
    }
}