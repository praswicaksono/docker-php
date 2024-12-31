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
    class ImageManifestSummaryImageDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \PRSW\Docker\Generated\Model\ImageManifestSummaryImageData::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PRSW\Docker\Generated\Model\ImageManifestSummaryImageData::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PRSW\Docker\Generated\Model\ImageManifestSummaryImageData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Platform', $data)) {
                $object->setPlatform($this->denormalizer->denormalize($data['Platform'], \PRSW\Docker\Generated\Model\OCIPlatform::class, 'json', $context));
            }
            if (\array_key_exists('Containers', $data)) {
                $values = [];
                foreach ($data['Containers'] as $value) {
                    $values[] = $value;
                }
                $object->setContainers($values);
            }
            if (\array_key_exists('Size', $data)) {
                $object->setSize($this->denormalizer->denormalize($data['Size'], \PRSW\Docker\Generated\Model\ImageManifestSummaryImageDataSize::class, 'json', $context));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['Platform'] = $this->normalizer->normalize($object->getPlatform(), 'json', $context);
            $values = [];
            foreach ($object->getContainers() as $value) {
                $values[] = $value;
            }
            $data['Containers'] = $values;
            $data['Size'] = $this->normalizer->normalize($object->getSize(), 'json', $context);
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PRSW\Docker\Generated\Model\ImageManifestSummaryImageData::class => false];
        }
    }
} else {
    class ImageManifestSummaryImageDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \PRSW\Docker\Generated\Model\ImageManifestSummaryImageData::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PRSW\Docker\Generated\Model\ImageManifestSummaryImageData::class;
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
            $object = new \PRSW\Docker\Generated\Model\ImageManifestSummaryImageData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Platform', $data)) {
                $object->setPlatform($this->denormalizer->denormalize($data['Platform'], \PRSW\Docker\Generated\Model\OCIPlatform::class, 'json', $context));
            }
            if (\array_key_exists('Containers', $data)) {
                $values = [];
                foreach ($data['Containers'] as $value) {
                    $values[] = $value;
                }
                $object->setContainers($values);
            }
            if (\array_key_exists('Size', $data)) {
                $object->setSize($this->denormalizer->denormalize($data['Size'], \PRSW\Docker\Generated\Model\ImageManifestSummaryImageDataSize::class, 'json', $context));
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['Platform'] = $this->normalizer->normalize($object->getPlatform(), 'json', $context);
            $values = [];
            foreach ($object->getContainers() as $value) {
                $values[] = $value;
            }
            $data['Containers'] = $values;
            $data['Size'] = $this->normalizer->normalize($object->getSize(), 'json', $context);
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PRSW\Docker\Generated\Model\ImageManifestSummaryImageData::class => false];
        }
    }
}