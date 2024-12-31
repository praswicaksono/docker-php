<?php

namespace PRSW\Docker\Generated\Normalizer;

use PRSW\Docker\Generated\Runtime\Normalizer\CheckArray;
use PRSW\Docker\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = [
            
            \PRSW\Docker\Generated\Model\Port::class => \PRSW\Docker\Generated\Normalizer\PortNormalizer::class,
            
            \PRSW\Docker\Generated\Model\MountPoint::class => \PRSW\Docker\Generated\Normalizer\MountPointNormalizer::class,
            
            \PRSW\Docker\Generated\Model\DeviceMapping::class => \PRSW\Docker\Generated\Normalizer\DeviceMappingNormalizer::class,
            
            \PRSW\Docker\Generated\Model\DeviceRequest::class => \PRSW\Docker\Generated\Normalizer\DeviceRequestNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ThrottleDevice::class => \PRSW\Docker\Generated\Normalizer\ThrottleDeviceNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Mount::class => \PRSW\Docker\Generated\Normalizer\MountNormalizer::class,
            
            \PRSW\Docker\Generated\Model\MountBindOptions::class => \PRSW\Docker\Generated\Normalizer\MountBindOptionsNormalizer::class,
            
            \PRSW\Docker\Generated\Model\MountVolumeOptions::class => \PRSW\Docker\Generated\Normalizer\MountVolumeOptionsNormalizer::class,
            
            \PRSW\Docker\Generated\Model\MountVolumeOptionsDriverConfig::class => \PRSW\Docker\Generated\Normalizer\MountVolumeOptionsDriverConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\MountTmpfsOptions::class => \PRSW\Docker\Generated\Normalizer\MountTmpfsOptionsNormalizer::class,
            
            \PRSW\Docker\Generated\Model\RestartPolicy::class => \PRSW\Docker\Generated\Normalizer\RestartPolicyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Resources::class => \PRSW\Docker\Generated\Normalizer\ResourcesNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ResourcesBlkioWeightDeviceItem::class => \PRSW\Docker\Generated\Normalizer\ResourcesBlkioWeightDeviceItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ResourcesUlimitsItem::class => \PRSW\Docker\Generated\Normalizer\ResourcesUlimitsItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Limit::class => \PRSW\Docker\Generated\Normalizer\LimitNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ResourceObject::class => \PRSW\Docker\Generated\Normalizer\ResourceObjectNormalizer::class,
            
            \PRSW\Docker\Generated\Model\GenericResourcesItem::class => \PRSW\Docker\Generated\Normalizer\GenericResourcesItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\GenericResourcesItemNamedResourceSpec::class => \PRSW\Docker\Generated\Normalizer\GenericResourcesItemNamedResourceSpecNormalizer::class,
            
            \PRSW\Docker\Generated\Model\GenericResourcesItemDiscreteResourceSpec::class => \PRSW\Docker\Generated\Normalizer\GenericResourcesItemDiscreteResourceSpecNormalizer::class,
            
            \PRSW\Docker\Generated\Model\HealthConfig::class => \PRSW\Docker\Generated\Normalizer\HealthConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Health::class => \PRSW\Docker\Generated\Normalizer\HealthNormalizer::class,
            
            \PRSW\Docker\Generated\Model\HealthcheckResult::class => \PRSW\Docker\Generated\Normalizer\HealthcheckResultNormalizer::class,
            
            \PRSW\Docker\Generated\Model\HostConfig::class => \PRSW\Docker\Generated\Normalizer\HostConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\HostConfigLogConfig::class => \PRSW\Docker\Generated\Normalizer\HostConfigLogConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainerConfig::class => \PRSW\Docker\Generated\Normalizer\ContainerConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ImageConfig::class => \PRSW\Docker\Generated\Normalizer\ImageConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\NetworkingConfig::class => \PRSW\Docker\Generated\Normalizer\NetworkingConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\NetworkSettings::class => \PRSW\Docker\Generated\Normalizer\NetworkSettingsNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Address::class => \PRSW\Docker\Generated\Normalizer\AddressNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PortBinding::class => \PRSW\Docker\Generated\Normalizer\PortBindingNormalizer::class,
            
            \PRSW\Docker\Generated\Model\DriverData::class => \PRSW\Docker\Generated\Normalizer\DriverDataNormalizer::class,
            
            \PRSW\Docker\Generated\Model\FilesystemChange::class => \PRSW\Docker\Generated\Normalizer\FilesystemChangeNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ImageInspect::class => \PRSW\Docker\Generated\Normalizer\ImageInspectNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ImageInspectRootFS::class => \PRSW\Docker\Generated\Normalizer\ImageInspectRootFSNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ImageInspectMetadata::class => \PRSW\Docker\Generated\Normalizer\ImageInspectMetadataNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ImageSummary::class => \PRSW\Docker\Generated\Normalizer\ImageSummaryNormalizer::class,
            
            \PRSW\Docker\Generated\Model\AuthConfig::class => \PRSW\Docker\Generated\Normalizer\AuthConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ProcessConfig::class => \PRSW\Docker\Generated\Normalizer\ProcessConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Volume::class => \PRSW\Docker\Generated\Normalizer\VolumeNormalizer::class,
            
            \PRSW\Docker\Generated\Model\VolumeUsageData::class => \PRSW\Docker\Generated\Normalizer\VolumeUsageDataNormalizer::class,
            
            \PRSW\Docker\Generated\Model\VolumeCreateOptions::class => \PRSW\Docker\Generated\Normalizer\VolumeCreateOptionsNormalizer::class,
            
            \PRSW\Docker\Generated\Model\VolumeListResponse::class => \PRSW\Docker\Generated\Normalizer\VolumeListResponseNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Network::class => \PRSW\Docker\Generated\Normalizer\NetworkNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ConfigReference::class => \PRSW\Docker\Generated\Normalizer\ConfigReferenceNormalizer::class,
            
            \PRSW\Docker\Generated\Model\IPAM::class => \PRSW\Docker\Generated\Normalizer\IPAMNormalizer::class,
            
            \PRSW\Docker\Generated\Model\IPAMConfig::class => \PRSW\Docker\Generated\Normalizer\IPAMConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\NetworkContainer::class => \PRSW\Docker\Generated\Normalizer\NetworkContainerNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PeerInfo::class => \PRSW\Docker\Generated\Normalizer\PeerInfoNormalizer::class,
            
            \PRSW\Docker\Generated\Model\NetworkCreateResponse::class => \PRSW\Docker\Generated\Normalizer\NetworkCreateResponseNormalizer::class,
            
            \PRSW\Docker\Generated\Model\BuildInfo::class => \PRSW\Docker\Generated\Normalizer\BuildInfoNormalizer::class,
            
            \PRSW\Docker\Generated\Model\BuildCache::class => \PRSW\Docker\Generated\Normalizer\BuildCacheNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ImageID::class => \PRSW\Docker\Generated\Normalizer\ImageIDNormalizer::class,
            
            \PRSW\Docker\Generated\Model\CreateImageInfo::class => \PRSW\Docker\Generated\Normalizer\CreateImageInfoNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PushImageInfo::class => \PRSW\Docker\Generated\Normalizer\PushImageInfoNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ErrorDetail::class => \PRSW\Docker\Generated\Normalizer\ErrorDetailNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ProgressDetail::class => \PRSW\Docker\Generated\Normalizer\ProgressDetailNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ErrorResponse::class => \PRSW\Docker\Generated\Normalizer\ErrorResponseNormalizer::class,
            
            \PRSW\Docker\Generated\Model\IdResponse::class => \PRSW\Docker\Generated\Normalizer\IdResponseNormalizer::class,
            
            \PRSW\Docker\Generated\Model\EndpointSettings::class => \PRSW\Docker\Generated\Normalizer\EndpointSettingsNormalizer::class,
            
            \PRSW\Docker\Generated\Model\EndpointIPAMConfig::class => \PRSW\Docker\Generated\Normalizer\EndpointIPAMConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PluginMount::class => \PRSW\Docker\Generated\Normalizer\PluginMountNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PluginDevice::class => \PRSW\Docker\Generated\Normalizer\PluginDeviceNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PluginEnv::class => \PRSW\Docker\Generated\Normalizer\PluginEnvNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PluginInterfaceType::class => \PRSW\Docker\Generated\Normalizer\PluginInterfaceTypeNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PluginPrivilege::class => \PRSW\Docker\Generated\Normalizer\PluginPrivilegeNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Plugin::class => \PRSW\Docker\Generated\Normalizer\PluginNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PluginSettings::class => \PRSW\Docker\Generated\Normalizer\PluginSettingsNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PluginConfig::class => \PRSW\Docker\Generated\Normalizer\PluginConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PluginConfigInterface::class => \PRSW\Docker\Generated\Normalizer\PluginConfigInterfaceNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PluginConfigUser::class => \PRSW\Docker\Generated\Normalizer\PluginConfigUserNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PluginConfigNetwork::class => \PRSW\Docker\Generated\Normalizer\PluginConfigNetworkNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PluginConfigLinux::class => \PRSW\Docker\Generated\Normalizer\PluginConfigLinuxNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PluginConfigArgs::class => \PRSW\Docker\Generated\Normalizer\PluginConfigArgsNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PluginConfigRootfs::class => \PRSW\Docker\Generated\Normalizer\PluginConfigRootfsNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ObjectVersion::class => \PRSW\Docker\Generated\Normalizer\ObjectVersionNormalizer::class,
            
            \PRSW\Docker\Generated\Model\NodeSpec::class => \PRSW\Docker\Generated\Normalizer\NodeSpecNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Node::class => \PRSW\Docker\Generated\Normalizer\NodeNormalizer::class,
            
            \PRSW\Docker\Generated\Model\NodeDescription::class => \PRSW\Docker\Generated\Normalizer\NodeDescriptionNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Platform::class => \PRSW\Docker\Generated\Normalizer\PlatformNormalizer::class,
            
            \PRSW\Docker\Generated\Model\EngineDescription::class => \PRSW\Docker\Generated\Normalizer\EngineDescriptionNormalizer::class,
            
            \PRSW\Docker\Generated\Model\EngineDescriptionPluginsItem::class => \PRSW\Docker\Generated\Normalizer\EngineDescriptionPluginsItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TLSInfo::class => \PRSW\Docker\Generated\Normalizer\TLSInfoNormalizer::class,
            
            \PRSW\Docker\Generated\Model\NodeStatus::class => \PRSW\Docker\Generated\Normalizer\NodeStatusNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ManagerStatus::class => \PRSW\Docker\Generated\Normalizer\ManagerStatusNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SwarmSpec::class => \PRSW\Docker\Generated\Normalizer\SwarmSpecNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SwarmSpecOrchestration::class => \PRSW\Docker\Generated\Normalizer\SwarmSpecOrchestrationNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SwarmSpecRaft::class => \PRSW\Docker\Generated\Normalizer\SwarmSpecRaftNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SwarmSpecDispatcher::class => \PRSW\Docker\Generated\Normalizer\SwarmSpecDispatcherNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SwarmSpecCAConfig::class => \PRSW\Docker\Generated\Normalizer\SwarmSpecCAConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SwarmSpecCAConfigExternalCAsItem::class => \PRSW\Docker\Generated\Normalizer\SwarmSpecCAConfigExternalCAsItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SwarmSpecEncryptionConfig::class => \PRSW\Docker\Generated\Normalizer\SwarmSpecEncryptionConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SwarmSpecTaskDefaults::class => \PRSW\Docker\Generated\Normalizer\SwarmSpecTaskDefaultsNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SwarmSpecTaskDefaultsLogDriver::class => \PRSW\Docker\Generated\Normalizer\SwarmSpecTaskDefaultsLogDriverNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ClusterInfo::class => \PRSW\Docker\Generated\Normalizer\ClusterInfoNormalizer::class,
            
            \PRSW\Docker\Generated\Model\JoinTokens::class => \PRSW\Docker\Generated\Normalizer\JoinTokensNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Swarm::class => \PRSW\Docker\Generated\Normalizer\SwarmNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpec::class => \PRSW\Docker\Generated\Normalizer\TaskSpecNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecPluginSpec::class => \PRSW\Docker\Generated\Normalizer\TaskSpecPluginSpecNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecContainerSpec::class => \PRSW\Docker\Generated\Normalizer\TaskSpecContainerSpecNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivileges::class => \PRSW\Docker\Generated\Normalizer\TaskSpecContainerSpecPrivilegesNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class => \PRSW\Docker\Generated\Normalizer\TaskSpecContainerSpecPrivilegesCredentialSpecNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class => \PRSW\Docker\Generated\Normalizer\TaskSpecContainerSpecPrivilegesSELinuxContextNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesSeccomp::class => \PRSW\Docker\Generated\Normalizer\TaskSpecContainerSpecPrivilegesSeccompNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesAppArmor::class => \PRSW\Docker\Generated\Normalizer\TaskSpecContainerSpecPrivilegesAppArmorNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecContainerSpecDNSConfig::class => \PRSW\Docker\Generated\Normalizer\TaskSpecContainerSpecDNSConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecContainerSpecSecretsItem::class => \PRSW\Docker\Generated\Normalizer\TaskSpecContainerSpecSecretsItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecContainerSpecSecretsItemFile::class => \PRSW\Docker\Generated\Normalizer\TaskSpecContainerSpecSecretsItemFileNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecContainerSpecConfigsItem::class => \PRSW\Docker\Generated\Normalizer\TaskSpecContainerSpecConfigsItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecContainerSpecConfigsItemFile::class => \PRSW\Docker\Generated\Normalizer\TaskSpecContainerSpecConfigsItemFileNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecContainerSpecUlimitsItem::class => \PRSW\Docker\Generated\Normalizer\TaskSpecContainerSpecUlimitsItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecNetworkAttachmentSpec::class => \PRSW\Docker\Generated\Normalizer\TaskSpecNetworkAttachmentSpecNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecResources::class => \PRSW\Docker\Generated\Normalizer\TaskSpecResourcesNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecRestartPolicy::class => \PRSW\Docker\Generated\Normalizer\TaskSpecRestartPolicyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecPlacement::class => \PRSW\Docker\Generated\Normalizer\TaskSpecPlacementNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecPlacementPreferencesItem::class => \PRSW\Docker\Generated\Normalizer\TaskSpecPlacementPreferencesItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecPlacementPreferencesItemSpread::class => \PRSW\Docker\Generated\Normalizer\TaskSpecPlacementPreferencesItemSpreadNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecLogDriver::class => \PRSW\Docker\Generated\Normalizer\TaskSpecLogDriverNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainerStatus::class => \PRSW\Docker\Generated\Normalizer\ContainerStatusNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PortStatus::class => \PRSW\Docker\Generated\Normalizer\PortStatusNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskStatus::class => \PRSW\Docker\Generated\Normalizer\TaskStatusNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Task::class => \PRSW\Docker\Generated\Normalizer\TaskNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ServiceSpec::class => \PRSW\Docker\Generated\Normalizer\ServiceSpecNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ServiceSpecMode::class => \PRSW\Docker\Generated\Normalizer\ServiceSpecModeNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ServiceSpecModeReplicated::class => \PRSW\Docker\Generated\Normalizer\ServiceSpecModeReplicatedNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ServiceSpecModeReplicatedJob::class => \PRSW\Docker\Generated\Normalizer\ServiceSpecModeReplicatedJobNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ServiceSpecUpdateConfig::class => \PRSW\Docker\Generated\Normalizer\ServiceSpecUpdateConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ServiceSpecRollbackConfig::class => \PRSW\Docker\Generated\Normalizer\ServiceSpecRollbackConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\EndpointPortConfig::class => \PRSW\Docker\Generated\Normalizer\EndpointPortConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\EndpointSpec::class => \PRSW\Docker\Generated\Normalizer\EndpointSpecNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Service::class => \PRSW\Docker\Generated\Normalizer\ServiceNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ServiceEndpoint::class => \PRSW\Docker\Generated\Normalizer\ServiceEndpointNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ServiceEndpointVirtualIPsItem::class => \PRSW\Docker\Generated\Normalizer\ServiceEndpointVirtualIPsItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ServiceUpdateStatus::class => \PRSW\Docker\Generated\Normalizer\ServiceUpdateStatusNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ServiceServiceStatus::class => \PRSW\Docker\Generated\Normalizer\ServiceServiceStatusNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ServiceJobStatus::class => \PRSW\Docker\Generated\Normalizer\ServiceJobStatusNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ImageDeleteResponseItem::class => \PRSW\Docker\Generated\Normalizer\ImageDeleteResponseItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ServiceCreateResponse::class => \PRSW\Docker\Generated\Normalizer\ServiceCreateResponseNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ServiceUpdateResponse::class => \PRSW\Docker\Generated\Normalizer\ServiceUpdateResponseNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainerSummary::class => \PRSW\Docker\Generated\Normalizer\ContainerSummaryNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainerSummaryHostConfig::class => \PRSW\Docker\Generated\Normalizer\ContainerSummaryHostConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainerSummaryNetworkSettings::class => \PRSW\Docker\Generated\Normalizer\ContainerSummaryNetworkSettingsNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Driver::class => \PRSW\Docker\Generated\Normalizer\DriverNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SecretSpec::class => \PRSW\Docker\Generated\Normalizer\SecretSpecNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Secret::class => \PRSW\Docker\Generated\Normalizer\SecretNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ConfigSpec::class => \PRSW\Docker\Generated\Normalizer\ConfigSpecNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Config::class => \PRSW\Docker\Generated\Normalizer\ConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainerState::class => \PRSW\Docker\Generated\Normalizer\ContainerStateNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainerCreateResponse::class => \PRSW\Docker\Generated\Normalizer\ContainerCreateResponseNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainerWaitResponse::class => \PRSW\Docker\Generated\Normalizer\ContainerWaitResponseNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainerWaitExitError::class => \PRSW\Docker\Generated\Normalizer\ContainerWaitExitErrorNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SystemVersion::class => \PRSW\Docker\Generated\Normalizer\SystemVersionNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SystemVersionPlatform::class => \PRSW\Docker\Generated\Normalizer\SystemVersionPlatformNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SystemVersionComponentsItem::class => \PRSW\Docker\Generated\Normalizer\SystemVersionComponentsItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SystemInfo::class => \PRSW\Docker\Generated\Normalizer\SystemInfoNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SystemInfoDefaultAddressPoolsItem::class => \PRSW\Docker\Generated\Normalizer\SystemInfoDefaultAddressPoolsItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainerdInfo::class => \PRSW\Docker\Generated\Normalizer\ContainerdInfoNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainerdInfoNamespaces::class => \PRSW\Docker\Generated\Normalizer\ContainerdInfoNamespacesNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PluginsInfo::class => \PRSW\Docker\Generated\Normalizer\PluginsInfoNormalizer::class,
            
            \PRSW\Docker\Generated\Model\RegistryServiceConfig::class => \PRSW\Docker\Generated\Normalizer\RegistryServiceConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\IndexInfo::class => \PRSW\Docker\Generated\Normalizer\IndexInfoNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Runtime::class => \PRSW\Docker\Generated\Normalizer\RuntimeNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Commit::class => \PRSW\Docker\Generated\Normalizer\CommitNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SwarmInfo::class => \PRSW\Docker\Generated\Normalizer\SwarmInfoNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PeerNode::class => \PRSW\Docker\Generated\Normalizer\PeerNodeNormalizer::class,
            
            \PRSW\Docker\Generated\Model\NetworkAttachmentConfig::class => \PRSW\Docker\Generated\Normalizer\NetworkAttachmentConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\EventActor::class => \PRSW\Docker\Generated\Normalizer\EventActorNormalizer::class,
            
            \PRSW\Docker\Generated\Model\EventMessage::class => \PRSW\Docker\Generated\Normalizer\EventMessageNormalizer::class,
            
            \PRSW\Docker\Generated\Model\OCIDescriptor::class => \PRSW\Docker\Generated\Normalizer\OCIDescriptorNormalizer::class,
            
            \PRSW\Docker\Generated\Model\OCIPlatform::class => \PRSW\Docker\Generated\Normalizer\OCIPlatformNormalizer::class,
            
            \PRSW\Docker\Generated\Model\DistributionInspect::class => \PRSW\Docker\Generated\Normalizer\DistributionInspectNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ClusterVolume::class => \PRSW\Docker\Generated\Normalizer\ClusterVolumeNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ClusterVolumeInfo::class => \PRSW\Docker\Generated\Normalizer\ClusterVolumeInfoNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ClusterVolumePublishStatusItem::class => \PRSW\Docker\Generated\Normalizer\ClusterVolumePublishStatusItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ClusterVolumeSpec::class => \PRSW\Docker\Generated\Normalizer\ClusterVolumeSpecNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessMode::class => \PRSW\Docker\Generated\Normalizer\ClusterVolumeSpecAccessModeNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessModeSecretsItem::class => \PRSW\Docker\Generated\Normalizer\ClusterVolumeSpecAccessModeSecretsItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessModeAccessibilityRequirements::class => \PRSW\Docker\Generated\Normalizer\ClusterVolumeSpecAccessModeAccessibilityRequirementsNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange::class => \PRSW\Docker\Generated\Normalizer\ClusterVolumeSpecAccessModeCapacityRangeNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ImageManifestSummary::class => \PRSW\Docker\Generated\Normalizer\ImageManifestSummaryNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ImageManifestSummarySize::class => \PRSW\Docker\Generated\Normalizer\ImageManifestSummarySizeNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ImageManifestSummaryImageData::class => \PRSW\Docker\Generated\Normalizer\ImageManifestSummaryImageDataNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ImageManifestSummaryImageDataSize::class => \PRSW\Docker\Generated\Normalizer\ImageManifestSummaryImageDataSizeNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ImageManifestSummaryAttestationData::class => \PRSW\Docker\Generated\Normalizer\ImageManifestSummaryAttestationDataNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainersCreatePostBody::class => \PRSW\Docker\Generated\Normalizer\ContainersCreatePostBodyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainersIdJsonGetResponse200::class => \PRSW\Docker\Generated\Normalizer\ContainersIdJsonGetResponse200Normalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainersIdTopGetResponse200::class => \PRSW\Docker\Generated\Normalizer\ContainersIdTopGetResponse200Normalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainersIdUpdatePostBody::class => \PRSW\Docker\Generated\Normalizer\ContainersIdUpdatePostBodyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainersIdUpdatePostResponse200::class => \PRSW\Docker\Generated\Normalizer\ContainersIdUpdatePostResponse200Normalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainersPrunePostResponse200::class => \PRSW\Docker\Generated\Normalizer\ContainersPrunePostResponse200Normalizer::class,
            
            \PRSW\Docker\Generated\Model\BuildPrunePostResponse200::class => \PRSW\Docker\Generated\Normalizer\BuildPrunePostResponse200Normalizer::class,
            
            \PRSW\Docker\Generated\Model\ImagesNameHistoryGetResponse200Item::class => \PRSW\Docker\Generated\Normalizer\ImagesNameHistoryGetResponse200ItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ImagesSearchGetResponse200Item::class => \PRSW\Docker\Generated\Normalizer\ImagesSearchGetResponse200ItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ImagesPrunePostResponse200::class => \PRSW\Docker\Generated\Normalizer\ImagesPrunePostResponse200Normalizer::class,
            
            \PRSW\Docker\Generated\Model\AuthPostResponse200::class => \PRSW\Docker\Generated\Normalizer\AuthPostResponse200Normalizer::class,
            
            \PRSW\Docker\Generated\Model\SystemDfGetResponse200::class => \PRSW\Docker\Generated\Normalizer\SystemDfGetResponse200Normalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainersIdExecPostBody::class => \PRSW\Docker\Generated\Normalizer\ContainersIdExecPostBodyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ExecIdStartPostBody::class => \PRSW\Docker\Generated\Normalizer\ExecIdStartPostBodyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ExecIdJsonGetResponse200::class => \PRSW\Docker\Generated\Normalizer\ExecIdJsonGetResponse200Normalizer::class,
            
            \PRSW\Docker\Generated\Model\VolumesNamePutBody::class => \PRSW\Docker\Generated\Normalizer\VolumesNamePutBodyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\VolumesPrunePostResponse200::class => \PRSW\Docker\Generated\Normalizer\VolumesPrunePostResponse200Normalizer::class,
            
            \PRSW\Docker\Generated\Model\NetworksCreatePostBody::class => \PRSW\Docker\Generated\Normalizer\NetworksCreatePostBodyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\NetworksIdConnectPostBody::class => \PRSW\Docker\Generated\Normalizer\NetworksIdConnectPostBodyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\NetworksIdDisconnectPostBody::class => \PRSW\Docker\Generated\Normalizer\NetworksIdDisconnectPostBodyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\NetworksPrunePostResponse200::class => \PRSW\Docker\Generated\Normalizer\NetworksPrunePostResponse200Normalizer::class,
            
            \PRSW\Docker\Generated\Model\SwarmInitPostBody::class => \PRSW\Docker\Generated\Normalizer\SwarmInitPostBodyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SwarmJoinPostBody::class => \PRSW\Docker\Generated\Normalizer\SwarmJoinPostBodyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SwarmUnlockkeyGetResponse200::class => \PRSW\Docker\Generated\Normalizer\SwarmUnlockkeyGetResponse200Normalizer::class,
            
            \PRSW\Docker\Generated\Model\SwarmUnlockPostBody::class => \PRSW\Docker\Generated\Normalizer\SwarmUnlockPostBodyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ServicesCreatePostBody::class => \PRSW\Docker\Generated\Normalizer\ServicesCreatePostBodyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ServicesIdUpdatePostBody::class => \PRSW\Docker\Generated\Normalizer\ServicesIdUpdatePostBodyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SecretsCreatePostBody::class => \PRSW\Docker\Generated\Normalizer\SecretsCreatePostBodyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ConfigsCreatePostBody::class => \PRSW\Docker\Generated\Normalizer\ConfigsCreatePostBodyNormalizer::class,
            
            \Jane\Component\JsonSchemaRuntime\Reference::class => \PRSW\Docker\Generated\Runtime\Normalizer\ReferenceNormalizer::class,
        ], $normalizersCache = [];
        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return array_key_exists($type, $this->normalizers);
        }
        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);
            return $normalizer->normalize($object, $format, $context);
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);
            return $denormalizer->denormalize($data, $type, $format, $context);
        }
        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }
        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;
            return $normalizer;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [
                
                \PRSW\Docker\Generated\Model\Port::class => false,
                \PRSW\Docker\Generated\Model\MountPoint::class => false,
                \PRSW\Docker\Generated\Model\DeviceMapping::class => false,
                \PRSW\Docker\Generated\Model\DeviceRequest::class => false,
                \PRSW\Docker\Generated\Model\ThrottleDevice::class => false,
                \PRSW\Docker\Generated\Model\Mount::class => false,
                \PRSW\Docker\Generated\Model\MountBindOptions::class => false,
                \PRSW\Docker\Generated\Model\MountVolumeOptions::class => false,
                \PRSW\Docker\Generated\Model\MountVolumeOptionsDriverConfig::class => false,
                \PRSW\Docker\Generated\Model\MountTmpfsOptions::class => false,
                \PRSW\Docker\Generated\Model\RestartPolicy::class => false,
                \PRSW\Docker\Generated\Model\Resources::class => false,
                \PRSW\Docker\Generated\Model\ResourcesBlkioWeightDeviceItem::class => false,
                \PRSW\Docker\Generated\Model\ResourcesUlimitsItem::class => false,
                \PRSW\Docker\Generated\Model\Limit::class => false,
                \PRSW\Docker\Generated\Model\ResourceObject::class => false,
                \PRSW\Docker\Generated\Model\GenericResourcesItem::class => false,
                \PRSW\Docker\Generated\Model\GenericResourcesItemNamedResourceSpec::class => false,
                \PRSW\Docker\Generated\Model\GenericResourcesItemDiscreteResourceSpec::class => false,
                \PRSW\Docker\Generated\Model\HealthConfig::class => false,
                \PRSW\Docker\Generated\Model\Health::class => false,
                \PRSW\Docker\Generated\Model\HealthcheckResult::class => false,
                \PRSW\Docker\Generated\Model\HostConfig::class => false,
                \PRSW\Docker\Generated\Model\HostConfigLogConfig::class => false,
                \PRSW\Docker\Generated\Model\ContainerConfig::class => false,
                \PRSW\Docker\Generated\Model\ImageConfig::class => false,
                \PRSW\Docker\Generated\Model\NetworkingConfig::class => false,
                \PRSW\Docker\Generated\Model\NetworkSettings::class => false,
                \PRSW\Docker\Generated\Model\Address::class => false,
                \PRSW\Docker\Generated\Model\PortBinding::class => false,
                \PRSW\Docker\Generated\Model\DriverData::class => false,
                \PRSW\Docker\Generated\Model\FilesystemChange::class => false,
                \PRSW\Docker\Generated\Model\ImageInspect::class => false,
                \PRSW\Docker\Generated\Model\ImageInspectRootFS::class => false,
                \PRSW\Docker\Generated\Model\ImageInspectMetadata::class => false,
                \PRSW\Docker\Generated\Model\ImageSummary::class => false,
                \PRSW\Docker\Generated\Model\AuthConfig::class => false,
                \PRSW\Docker\Generated\Model\ProcessConfig::class => false,
                \PRSW\Docker\Generated\Model\Volume::class => false,
                \PRSW\Docker\Generated\Model\VolumeUsageData::class => false,
                \PRSW\Docker\Generated\Model\VolumeCreateOptions::class => false,
                \PRSW\Docker\Generated\Model\VolumeListResponse::class => false,
                \PRSW\Docker\Generated\Model\Network::class => false,
                \PRSW\Docker\Generated\Model\ConfigReference::class => false,
                \PRSW\Docker\Generated\Model\IPAM::class => false,
                \PRSW\Docker\Generated\Model\IPAMConfig::class => false,
                \PRSW\Docker\Generated\Model\NetworkContainer::class => false,
                \PRSW\Docker\Generated\Model\PeerInfo::class => false,
                \PRSW\Docker\Generated\Model\NetworkCreateResponse::class => false,
                \PRSW\Docker\Generated\Model\BuildInfo::class => false,
                \PRSW\Docker\Generated\Model\BuildCache::class => false,
                \PRSW\Docker\Generated\Model\ImageID::class => false,
                \PRSW\Docker\Generated\Model\CreateImageInfo::class => false,
                \PRSW\Docker\Generated\Model\PushImageInfo::class => false,
                \PRSW\Docker\Generated\Model\ErrorDetail::class => false,
                \PRSW\Docker\Generated\Model\ProgressDetail::class => false,
                \PRSW\Docker\Generated\Model\ErrorResponse::class => false,
                \PRSW\Docker\Generated\Model\IdResponse::class => false,
                \PRSW\Docker\Generated\Model\EndpointSettings::class => false,
                \PRSW\Docker\Generated\Model\EndpointIPAMConfig::class => false,
                \PRSW\Docker\Generated\Model\PluginMount::class => false,
                \PRSW\Docker\Generated\Model\PluginDevice::class => false,
                \PRSW\Docker\Generated\Model\PluginEnv::class => false,
                \PRSW\Docker\Generated\Model\PluginInterfaceType::class => false,
                \PRSW\Docker\Generated\Model\PluginPrivilege::class => false,
                \PRSW\Docker\Generated\Model\Plugin::class => false,
                \PRSW\Docker\Generated\Model\PluginSettings::class => false,
                \PRSW\Docker\Generated\Model\PluginConfig::class => false,
                \PRSW\Docker\Generated\Model\PluginConfigInterface::class => false,
                \PRSW\Docker\Generated\Model\PluginConfigUser::class => false,
                \PRSW\Docker\Generated\Model\PluginConfigNetwork::class => false,
                \PRSW\Docker\Generated\Model\PluginConfigLinux::class => false,
                \PRSW\Docker\Generated\Model\PluginConfigArgs::class => false,
                \PRSW\Docker\Generated\Model\PluginConfigRootfs::class => false,
                \PRSW\Docker\Generated\Model\ObjectVersion::class => false,
                \PRSW\Docker\Generated\Model\NodeSpec::class => false,
                \PRSW\Docker\Generated\Model\Node::class => false,
                \PRSW\Docker\Generated\Model\NodeDescription::class => false,
                \PRSW\Docker\Generated\Model\Platform::class => false,
                \PRSW\Docker\Generated\Model\EngineDescription::class => false,
                \PRSW\Docker\Generated\Model\EngineDescriptionPluginsItem::class => false,
                \PRSW\Docker\Generated\Model\TLSInfo::class => false,
                \PRSW\Docker\Generated\Model\NodeStatus::class => false,
                \PRSW\Docker\Generated\Model\ManagerStatus::class => false,
                \PRSW\Docker\Generated\Model\SwarmSpec::class => false,
                \PRSW\Docker\Generated\Model\SwarmSpecOrchestration::class => false,
                \PRSW\Docker\Generated\Model\SwarmSpecRaft::class => false,
                \PRSW\Docker\Generated\Model\SwarmSpecDispatcher::class => false,
                \PRSW\Docker\Generated\Model\SwarmSpecCAConfig::class => false,
                \PRSW\Docker\Generated\Model\SwarmSpecCAConfigExternalCAsItem::class => false,
                \PRSW\Docker\Generated\Model\SwarmSpecEncryptionConfig::class => false,
                \PRSW\Docker\Generated\Model\SwarmSpecTaskDefaults::class => false,
                \PRSW\Docker\Generated\Model\SwarmSpecTaskDefaultsLogDriver::class => false,
                \PRSW\Docker\Generated\Model\ClusterInfo::class => false,
                \PRSW\Docker\Generated\Model\JoinTokens::class => false,
                \PRSW\Docker\Generated\Model\Swarm::class => false,
                \PRSW\Docker\Generated\Model\TaskSpec::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecPluginSpec::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecContainerSpec::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivileges::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesSeccomp::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesAppArmor::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecContainerSpecDNSConfig::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecContainerSpecSecretsItem::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecContainerSpecSecretsItemFile::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecContainerSpecConfigsItem::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecContainerSpecConfigsItemFile::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecContainerSpecUlimitsItem::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecNetworkAttachmentSpec::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecResources::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecRestartPolicy::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecPlacement::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecPlacementPreferencesItem::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecPlacementPreferencesItemSpread::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecLogDriver::class => false,
                \PRSW\Docker\Generated\Model\ContainerStatus::class => false,
                \PRSW\Docker\Generated\Model\PortStatus::class => false,
                \PRSW\Docker\Generated\Model\TaskStatus::class => false,
                \PRSW\Docker\Generated\Model\Task::class => false,
                \PRSW\Docker\Generated\Model\ServiceSpec::class => false,
                \PRSW\Docker\Generated\Model\ServiceSpecMode::class => false,
                \PRSW\Docker\Generated\Model\ServiceSpecModeReplicated::class => false,
                \PRSW\Docker\Generated\Model\ServiceSpecModeReplicatedJob::class => false,
                \PRSW\Docker\Generated\Model\ServiceSpecUpdateConfig::class => false,
                \PRSW\Docker\Generated\Model\ServiceSpecRollbackConfig::class => false,
                \PRSW\Docker\Generated\Model\EndpointPortConfig::class => false,
                \PRSW\Docker\Generated\Model\EndpointSpec::class => false,
                \PRSW\Docker\Generated\Model\Service::class => false,
                \PRSW\Docker\Generated\Model\ServiceEndpoint::class => false,
                \PRSW\Docker\Generated\Model\ServiceEndpointVirtualIPsItem::class => false,
                \PRSW\Docker\Generated\Model\ServiceUpdateStatus::class => false,
                \PRSW\Docker\Generated\Model\ServiceServiceStatus::class => false,
                \PRSW\Docker\Generated\Model\ServiceJobStatus::class => false,
                \PRSW\Docker\Generated\Model\ImageDeleteResponseItem::class => false,
                \PRSW\Docker\Generated\Model\ServiceCreateResponse::class => false,
                \PRSW\Docker\Generated\Model\ServiceUpdateResponse::class => false,
                \PRSW\Docker\Generated\Model\ContainerSummary::class => false,
                \PRSW\Docker\Generated\Model\ContainerSummaryHostConfig::class => false,
                \PRSW\Docker\Generated\Model\ContainerSummaryNetworkSettings::class => false,
                \PRSW\Docker\Generated\Model\Driver::class => false,
                \PRSW\Docker\Generated\Model\SecretSpec::class => false,
                \PRSW\Docker\Generated\Model\Secret::class => false,
                \PRSW\Docker\Generated\Model\ConfigSpec::class => false,
                \PRSW\Docker\Generated\Model\Config::class => false,
                \PRSW\Docker\Generated\Model\ContainerState::class => false,
                \PRSW\Docker\Generated\Model\ContainerCreateResponse::class => false,
                \PRSW\Docker\Generated\Model\ContainerWaitResponse::class => false,
                \PRSW\Docker\Generated\Model\ContainerWaitExitError::class => false,
                \PRSW\Docker\Generated\Model\SystemVersion::class => false,
                \PRSW\Docker\Generated\Model\SystemVersionPlatform::class => false,
                \PRSW\Docker\Generated\Model\SystemVersionComponentsItem::class => false,
                \PRSW\Docker\Generated\Model\SystemInfo::class => false,
                \PRSW\Docker\Generated\Model\SystemInfoDefaultAddressPoolsItem::class => false,
                \PRSW\Docker\Generated\Model\ContainerdInfo::class => false,
                \PRSW\Docker\Generated\Model\ContainerdInfoNamespaces::class => false,
                \PRSW\Docker\Generated\Model\PluginsInfo::class => false,
                \PRSW\Docker\Generated\Model\RegistryServiceConfig::class => false,
                \PRSW\Docker\Generated\Model\IndexInfo::class => false,
                \PRSW\Docker\Generated\Model\Runtime::class => false,
                \PRSW\Docker\Generated\Model\Commit::class => false,
                \PRSW\Docker\Generated\Model\SwarmInfo::class => false,
                \PRSW\Docker\Generated\Model\PeerNode::class => false,
                \PRSW\Docker\Generated\Model\NetworkAttachmentConfig::class => false,
                \PRSW\Docker\Generated\Model\EventActor::class => false,
                \PRSW\Docker\Generated\Model\EventMessage::class => false,
                \PRSW\Docker\Generated\Model\OCIDescriptor::class => false,
                \PRSW\Docker\Generated\Model\OCIPlatform::class => false,
                \PRSW\Docker\Generated\Model\DistributionInspect::class => false,
                \PRSW\Docker\Generated\Model\ClusterVolume::class => false,
                \PRSW\Docker\Generated\Model\ClusterVolumeInfo::class => false,
                \PRSW\Docker\Generated\Model\ClusterVolumePublishStatusItem::class => false,
                \PRSW\Docker\Generated\Model\ClusterVolumeSpec::class => false,
                \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessMode::class => false,
                \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessModeSecretsItem::class => false,
                \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessModeAccessibilityRequirements::class => false,
                \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange::class => false,
                \PRSW\Docker\Generated\Model\ImageManifestSummary::class => false,
                \PRSW\Docker\Generated\Model\ImageManifestSummarySize::class => false,
                \PRSW\Docker\Generated\Model\ImageManifestSummaryImageData::class => false,
                \PRSW\Docker\Generated\Model\ImageManifestSummaryImageDataSize::class => false,
                \PRSW\Docker\Generated\Model\ImageManifestSummaryAttestationData::class => false,
                \PRSW\Docker\Generated\Model\ContainersCreatePostBody::class => false,
                \PRSW\Docker\Generated\Model\ContainersIdJsonGetResponse200::class => false,
                \PRSW\Docker\Generated\Model\ContainersIdTopGetResponse200::class => false,
                \PRSW\Docker\Generated\Model\ContainersIdUpdatePostBody::class => false,
                \PRSW\Docker\Generated\Model\ContainersIdUpdatePostResponse200::class => false,
                \PRSW\Docker\Generated\Model\ContainersPrunePostResponse200::class => false,
                \PRSW\Docker\Generated\Model\BuildPrunePostResponse200::class => false,
                \PRSW\Docker\Generated\Model\ImagesNameHistoryGetResponse200Item::class => false,
                \PRSW\Docker\Generated\Model\ImagesSearchGetResponse200Item::class => false,
                \PRSW\Docker\Generated\Model\ImagesPrunePostResponse200::class => false,
                \PRSW\Docker\Generated\Model\AuthPostResponse200::class => false,
                \PRSW\Docker\Generated\Model\SystemDfGetResponse200::class => false,
                \PRSW\Docker\Generated\Model\ContainersIdExecPostBody::class => false,
                \PRSW\Docker\Generated\Model\ExecIdStartPostBody::class => false,
                \PRSW\Docker\Generated\Model\ExecIdJsonGetResponse200::class => false,
                \PRSW\Docker\Generated\Model\VolumesNamePutBody::class => false,
                \PRSW\Docker\Generated\Model\VolumesPrunePostResponse200::class => false,
                \PRSW\Docker\Generated\Model\NetworksCreatePostBody::class => false,
                \PRSW\Docker\Generated\Model\NetworksIdConnectPostBody::class => false,
                \PRSW\Docker\Generated\Model\NetworksIdDisconnectPostBody::class => false,
                \PRSW\Docker\Generated\Model\NetworksPrunePostResponse200::class => false,
                \PRSW\Docker\Generated\Model\SwarmInitPostBody::class => false,
                \PRSW\Docker\Generated\Model\SwarmJoinPostBody::class => false,
                \PRSW\Docker\Generated\Model\SwarmUnlockkeyGetResponse200::class => false,
                \PRSW\Docker\Generated\Model\SwarmUnlockPostBody::class => false,
                \PRSW\Docker\Generated\Model\ServicesCreatePostBody::class => false,
                \PRSW\Docker\Generated\Model\ServicesIdUpdatePostBody::class => false,
                \PRSW\Docker\Generated\Model\SecretsCreatePostBody::class => false,
                \PRSW\Docker\Generated\Model\ConfigsCreatePostBody::class => false,
                \Jane\Component\JsonSchemaRuntime\Reference::class => false,
            ];
        }
    }
} else {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = [
            
            \PRSW\Docker\Generated\Model\Port::class => \PRSW\Docker\Generated\Normalizer\PortNormalizer::class,
            
            \PRSW\Docker\Generated\Model\MountPoint::class => \PRSW\Docker\Generated\Normalizer\MountPointNormalizer::class,
            
            \PRSW\Docker\Generated\Model\DeviceMapping::class => \PRSW\Docker\Generated\Normalizer\DeviceMappingNormalizer::class,
            
            \PRSW\Docker\Generated\Model\DeviceRequest::class => \PRSW\Docker\Generated\Normalizer\DeviceRequestNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ThrottleDevice::class => \PRSW\Docker\Generated\Normalizer\ThrottleDeviceNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Mount::class => \PRSW\Docker\Generated\Normalizer\MountNormalizer::class,
            
            \PRSW\Docker\Generated\Model\MountBindOptions::class => \PRSW\Docker\Generated\Normalizer\MountBindOptionsNormalizer::class,
            
            \PRSW\Docker\Generated\Model\MountVolumeOptions::class => \PRSW\Docker\Generated\Normalizer\MountVolumeOptionsNormalizer::class,
            
            \PRSW\Docker\Generated\Model\MountVolumeOptionsDriverConfig::class => \PRSW\Docker\Generated\Normalizer\MountVolumeOptionsDriverConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\MountTmpfsOptions::class => \PRSW\Docker\Generated\Normalizer\MountTmpfsOptionsNormalizer::class,
            
            \PRSW\Docker\Generated\Model\RestartPolicy::class => \PRSW\Docker\Generated\Normalizer\RestartPolicyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Resources::class => \PRSW\Docker\Generated\Normalizer\ResourcesNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ResourcesBlkioWeightDeviceItem::class => \PRSW\Docker\Generated\Normalizer\ResourcesBlkioWeightDeviceItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ResourcesUlimitsItem::class => \PRSW\Docker\Generated\Normalizer\ResourcesUlimitsItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Limit::class => \PRSW\Docker\Generated\Normalizer\LimitNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ResourceObject::class => \PRSW\Docker\Generated\Normalizer\ResourceObjectNormalizer::class,
            
            \PRSW\Docker\Generated\Model\GenericResourcesItem::class => \PRSW\Docker\Generated\Normalizer\GenericResourcesItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\GenericResourcesItemNamedResourceSpec::class => \PRSW\Docker\Generated\Normalizer\GenericResourcesItemNamedResourceSpecNormalizer::class,
            
            \PRSW\Docker\Generated\Model\GenericResourcesItemDiscreteResourceSpec::class => \PRSW\Docker\Generated\Normalizer\GenericResourcesItemDiscreteResourceSpecNormalizer::class,
            
            \PRSW\Docker\Generated\Model\HealthConfig::class => \PRSW\Docker\Generated\Normalizer\HealthConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Health::class => \PRSW\Docker\Generated\Normalizer\HealthNormalizer::class,
            
            \PRSW\Docker\Generated\Model\HealthcheckResult::class => \PRSW\Docker\Generated\Normalizer\HealthcheckResultNormalizer::class,
            
            \PRSW\Docker\Generated\Model\HostConfig::class => \PRSW\Docker\Generated\Normalizer\HostConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\HostConfigLogConfig::class => \PRSW\Docker\Generated\Normalizer\HostConfigLogConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainerConfig::class => \PRSW\Docker\Generated\Normalizer\ContainerConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ImageConfig::class => \PRSW\Docker\Generated\Normalizer\ImageConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\NetworkingConfig::class => \PRSW\Docker\Generated\Normalizer\NetworkingConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\NetworkSettings::class => \PRSW\Docker\Generated\Normalizer\NetworkSettingsNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Address::class => \PRSW\Docker\Generated\Normalizer\AddressNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PortBinding::class => \PRSW\Docker\Generated\Normalizer\PortBindingNormalizer::class,
            
            \PRSW\Docker\Generated\Model\DriverData::class => \PRSW\Docker\Generated\Normalizer\DriverDataNormalizer::class,
            
            \PRSW\Docker\Generated\Model\FilesystemChange::class => \PRSW\Docker\Generated\Normalizer\FilesystemChangeNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ImageInspect::class => \PRSW\Docker\Generated\Normalizer\ImageInspectNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ImageInspectRootFS::class => \PRSW\Docker\Generated\Normalizer\ImageInspectRootFSNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ImageInspectMetadata::class => \PRSW\Docker\Generated\Normalizer\ImageInspectMetadataNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ImageSummary::class => \PRSW\Docker\Generated\Normalizer\ImageSummaryNormalizer::class,
            
            \PRSW\Docker\Generated\Model\AuthConfig::class => \PRSW\Docker\Generated\Normalizer\AuthConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ProcessConfig::class => \PRSW\Docker\Generated\Normalizer\ProcessConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Volume::class => \PRSW\Docker\Generated\Normalizer\VolumeNormalizer::class,
            
            \PRSW\Docker\Generated\Model\VolumeUsageData::class => \PRSW\Docker\Generated\Normalizer\VolumeUsageDataNormalizer::class,
            
            \PRSW\Docker\Generated\Model\VolumeCreateOptions::class => \PRSW\Docker\Generated\Normalizer\VolumeCreateOptionsNormalizer::class,
            
            \PRSW\Docker\Generated\Model\VolumeListResponse::class => \PRSW\Docker\Generated\Normalizer\VolumeListResponseNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Network::class => \PRSW\Docker\Generated\Normalizer\NetworkNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ConfigReference::class => \PRSW\Docker\Generated\Normalizer\ConfigReferenceNormalizer::class,
            
            \PRSW\Docker\Generated\Model\IPAM::class => \PRSW\Docker\Generated\Normalizer\IPAMNormalizer::class,
            
            \PRSW\Docker\Generated\Model\IPAMConfig::class => \PRSW\Docker\Generated\Normalizer\IPAMConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\NetworkContainer::class => \PRSW\Docker\Generated\Normalizer\NetworkContainerNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PeerInfo::class => \PRSW\Docker\Generated\Normalizer\PeerInfoNormalizer::class,
            
            \PRSW\Docker\Generated\Model\NetworkCreateResponse::class => \PRSW\Docker\Generated\Normalizer\NetworkCreateResponseNormalizer::class,
            
            \PRSW\Docker\Generated\Model\BuildInfo::class => \PRSW\Docker\Generated\Normalizer\BuildInfoNormalizer::class,
            
            \PRSW\Docker\Generated\Model\BuildCache::class => \PRSW\Docker\Generated\Normalizer\BuildCacheNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ImageID::class => \PRSW\Docker\Generated\Normalizer\ImageIDNormalizer::class,
            
            \PRSW\Docker\Generated\Model\CreateImageInfo::class => \PRSW\Docker\Generated\Normalizer\CreateImageInfoNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PushImageInfo::class => \PRSW\Docker\Generated\Normalizer\PushImageInfoNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ErrorDetail::class => \PRSW\Docker\Generated\Normalizer\ErrorDetailNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ProgressDetail::class => \PRSW\Docker\Generated\Normalizer\ProgressDetailNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ErrorResponse::class => \PRSW\Docker\Generated\Normalizer\ErrorResponseNormalizer::class,
            
            \PRSW\Docker\Generated\Model\IdResponse::class => \PRSW\Docker\Generated\Normalizer\IdResponseNormalizer::class,
            
            \PRSW\Docker\Generated\Model\EndpointSettings::class => \PRSW\Docker\Generated\Normalizer\EndpointSettingsNormalizer::class,
            
            \PRSW\Docker\Generated\Model\EndpointIPAMConfig::class => \PRSW\Docker\Generated\Normalizer\EndpointIPAMConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PluginMount::class => \PRSW\Docker\Generated\Normalizer\PluginMountNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PluginDevice::class => \PRSW\Docker\Generated\Normalizer\PluginDeviceNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PluginEnv::class => \PRSW\Docker\Generated\Normalizer\PluginEnvNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PluginInterfaceType::class => \PRSW\Docker\Generated\Normalizer\PluginInterfaceTypeNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PluginPrivilege::class => \PRSW\Docker\Generated\Normalizer\PluginPrivilegeNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Plugin::class => \PRSW\Docker\Generated\Normalizer\PluginNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PluginSettings::class => \PRSW\Docker\Generated\Normalizer\PluginSettingsNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PluginConfig::class => \PRSW\Docker\Generated\Normalizer\PluginConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PluginConfigInterface::class => \PRSW\Docker\Generated\Normalizer\PluginConfigInterfaceNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PluginConfigUser::class => \PRSW\Docker\Generated\Normalizer\PluginConfigUserNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PluginConfigNetwork::class => \PRSW\Docker\Generated\Normalizer\PluginConfigNetworkNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PluginConfigLinux::class => \PRSW\Docker\Generated\Normalizer\PluginConfigLinuxNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PluginConfigArgs::class => \PRSW\Docker\Generated\Normalizer\PluginConfigArgsNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PluginConfigRootfs::class => \PRSW\Docker\Generated\Normalizer\PluginConfigRootfsNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ObjectVersion::class => \PRSW\Docker\Generated\Normalizer\ObjectVersionNormalizer::class,
            
            \PRSW\Docker\Generated\Model\NodeSpec::class => \PRSW\Docker\Generated\Normalizer\NodeSpecNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Node::class => \PRSW\Docker\Generated\Normalizer\NodeNormalizer::class,
            
            \PRSW\Docker\Generated\Model\NodeDescription::class => \PRSW\Docker\Generated\Normalizer\NodeDescriptionNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Platform::class => \PRSW\Docker\Generated\Normalizer\PlatformNormalizer::class,
            
            \PRSW\Docker\Generated\Model\EngineDescription::class => \PRSW\Docker\Generated\Normalizer\EngineDescriptionNormalizer::class,
            
            \PRSW\Docker\Generated\Model\EngineDescriptionPluginsItem::class => \PRSW\Docker\Generated\Normalizer\EngineDescriptionPluginsItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TLSInfo::class => \PRSW\Docker\Generated\Normalizer\TLSInfoNormalizer::class,
            
            \PRSW\Docker\Generated\Model\NodeStatus::class => \PRSW\Docker\Generated\Normalizer\NodeStatusNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ManagerStatus::class => \PRSW\Docker\Generated\Normalizer\ManagerStatusNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SwarmSpec::class => \PRSW\Docker\Generated\Normalizer\SwarmSpecNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SwarmSpecOrchestration::class => \PRSW\Docker\Generated\Normalizer\SwarmSpecOrchestrationNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SwarmSpecRaft::class => \PRSW\Docker\Generated\Normalizer\SwarmSpecRaftNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SwarmSpecDispatcher::class => \PRSW\Docker\Generated\Normalizer\SwarmSpecDispatcherNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SwarmSpecCAConfig::class => \PRSW\Docker\Generated\Normalizer\SwarmSpecCAConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SwarmSpecCAConfigExternalCAsItem::class => \PRSW\Docker\Generated\Normalizer\SwarmSpecCAConfigExternalCAsItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SwarmSpecEncryptionConfig::class => \PRSW\Docker\Generated\Normalizer\SwarmSpecEncryptionConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SwarmSpecTaskDefaults::class => \PRSW\Docker\Generated\Normalizer\SwarmSpecTaskDefaultsNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SwarmSpecTaskDefaultsLogDriver::class => \PRSW\Docker\Generated\Normalizer\SwarmSpecTaskDefaultsLogDriverNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ClusterInfo::class => \PRSW\Docker\Generated\Normalizer\ClusterInfoNormalizer::class,
            
            \PRSW\Docker\Generated\Model\JoinTokens::class => \PRSW\Docker\Generated\Normalizer\JoinTokensNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Swarm::class => \PRSW\Docker\Generated\Normalizer\SwarmNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpec::class => \PRSW\Docker\Generated\Normalizer\TaskSpecNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecPluginSpec::class => \PRSW\Docker\Generated\Normalizer\TaskSpecPluginSpecNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecContainerSpec::class => \PRSW\Docker\Generated\Normalizer\TaskSpecContainerSpecNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivileges::class => \PRSW\Docker\Generated\Normalizer\TaskSpecContainerSpecPrivilegesNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class => \PRSW\Docker\Generated\Normalizer\TaskSpecContainerSpecPrivilegesCredentialSpecNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class => \PRSW\Docker\Generated\Normalizer\TaskSpecContainerSpecPrivilegesSELinuxContextNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesSeccomp::class => \PRSW\Docker\Generated\Normalizer\TaskSpecContainerSpecPrivilegesSeccompNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesAppArmor::class => \PRSW\Docker\Generated\Normalizer\TaskSpecContainerSpecPrivilegesAppArmorNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecContainerSpecDNSConfig::class => \PRSW\Docker\Generated\Normalizer\TaskSpecContainerSpecDNSConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecContainerSpecSecretsItem::class => \PRSW\Docker\Generated\Normalizer\TaskSpecContainerSpecSecretsItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecContainerSpecSecretsItemFile::class => \PRSW\Docker\Generated\Normalizer\TaskSpecContainerSpecSecretsItemFileNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecContainerSpecConfigsItem::class => \PRSW\Docker\Generated\Normalizer\TaskSpecContainerSpecConfigsItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecContainerSpecConfigsItemFile::class => \PRSW\Docker\Generated\Normalizer\TaskSpecContainerSpecConfigsItemFileNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecContainerSpecUlimitsItem::class => \PRSW\Docker\Generated\Normalizer\TaskSpecContainerSpecUlimitsItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecNetworkAttachmentSpec::class => \PRSW\Docker\Generated\Normalizer\TaskSpecNetworkAttachmentSpecNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecResources::class => \PRSW\Docker\Generated\Normalizer\TaskSpecResourcesNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecRestartPolicy::class => \PRSW\Docker\Generated\Normalizer\TaskSpecRestartPolicyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecPlacement::class => \PRSW\Docker\Generated\Normalizer\TaskSpecPlacementNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecPlacementPreferencesItem::class => \PRSW\Docker\Generated\Normalizer\TaskSpecPlacementPreferencesItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecPlacementPreferencesItemSpread::class => \PRSW\Docker\Generated\Normalizer\TaskSpecPlacementPreferencesItemSpreadNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskSpecLogDriver::class => \PRSW\Docker\Generated\Normalizer\TaskSpecLogDriverNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainerStatus::class => \PRSW\Docker\Generated\Normalizer\ContainerStatusNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PortStatus::class => \PRSW\Docker\Generated\Normalizer\PortStatusNormalizer::class,
            
            \PRSW\Docker\Generated\Model\TaskStatus::class => \PRSW\Docker\Generated\Normalizer\TaskStatusNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Task::class => \PRSW\Docker\Generated\Normalizer\TaskNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ServiceSpec::class => \PRSW\Docker\Generated\Normalizer\ServiceSpecNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ServiceSpecMode::class => \PRSW\Docker\Generated\Normalizer\ServiceSpecModeNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ServiceSpecModeReplicated::class => \PRSW\Docker\Generated\Normalizer\ServiceSpecModeReplicatedNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ServiceSpecModeReplicatedJob::class => \PRSW\Docker\Generated\Normalizer\ServiceSpecModeReplicatedJobNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ServiceSpecUpdateConfig::class => \PRSW\Docker\Generated\Normalizer\ServiceSpecUpdateConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ServiceSpecRollbackConfig::class => \PRSW\Docker\Generated\Normalizer\ServiceSpecRollbackConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\EndpointPortConfig::class => \PRSW\Docker\Generated\Normalizer\EndpointPortConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\EndpointSpec::class => \PRSW\Docker\Generated\Normalizer\EndpointSpecNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Service::class => \PRSW\Docker\Generated\Normalizer\ServiceNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ServiceEndpoint::class => \PRSW\Docker\Generated\Normalizer\ServiceEndpointNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ServiceEndpointVirtualIPsItem::class => \PRSW\Docker\Generated\Normalizer\ServiceEndpointVirtualIPsItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ServiceUpdateStatus::class => \PRSW\Docker\Generated\Normalizer\ServiceUpdateStatusNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ServiceServiceStatus::class => \PRSW\Docker\Generated\Normalizer\ServiceServiceStatusNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ServiceJobStatus::class => \PRSW\Docker\Generated\Normalizer\ServiceJobStatusNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ImageDeleteResponseItem::class => \PRSW\Docker\Generated\Normalizer\ImageDeleteResponseItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ServiceCreateResponse::class => \PRSW\Docker\Generated\Normalizer\ServiceCreateResponseNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ServiceUpdateResponse::class => \PRSW\Docker\Generated\Normalizer\ServiceUpdateResponseNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainerSummary::class => \PRSW\Docker\Generated\Normalizer\ContainerSummaryNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainerSummaryHostConfig::class => \PRSW\Docker\Generated\Normalizer\ContainerSummaryHostConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainerSummaryNetworkSettings::class => \PRSW\Docker\Generated\Normalizer\ContainerSummaryNetworkSettingsNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Driver::class => \PRSW\Docker\Generated\Normalizer\DriverNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SecretSpec::class => \PRSW\Docker\Generated\Normalizer\SecretSpecNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Secret::class => \PRSW\Docker\Generated\Normalizer\SecretNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ConfigSpec::class => \PRSW\Docker\Generated\Normalizer\ConfigSpecNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Config::class => \PRSW\Docker\Generated\Normalizer\ConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainerState::class => \PRSW\Docker\Generated\Normalizer\ContainerStateNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainerCreateResponse::class => \PRSW\Docker\Generated\Normalizer\ContainerCreateResponseNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainerWaitResponse::class => \PRSW\Docker\Generated\Normalizer\ContainerWaitResponseNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainerWaitExitError::class => \PRSW\Docker\Generated\Normalizer\ContainerWaitExitErrorNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SystemVersion::class => \PRSW\Docker\Generated\Normalizer\SystemVersionNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SystemVersionPlatform::class => \PRSW\Docker\Generated\Normalizer\SystemVersionPlatformNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SystemVersionComponentsItem::class => \PRSW\Docker\Generated\Normalizer\SystemVersionComponentsItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SystemInfo::class => \PRSW\Docker\Generated\Normalizer\SystemInfoNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SystemInfoDefaultAddressPoolsItem::class => \PRSW\Docker\Generated\Normalizer\SystemInfoDefaultAddressPoolsItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainerdInfo::class => \PRSW\Docker\Generated\Normalizer\ContainerdInfoNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainerdInfoNamespaces::class => \PRSW\Docker\Generated\Normalizer\ContainerdInfoNamespacesNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PluginsInfo::class => \PRSW\Docker\Generated\Normalizer\PluginsInfoNormalizer::class,
            
            \PRSW\Docker\Generated\Model\RegistryServiceConfig::class => \PRSW\Docker\Generated\Normalizer\RegistryServiceConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\IndexInfo::class => \PRSW\Docker\Generated\Normalizer\IndexInfoNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Runtime::class => \PRSW\Docker\Generated\Normalizer\RuntimeNormalizer::class,
            
            \PRSW\Docker\Generated\Model\Commit::class => \PRSW\Docker\Generated\Normalizer\CommitNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SwarmInfo::class => \PRSW\Docker\Generated\Normalizer\SwarmInfoNormalizer::class,
            
            \PRSW\Docker\Generated\Model\PeerNode::class => \PRSW\Docker\Generated\Normalizer\PeerNodeNormalizer::class,
            
            \PRSW\Docker\Generated\Model\NetworkAttachmentConfig::class => \PRSW\Docker\Generated\Normalizer\NetworkAttachmentConfigNormalizer::class,
            
            \PRSW\Docker\Generated\Model\EventActor::class => \PRSW\Docker\Generated\Normalizer\EventActorNormalizer::class,
            
            \PRSW\Docker\Generated\Model\EventMessage::class => \PRSW\Docker\Generated\Normalizer\EventMessageNormalizer::class,
            
            \PRSW\Docker\Generated\Model\OCIDescriptor::class => \PRSW\Docker\Generated\Normalizer\OCIDescriptorNormalizer::class,
            
            \PRSW\Docker\Generated\Model\OCIPlatform::class => \PRSW\Docker\Generated\Normalizer\OCIPlatformNormalizer::class,
            
            \PRSW\Docker\Generated\Model\DistributionInspect::class => \PRSW\Docker\Generated\Normalizer\DistributionInspectNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ClusterVolume::class => \PRSW\Docker\Generated\Normalizer\ClusterVolumeNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ClusterVolumeInfo::class => \PRSW\Docker\Generated\Normalizer\ClusterVolumeInfoNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ClusterVolumePublishStatusItem::class => \PRSW\Docker\Generated\Normalizer\ClusterVolumePublishStatusItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ClusterVolumeSpec::class => \PRSW\Docker\Generated\Normalizer\ClusterVolumeSpecNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessMode::class => \PRSW\Docker\Generated\Normalizer\ClusterVolumeSpecAccessModeNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessModeSecretsItem::class => \PRSW\Docker\Generated\Normalizer\ClusterVolumeSpecAccessModeSecretsItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessModeAccessibilityRequirements::class => \PRSW\Docker\Generated\Normalizer\ClusterVolumeSpecAccessModeAccessibilityRequirementsNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange::class => \PRSW\Docker\Generated\Normalizer\ClusterVolumeSpecAccessModeCapacityRangeNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ImageManifestSummary::class => \PRSW\Docker\Generated\Normalizer\ImageManifestSummaryNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ImageManifestSummarySize::class => \PRSW\Docker\Generated\Normalizer\ImageManifestSummarySizeNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ImageManifestSummaryImageData::class => \PRSW\Docker\Generated\Normalizer\ImageManifestSummaryImageDataNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ImageManifestSummaryImageDataSize::class => \PRSW\Docker\Generated\Normalizer\ImageManifestSummaryImageDataSizeNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ImageManifestSummaryAttestationData::class => \PRSW\Docker\Generated\Normalizer\ImageManifestSummaryAttestationDataNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainersCreatePostBody::class => \PRSW\Docker\Generated\Normalizer\ContainersCreatePostBodyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainersIdJsonGetResponse200::class => \PRSW\Docker\Generated\Normalizer\ContainersIdJsonGetResponse200Normalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainersIdTopGetResponse200::class => \PRSW\Docker\Generated\Normalizer\ContainersIdTopGetResponse200Normalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainersIdUpdatePostBody::class => \PRSW\Docker\Generated\Normalizer\ContainersIdUpdatePostBodyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainersIdUpdatePostResponse200::class => \PRSW\Docker\Generated\Normalizer\ContainersIdUpdatePostResponse200Normalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainersPrunePostResponse200::class => \PRSW\Docker\Generated\Normalizer\ContainersPrunePostResponse200Normalizer::class,
            
            \PRSW\Docker\Generated\Model\BuildPrunePostResponse200::class => \PRSW\Docker\Generated\Normalizer\BuildPrunePostResponse200Normalizer::class,
            
            \PRSW\Docker\Generated\Model\ImagesNameHistoryGetResponse200Item::class => \PRSW\Docker\Generated\Normalizer\ImagesNameHistoryGetResponse200ItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ImagesSearchGetResponse200Item::class => \PRSW\Docker\Generated\Normalizer\ImagesSearchGetResponse200ItemNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ImagesPrunePostResponse200::class => \PRSW\Docker\Generated\Normalizer\ImagesPrunePostResponse200Normalizer::class,
            
            \PRSW\Docker\Generated\Model\AuthPostResponse200::class => \PRSW\Docker\Generated\Normalizer\AuthPostResponse200Normalizer::class,
            
            \PRSW\Docker\Generated\Model\SystemDfGetResponse200::class => \PRSW\Docker\Generated\Normalizer\SystemDfGetResponse200Normalizer::class,
            
            \PRSW\Docker\Generated\Model\ContainersIdExecPostBody::class => \PRSW\Docker\Generated\Normalizer\ContainersIdExecPostBodyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ExecIdStartPostBody::class => \PRSW\Docker\Generated\Normalizer\ExecIdStartPostBodyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ExecIdJsonGetResponse200::class => \PRSW\Docker\Generated\Normalizer\ExecIdJsonGetResponse200Normalizer::class,
            
            \PRSW\Docker\Generated\Model\VolumesNamePutBody::class => \PRSW\Docker\Generated\Normalizer\VolumesNamePutBodyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\VolumesPrunePostResponse200::class => \PRSW\Docker\Generated\Normalizer\VolumesPrunePostResponse200Normalizer::class,
            
            \PRSW\Docker\Generated\Model\NetworksCreatePostBody::class => \PRSW\Docker\Generated\Normalizer\NetworksCreatePostBodyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\NetworksIdConnectPostBody::class => \PRSW\Docker\Generated\Normalizer\NetworksIdConnectPostBodyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\NetworksIdDisconnectPostBody::class => \PRSW\Docker\Generated\Normalizer\NetworksIdDisconnectPostBodyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\NetworksPrunePostResponse200::class => \PRSW\Docker\Generated\Normalizer\NetworksPrunePostResponse200Normalizer::class,
            
            \PRSW\Docker\Generated\Model\SwarmInitPostBody::class => \PRSW\Docker\Generated\Normalizer\SwarmInitPostBodyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SwarmJoinPostBody::class => \PRSW\Docker\Generated\Normalizer\SwarmJoinPostBodyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SwarmUnlockkeyGetResponse200::class => \PRSW\Docker\Generated\Normalizer\SwarmUnlockkeyGetResponse200Normalizer::class,
            
            \PRSW\Docker\Generated\Model\SwarmUnlockPostBody::class => \PRSW\Docker\Generated\Normalizer\SwarmUnlockPostBodyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ServicesCreatePostBody::class => \PRSW\Docker\Generated\Normalizer\ServicesCreatePostBodyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ServicesIdUpdatePostBody::class => \PRSW\Docker\Generated\Normalizer\ServicesIdUpdatePostBodyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\SecretsCreatePostBody::class => \PRSW\Docker\Generated\Normalizer\SecretsCreatePostBodyNormalizer::class,
            
            \PRSW\Docker\Generated\Model\ConfigsCreatePostBody::class => \PRSW\Docker\Generated\Normalizer\ConfigsCreatePostBodyNormalizer::class,
            
            \Jane\Component\JsonSchemaRuntime\Reference::class => \PRSW\Docker\Generated\Runtime\Normalizer\ReferenceNormalizer::class,
        ], $normalizersCache = [];
        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return array_key_exists($type, $this->normalizers);
        }
        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);
            return $normalizer->normalize($object, $format, $context);
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);
            return $denormalizer->denormalize($data, $type, $format, $context);
        }
        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }
        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;
            return $normalizer;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [
                
                \PRSW\Docker\Generated\Model\Port::class => false,
                \PRSW\Docker\Generated\Model\MountPoint::class => false,
                \PRSW\Docker\Generated\Model\DeviceMapping::class => false,
                \PRSW\Docker\Generated\Model\DeviceRequest::class => false,
                \PRSW\Docker\Generated\Model\ThrottleDevice::class => false,
                \PRSW\Docker\Generated\Model\Mount::class => false,
                \PRSW\Docker\Generated\Model\MountBindOptions::class => false,
                \PRSW\Docker\Generated\Model\MountVolumeOptions::class => false,
                \PRSW\Docker\Generated\Model\MountVolumeOptionsDriverConfig::class => false,
                \PRSW\Docker\Generated\Model\MountTmpfsOptions::class => false,
                \PRSW\Docker\Generated\Model\RestartPolicy::class => false,
                \PRSW\Docker\Generated\Model\Resources::class => false,
                \PRSW\Docker\Generated\Model\ResourcesBlkioWeightDeviceItem::class => false,
                \PRSW\Docker\Generated\Model\ResourcesUlimitsItem::class => false,
                \PRSW\Docker\Generated\Model\Limit::class => false,
                \PRSW\Docker\Generated\Model\ResourceObject::class => false,
                \PRSW\Docker\Generated\Model\GenericResourcesItem::class => false,
                \PRSW\Docker\Generated\Model\GenericResourcesItemNamedResourceSpec::class => false,
                \PRSW\Docker\Generated\Model\GenericResourcesItemDiscreteResourceSpec::class => false,
                \PRSW\Docker\Generated\Model\HealthConfig::class => false,
                \PRSW\Docker\Generated\Model\Health::class => false,
                \PRSW\Docker\Generated\Model\HealthcheckResult::class => false,
                \PRSW\Docker\Generated\Model\HostConfig::class => false,
                \PRSW\Docker\Generated\Model\HostConfigLogConfig::class => false,
                \PRSW\Docker\Generated\Model\ContainerConfig::class => false,
                \PRSW\Docker\Generated\Model\ImageConfig::class => false,
                \PRSW\Docker\Generated\Model\NetworkingConfig::class => false,
                \PRSW\Docker\Generated\Model\NetworkSettings::class => false,
                \PRSW\Docker\Generated\Model\Address::class => false,
                \PRSW\Docker\Generated\Model\PortBinding::class => false,
                \PRSW\Docker\Generated\Model\DriverData::class => false,
                \PRSW\Docker\Generated\Model\FilesystemChange::class => false,
                \PRSW\Docker\Generated\Model\ImageInspect::class => false,
                \PRSW\Docker\Generated\Model\ImageInspectRootFS::class => false,
                \PRSW\Docker\Generated\Model\ImageInspectMetadata::class => false,
                \PRSW\Docker\Generated\Model\ImageSummary::class => false,
                \PRSW\Docker\Generated\Model\AuthConfig::class => false,
                \PRSW\Docker\Generated\Model\ProcessConfig::class => false,
                \PRSW\Docker\Generated\Model\Volume::class => false,
                \PRSW\Docker\Generated\Model\VolumeUsageData::class => false,
                \PRSW\Docker\Generated\Model\VolumeCreateOptions::class => false,
                \PRSW\Docker\Generated\Model\VolumeListResponse::class => false,
                \PRSW\Docker\Generated\Model\Network::class => false,
                \PRSW\Docker\Generated\Model\ConfigReference::class => false,
                \PRSW\Docker\Generated\Model\IPAM::class => false,
                \PRSW\Docker\Generated\Model\IPAMConfig::class => false,
                \PRSW\Docker\Generated\Model\NetworkContainer::class => false,
                \PRSW\Docker\Generated\Model\PeerInfo::class => false,
                \PRSW\Docker\Generated\Model\NetworkCreateResponse::class => false,
                \PRSW\Docker\Generated\Model\BuildInfo::class => false,
                \PRSW\Docker\Generated\Model\BuildCache::class => false,
                \PRSW\Docker\Generated\Model\ImageID::class => false,
                \PRSW\Docker\Generated\Model\CreateImageInfo::class => false,
                \PRSW\Docker\Generated\Model\PushImageInfo::class => false,
                \PRSW\Docker\Generated\Model\ErrorDetail::class => false,
                \PRSW\Docker\Generated\Model\ProgressDetail::class => false,
                \PRSW\Docker\Generated\Model\ErrorResponse::class => false,
                \PRSW\Docker\Generated\Model\IdResponse::class => false,
                \PRSW\Docker\Generated\Model\EndpointSettings::class => false,
                \PRSW\Docker\Generated\Model\EndpointIPAMConfig::class => false,
                \PRSW\Docker\Generated\Model\PluginMount::class => false,
                \PRSW\Docker\Generated\Model\PluginDevice::class => false,
                \PRSW\Docker\Generated\Model\PluginEnv::class => false,
                \PRSW\Docker\Generated\Model\PluginInterfaceType::class => false,
                \PRSW\Docker\Generated\Model\PluginPrivilege::class => false,
                \PRSW\Docker\Generated\Model\Plugin::class => false,
                \PRSW\Docker\Generated\Model\PluginSettings::class => false,
                \PRSW\Docker\Generated\Model\PluginConfig::class => false,
                \PRSW\Docker\Generated\Model\PluginConfigInterface::class => false,
                \PRSW\Docker\Generated\Model\PluginConfigUser::class => false,
                \PRSW\Docker\Generated\Model\PluginConfigNetwork::class => false,
                \PRSW\Docker\Generated\Model\PluginConfigLinux::class => false,
                \PRSW\Docker\Generated\Model\PluginConfigArgs::class => false,
                \PRSW\Docker\Generated\Model\PluginConfigRootfs::class => false,
                \PRSW\Docker\Generated\Model\ObjectVersion::class => false,
                \PRSW\Docker\Generated\Model\NodeSpec::class => false,
                \PRSW\Docker\Generated\Model\Node::class => false,
                \PRSW\Docker\Generated\Model\NodeDescription::class => false,
                \PRSW\Docker\Generated\Model\Platform::class => false,
                \PRSW\Docker\Generated\Model\EngineDescription::class => false,
                \PRSW\Docker\Generated\Model\EngineDescriptionPluginsItem::class => false,
                \PRSW\Docker\Generated\Model\TLSInfo::class => false,
                \PRSW\Docker\Generated\Model\NodeStatus::class => false,
                \PRSW\Docker\Generated\Model\ManagerStatus::class => false,
                \PRSW\Docker\Generated\Model\SwarmSpec::class => false,
                \PRSW\Docker\Generated\Model\SwarmSpecOrchestration::class => false,
                \PRSW\Docker\Generated\Model\SwarmSpecRaft::class => false,
                \PRSW\Docker\Generated\Model\SwarmSpecDispatcher::class => false,
                \PRSW\Docker\Generated\Model\SwarmSpecCAConfig::class => false,
                \PRSW\Docker\Generated\Model\SwarmSpecCAConfigExternalCAsItem::class => false,
                \PRSW\Docker\Generated\Model\SwarmSpecEncryptionConfig::class => false,
                \PRSW\Docker\Generated\Model\SwarmSpecTaskDefaults::class => false,
                \PRSW\Docker\Generated\Model\SwarmSpecTaskDefaultsLogDriver::class => false,
                \PRSW\Docker\Generated\Model\ClusterInfo::class => false,
                \PRSW\Docker\Generated\Model\JoinTokens::class => false,
                \PRSW\Docker\Generated\Model\Swarm::class => false,
                \PRSW\Docker\Generated\Model\TaskSpec::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecPluginSpec::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecContainerSpec::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivileges::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesSeccomp::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecContainerSpecPrivilegesAppArmor::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecContainerSpecDNSConfig::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecContainerSpecSecretsItem::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecContainerSpecSecretsItemFile::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecContainerSpecConfigsItem::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecContainerSpecConfigsItemFile::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecContainerSpecUlimitsItem::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecNetworkAttachmentSpec::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecResources::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecRestartPolicy::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecPlacement::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecPlacementPreferencesItem::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecPlacementPreferencesItemSpread::class => false,
                \PRSW\Docker\Generated\Model\TaskSpecLogDriver::class => false,
                \PRSW\Docker\Generated\Model\ContainerStatus::class => false,
                \PRSW\Docker\Generated\Model\PortStatus::class => false,
                \PRSW\Docker\Generated\Model\TaskStatus::class => false,
                \PRSW\Docker\Generated\Model\Task::class => false,
                \PRSW\Docker\Generated\Model\ServiceSpec::class => false,
                \PRSW\Docker\Generated\Model\ServiceSpecMode::class => false,
                \PRSW\Docker\Generated\Model\ServiceSpecModeReplicated::class => false,
                \PRSW\Docker\Generated\Model\ServiceSpecModeReplicatedJob::class => false,
                \PRSW\Docker\Generated\Model\ServiceSpecUpdateConfig::class => false,
                \PRSW\Docker\Generated\Model\ServiceSpecRollbackConfig::class => false,
                \PRSW\Docker\Generated\Model\EndpointPortConfig::class => false,
                \PRSW\Docker\Generated\Model\EndpointSpec::class => false,
                \PRSW\Docker\Generated\Model\Service::class => false,
                \PRSW\Docker\Generated\Model\ServiceEndpoint::class => false,
                \PRSW\Docker\Generated\Model\ServiceEndpointVirtualIPsItem::class => false,
                \PRSW\Docker\Generated\Model\ServiceUpdateStatus::class => false,
                \PRSW\Docker\Generated\Model\ServiceServiceStatus::class => false,
                \PRSW\Docker\Generated\Model\ServiceJobStatus::class => false,
                \PRSW\Docker\Generated\Model\ImageDeleteResponseItem::class => false,
                \PRSW\Docker\Generated\Model\ServiceCreateResponse::class => false,
                \PRSW\Docker\Generated\Model\ServiceUpdateResponse::class => false,
                \PRSW\Docker\Generated\Model\ContainerSummary::class => false,
                \PRSW\Docker\Generated\Model\ContainerSummaryHostConfig::class => false,
                \PRSW\Docker\Generated\Model\ContainerSummaryNetworkSettings::class => false,
                \PRSW\Docker\Generated\Model\Driver::class => false,
                \PRSW\Docker\Generated\Model\SecretSpec::class => false,
                \PRSW\Docker\Generated\Model\Secret::class => false,
                \PRSW\Docker\Generated\Model\ConfigSpec::class => false,
                \PRSW\Docker\Generated\Model\Config::class => false,
                \PRSW\Docker\Generated\Model\ContainerState::class => false,
                \PRSW\Docker\Generated\Model\ContainerCreateResponse::class => false,
                \PRSW\Docker\Generated\Model\ContainerWaitResponse::class => false,
                \PRSW\Docker\Generated\Model\ContainerWaitExitError::class => false,
                \PRSW\Docker\Generated\Model\SystemVersion::class => false,
                \PRSW\Docker\Generated\Model\SystemVersionPlatform::class => false,
                \PRSW\Docker\Generated\Model\SystemVersionComponentsItem::class => false,
                \PRSW\Docker\Generated\Model\SystemInfo::class => false,
                \PRSW\Docker\Generated\Model\SystemInfoDefaultAddressPoolsItem::class => false,
                \PRSW\Docker\Generated\Model\ContainerdInfo::class => false,
                \PRSW\Docker\Generated\Model\ContainerdInfoNamespaces::class => false,
                \PRSW\Docker\Generated\Model\PluginsInfo::class => false,
                \PRSW\Docker\Generated\Model\RegistryServiceConfig::class => false,
                \PRSW\Docker\Generated\Model\IndexInfo::class => false,
                \PRSW\Docker\Generated\Model\Runtime::class => false,
                \PRSW\Docker\Generated\Model\Commit::class => false,
                \PRSW\Docker\Generated\Model\SwarmInfo::class => false,
                \PRSW\Docker\Generated\Model\PeerNode::class => false,
                \PRSW\Docker\Generated\Model\NetworkAttachmentConfig::class => false,
                \PRSW\Docker\Generated\Model\EventActor::class => false,
                \PRSW\Docker\Generated\Model\EventMessage::class => false,
                \PRSW\Docker\Generated\Model\OCIDescriptor::class => false,
                \PRSW\Docker\Generated\Model\OCIPlatform::class => false,
                \PRSW\Docker\Generated\Model\DistributionInspect::class => false,
                \PRSW\Docker\Generated\Model\ClusterVolume::class => false,
                \PRSW\Docker\Generated\Model\ClusterVolumeInfo::class => false,
                \PRSW\Docker\Generated\Model\ClusterVolumePublishStatusItem::class => false,
                \PRSW\Docker\Generated\Model\ClusterVolumeSpec::class => false,
                \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessMode::class => false,
                \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessModeSecretsItem::class => false,
                \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessModeAccessibilityRequirements::class => false,
                \PRSW\Docker\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange::class => false,
                \PRSW\Docker\Generated\Model\ImageManifestSummary::class => false,
                \PRSW\Docker\Generated\Model\ImageManifestSummarySize::class => false,
                \PRSW\Docker\Generated\Model\ImageManifestSummaryImageData::class => false,
                \PRSW\Docker\Generated\Model\ImageManifestSummaryImageDataSize::class => false,
                \PRSW\Docker\Generated\Model\ImageManifestSummaryAttestationData::class => false,
                \PRSW\Docker\Generated\Model\ContainersCreatePostBody::class => false,
                \PRSW\Docker\Generated\Model\ContainersIdJsonGetResponse200::class => false,
                \PRSW\Docker\Generated\Model\ContainersIdTopGetResponse200::class => false,
                \PRSW\Docker\Generated\Model\ContainersIdUpdatePostBody::class => false,
                \PRSW\Docker\Generated\Model\ContainersIdUpdatePostResponse200::class => false,
                \PRSW\Docker\Generated\Model\ContainersPrunePostResponse200::class => false,
                \PRSW\Docker\Generated\Model\BuildPrunePostResponse200::class => false,
                \PRSW\Docker\Generated\Model\ImagesNameHistoryGetResponse200Item::class => false,
                \PRSW\Docker\Generated\Model\ImagesSearchGetResponse200Item::class => false,
                \PRSW\Docker\Generated\Model\ImagesPrunePostResponse200::class => false,
                \PRSW\Docker\Generated\Model\AuthPostResponse200::class => false,
                \PRSW\Docker\Generated\Model\SystemDfGetResponse200::class => false,
                \PRSW\Docker\Generated\Model\ContainersIdExecPostBody::class => false,
                \PRSW\Docker\Generated\Model\ExecIdStartPostBody::class => false,
                \PRSW\Docker\Generated\Model\ExecIdJsonGetResponse200::class => false,
                \PRSW\Docker\Generated\Model\VolumesNamePutBody::class => false,
                \PRSW\Docker\Generated\Model\VolumesPrunePostResponse200::class => false,
                \PRSW\Docker\Generated\Model\NetworksCreatePostBody::class => false,
                \PRSW\Docker\Generated\Model\NetworksIdConnectPostBody::class => false,
                \PRSW\Docker\Generated\Model\NetworksIdDisconnectPostBody::class => false,
                \PRSW\Docker\Generated\Model\NetworksPrunePostResponse200::class => false,
                \PRSW\Docker\Generated\Model\SwarmInitPostBody::class => false,
                \PRSW\Docker\Generated\Model\SwarmJoinPostBody::class => false,
                \PRSW\Docker\Generated\Model\SwarmUnlockkeyGetResponse200::class => false,
                \PRSW\Docker\Generated\Model\SwarmUnlockPostBody::class => false,
                \PRSW\Docker\Generated\Model\ServicesCreatePostBody::class => false,
                \PRSW\Docker\Generated\Model\ServicesIdUpdatePostBody::class => false,
                \PRSW\Docker\Generated\Model\SecretsCreatePostBody::class => false,
                \PRSW\Docker\Generated\Model\ConfigsCreatePostBody::class => false,
                \Jane\Component\JsonSchemaRuntime\Reference::class => false,
            ];
        }
    }
}