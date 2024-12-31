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
    class ImageManifestSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \PRSW\Docker\Generated\Model\ImageManifestSummary::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PRSW\Docker\Generated\Model\ImageManifestSummary::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PRSW\Docker\Generated\Model\ImageManifestSummary();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ID', $data)) {
                $object->setID($data['ID']);
            }
            if (\array_key_exists('Descriptor', $data)) {
                $object->setDescriptor($this->denormalizer->denormalize($data['Descriptor'], \PRSW\Docker\Generated\Model\OCIDescriptor::class, 'json', $context));
            }
            if (\array_key_exists('Available', $data)) {
                $object->setAvailable($data['Available']);
            }
            if (\array_key_exists('Size', $data)) {
                $object->setSize($this->denormalizer->denormalize($data['Size'], \PRSW\Docker\Generated\Model\ImageManifestSummarySize::class, 'json', $context));
            }
            if (\array_key_exists('Kind', $data)) {
                $object->setKind($data['Kind']);
            }
            if (\array_key_exists('ImageData', $data) && $data['ImageData'] !== null) {
                $object->setImageData($this->denormalizer->denormalize($data['ImageData'], \PRSW\Docker\Generated\Model\ImageManifestSummaryImageData::class, 'json', $context));
            }
            elseif (\array_key_exists('ImageData', $data) && $data['ImageData'] === null) {
                $object->setImageData(null);
            }
            if (\array_key_exists('AttestationData', $data) && $data['AttestationData'] !== null) {
                $object->setAttestationData($this->denormalizer->denormalize($data['AttestationData'], \PRSW\Docker\Generated\Model\ImageManifestSummaryAttestationData::class, 'json', $context));
            }
            elseif (\array_key_exists('AttestationData', $data) && $data['AttestationData'] === null) {
                $object->setAttestationData(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['ID'] = $object->getID();
            $data['Descriptor'] = $this->normalizer->normalize($object->getDescriptor(), 'json', $context);
            $data['Available'] = $object->getAvailable();
            $data['Size'] = $this->normalizer->normalize($object->getSize(), 'json', $context);
            $data['Kind'] = $object->getKind();
            if ($object->isInitialized('imageData') && null !== $object->getImageData()) {
                $data['ImageData'] = $this->normalizer->normalize($object->getImageData(), 'json', $context);
            }
            if ($object->isInitialized('attestationData') && null !== $object->getAttestationData()) {
                $data['AttestationData'] = $this->normalizer->normalize($object->getAttestationData(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PRSW\Docker\Generated\Model\ImageManifestSummary::class => false];
        }
    }
} else {
    class ImageManifestSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \PRSW\Docker\Generated\Model\ImageManifestSummary::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PRSW\Docker\Generated\Model\ImageManifestSummary::class;
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
            $object = new \PRSW\Docker\Generated\Model\ImageManifestSummary();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ID', $data)) {
                $object->setID($data['ID']);
            }
            if (\array_key_exists('Descriptor', $data)) {
                $object->setDescriptor($this->denormalizer->denormalize($data['Descriptor'], \PRSW\Docker\Generated\Model\OCIDescriptor::class, 'json', $context));
            }
            if (\array_key_exists('Available', $data)) {
                $object->setAvailable($data['Available']);
            }
            if (\array_key_exists('Size', $data)) {
                $object->setSize($this->denormalizer->denormalize($data['Size'], \PRSW\Docker\Generated\Model\ImageManifestSummarySize::class, 'json', $context));
            }
            if (\array_key_exists('Kind', $data)) {
                $object->setKind($data['Kind']);
            }
            if (\array_key_exists('ImageData', $data) && $data['ImageData'] !== null) {
                $object->setImageData($this->denormalizer->denormalize($data['ImageData'], \PRSW\Docker\Generated\Model\ImageManifestSummaryImageData::class, 'json', $context));
            }
            elseif (\array_key_exists('ImageData', $data) && $data['ImageData'] === null) {
                $object->setImageData(null);
            }
            if (\array_key_exists('AttestationData', $data) && $data['AttestationData'] !== null) {
                $object->setAttestationData($this->denormalizer->denormalize($data['AttestationData'], \PRSW\Docker\Generated\Model\ImageManifestSummaryAttestationData::class, 'json', $context));
            }
            elseif (\array_key_exists('AttestationData', $data) && $data['AttestationData'] === null) {
                $object->setAttestationData(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['ID'] = $object->getID();
            $data['Descriptor'] = $this->normalizer->normalize($object->getDescriptor(), 'json', $context);
            $data['Available'] = $object->getAvailable();
            $data['Size'] = $this->normalizer->normalize($object->getSize(), 'json', $context);
            $data['Kind'] = $object->getKind();
            if ($object->isInitialized('imageData') && null !== $object->getImageData()) {
                $data['ImageData'] = $this->normalizer->normalize($object->getImageData(), 'json', $context);
            }
            if ($object->isInitialized('attestationData') && null !== $object->getAttestationData()) {
                $data['AttestationData'] = $this->normalizer->normalize($object->getAttestationData(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PRSW\Docker\Generated\Model\ImageManifestSummary::class => false];
        }
    }
}