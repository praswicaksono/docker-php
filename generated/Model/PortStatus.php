<?php

namespace PRSW\Docker\Generated\Model;

class PortStatus
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
     * 
     *
     * @var list<EndpointPortConfig>
     */
    protected $ports;
    /**
     * 
     *
     * @return list<EndpointPortConfig>
     */
    public function getPorts(): array
    {
        return $this->ports;
    }
    /**
     * 
     *
     * @param list<EndpointPortConfig> $ports
     *
     * @return self
     */
    public function setPorts(array $ports): self
    {
        $this->initialized['ports'] = true;
        $this->ports = $ports;
        return $this;
    }
}