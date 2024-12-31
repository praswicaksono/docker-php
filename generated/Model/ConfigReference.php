<?php

namespace PRSW\Docker\Generated\Model;

class ConfigReference
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
    * The name of the config-only network that provides the network's
    configuration. The specified network must be an existing config-only
    network. Only network names are allowed, not network IDs.
    
    *
    * @var string
    */
    protected $network;
    /**
    * The name of the config-only network that provides the network's
    configuration. The specified network must be an existing config-only
    network. Only network names are allowed, not network IDs.
    
    *
    * @return string
    */
    public function getNetwork(): string
    {
        return $this->network;
    }
    /**
    * The name of the config-only network that provides the network's
    configuration. The specified network must be an existing config-only
    network. Only network names are allowed, not network IDs.
    
    *
    * @param string $network
    *
    * @return self
    */
    public function setNetwork(string $network): self
    {
        $this->initialized['network'] = true;
        $this->network = $network;
        return $this;
    }
}