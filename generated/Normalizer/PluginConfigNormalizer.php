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
    class PluginConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \PRSW\Docker\Generated\Model\PluginConfig::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PRSW\Docker\Generated\Model\PluginConfig::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PRSW\Docker\Generated\Model\PluginConfig();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('DockerVersion', $data)) {
                $object->setDockerVersion($data['DockerVersion']);
            }
            if (\array_key_exists('Description', $data)) {
                $object->setDescription($data['Description']);
            }
            if (\array_key_exists('Documentation', $data)) {
                $object->setDocumentation($data['Documentation']);
            }
            if (\array_key_exists('Interface', $data)) {
                $object->setInterface($this->denormalizer->denormalize($data['Interface'], \PRSW\Docker\Generated\Model\PluginConfigInterface::class, 'json', $context));
            }
            if (\array_key_exists('Entrypoint', $data)) {
                $values = [];
                foreach ($data['Entrypoint'] as $value) {
                    $values[] = $value;
                }
                $object->setEntrypoint($values);
            }
            if (\array_key_exists('WorkDir', $data)) {
                $object->setWorkDir($data['WorkDir']);
            }
            if (\array_key_exists('User', $data)) {
                $object->setUser($this->denormalizer->denormalize($data['User'], \PRSW\Docker\Generated\Model\PluginConfigUser::class, 'json', $context));
            }
            if (\array_key_exists('Network', $data)) {
                $object->setNetwork($this->denormalizer->denormalize($data['Network'], \PRSW\Docker\Generated\Model\PluginConfigNetwork::class, 'json', $context));
            }
            if (\array_key_exists('Linux', $data)) {
                $object->setLinux($this->denormalizer->denormalize($data['Linux'], \PRSW\Docker\Generated\Model\PluginConfigLinux::class, 'json', $context));
            }
            if (\array_key_exists('PropagatedMount', $data)) {
                $object->setPropagatedMount($data['PropagatedMount']);
            }
            if (\array_key_exists('IpcHost', $data)) {
                $object->setIpcHost($data['IpcHost']);
            }
            if (\array_key_exists('PidHost', $data)) {
                $object->setPidHost($data['PidHost']);
            }
            if (\array_key_exists('Mounts', $data)) {
                $values_1 = [];
                foreach ($data['Mounts'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \PRSW\Docker\Generated\Model\PluginMount::class, 'json', $context);
                }
                $object->setMounts($values_1);
            }
            if (\array_key_exists('Env', $data)) {
                $values_2 = [];
                foreach ($data['Env'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \PRSW\Docker\Generated\Model\PluginEnv::class, 'json', $context);
                }
                $object->setEnv($values_2);
            }
            if (\array_key_exists('Args', $data)) {
                $object->setArgs($this->denormalizer->denormalize($data['Args'], \PRSW\Docker\Generated\Model\PluginConfigArgs::class, 'json', $context));
            }
            if (\array_key_exists('rootfs', $data)) {
                $object->setRootfs($this->denormalizer->denormalize($data['rootfs'], \PRSW\Docker\Generated\Model\PluginConfigRootfs::class, 'json', $context));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('dockerVersion') && null !== $object->getDockerVersion()) {
                $data['DockerVersion'] = $object->getDockerVersion();
            }
            $data['Description'] = $object->getDescription();
            $data['Documentation'] = $object->getDocumentation();
            $data['Interface'] = $this->normalizer->normalize($object->getInterface(), 'json', $context);
            $values = [];
            foreach ($object->getEntrypoint() as $value) {
                $values[] = $value;
            }
            $data['Entrypoint'] = $values;
            $data['WorkDir'] = $object->getWorkDir();
            if ($object->isInitialized('user') && null !== $object->getUser()) {
                $data['User'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
            }
            $data['Network'] = $this->normalizer->normalize($object->getNetwork(), 'json', $context);
            $data['Linux'] = $this->normalizer->normalize($object->getLinux(), 'json', $context);
            $data['PropagatedMount'] = $object->getPropagatedMount();
            $data['IpcHost'] = $object->getIpcHost();
            $data['PidHost'] = $object->getPidHost();
            $values_1 = [];
            foreach ($object->getMounts() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['Mounts'] = $values_1;
            $values_2 = [];
            foreach ($object->getEnv() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['Env'] = $values_2;
            $data['Args'] = $this->normalizer->normalize($object->getArgs(), 'json', $context);
            if ($object->isInitialized('rootfs') && null !== $object->getRootfs()) {
                $data['rootfs'] = $this->normalizer->normalize($object->getRootfs(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PRSW\Docker\Generated\Model\PluginConfig::class => false];
        }
    }
} else {
    class PluginConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \PRSW\Docker\Generated\Model\PluginConfig::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PRSW\Docker\Generated\Model\PluginConfig::class;
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
            $object = new \PRSW\Docker\Generated\Model\PluginConfig();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('DockerVersion', $data)) {
                $object->setDockerVersion($data['DockerVersion']);
            }
            if (\array_key_exists('Description', $data)) {
                $object->setDescription($data['Description']);
            }
            if (\array_key_exists('Documentation', $data)) {
                $object->setDocumentation($data['Documentation']);
            }
            if (\array_key_exists('Interface', $data)) {
                $object->setInterface($this->denormalizer->denormalize($data['Interface'], \PRSW\Docker\Generated\Model\PluginConfigInterface::class, 'json', $context));
            }
            if (\array_key_exists('Entrypoint', $data)) {
                $values = [];
                foreach ($data['Entrypoint'] as $value) {
                    $values[] = $value;
                }
                $object->setEntrypoint($values);
            }
            if (\array_key_exists('WorkDir', $data)) {
                $object->setWorkDir($data['WorkDir']);
            }
            if (\array_key_exists('User', $data)) {
                $object->setUser($this->denormalizer->denormalize($data['User'], \PRSW\Docker\Generated\Model\PluginConfigUser::class, 'json', $context));
            }
            if (\array_key_exists('Network', $data)) {
                $object->setNetwork($this->denormalizer->denormalize($data['Network'], \PRSW\Docker\Generated\Model\PluginConfigNetwork::class, 'json', $context));
            }
            if (\array_key_exists('Linux', $data)) {
                $object->setLinux($this->denormalizer->denormalize($data['Linux'], \PRSW\Docker\Generated\Model\PluginConfigLinux::class, 'json', $context));
            }
            if (\array_key_exists('PropagatedMount', $data)) {
                $object->setPropagatedMount($data['PropagatedMount']);
            }
            if (\array_key_exists('IpcHost', $data)) {
                $object->setIpcHost($data['IpcHost']);
            }
            if (\array_key_exists('PidHost', $data)) {
                $object->setPidHost($data['PidHost']);
            }
            if (\array_key_exists('Mounts', $data)) {
                $values_1 = [];
                foreach ($data['Mounts'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \PRSW\Docker\Generated\Model\PluginMount::class, 'json', $context);
                }
                $object->setMounts($values_1);
            }
            if (\array_key_exists('Env', $data)) {
                $values_2 = [];
                foreach ($data['Env'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \PRSW\Docker\Generated\Model\PluginEnv::class, 'json', $context);
                }
                $object->setEnv($values_2);
            }
            if (\array_key_exists('Args', $data)) {
                $object->setArgs($this->denormalizer->denormalize($data['Args'], \PRSW\Docker\Generated\Model\PluginConfigArgs::class, 'json', $context));
            }
            if (\array_key_exists('rootfs', $data)) {
                $object->setRootfs($this->denormalizer->denormalize($data['rootfs'], \PRSW\Docker\Generated\Model\PluginConfigRootfs::class, 'json', $context));
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('dockerVersion') && null !== $object->getDockerVersion()) {
                $data['DockerVersion'] = $object->getDockerVersion();
            }
            $data['Description'] = $object->getDescription();
            $data['Documentation'] = $object->getDocumentation();
            $data['Interface'] = $this->normalizer->normalize($object->getInterface(), 'json', $context);
            $values = [];
            foreach ($object->getEntrypoint() as $value) {
                $values[] = $value;
            }
            $data['Entrypoint'] = $values;
            $data['WorkDir'] = $object->getWorkDir();
            if ($object->isInitialized('user') && null !== $object->getUser()) {
                $data['User'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
            }
            $data['Network'] = $this->normalizer->normalize($object->getNetwork(), 'json', $context);
            $data['Linux'] = $this->normalizer->normalize($object->getLinux(), 'json', $context);
            $data['PropagatedMount'] = $object->getPropagatedMount();
            $data['IpcHost'] = $object->getIpcHost();
            $data['PidHost'] = $object->getPidHost();
            $values_1 = [];
            foreach ($object->getMounts() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['Mounts'] = $values_1;
            $values_2 = [];
            foreach ($object->getEnv() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['Env'] = $values_2;
            $data['Args'] = $this->normalizer->normalize($object->getArgs(), 'json', $context);
            if ($object->isInitialized('rootfs') && null !== $object->getRootfs()) {
                $data['rootfs'] = $this->normalizer->normalize($object->getRootfs(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PRSW\Docker\Generated\Model\PluginConfig::class => false];
        }
    }
}