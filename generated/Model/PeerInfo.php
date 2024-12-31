<?php

namespace PRSW\Docker\Generated\Model;

class PeerInfo
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
     * ID of the peer-node in the Swarm cluster.
     *
     * @var string
     */
    protected $name;
    /**
     * IP-address of the peer-node in the Swarm cluster.
     *
     * @var string
     */
    protected $iP;
    /**
     * ID of the peer-node in the Swarm cluster.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * ID of the peer-node in the Swarm cluster.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * IP-address of the peer-node in the Swarm cluster.
     *
     * @return string
     */
    public function getIP(): string
    {
        return $this->iP;
    }
    /**
     * IP-address of the peer-node in the Swarm cluster.
     *
     * @param string $iP
     *
     * @return self
     */
    public function setIP(string $iP): self
    {
        $this->initialized['iP'] = true;
        $this->iP = $iP;
        return $this;
    }
}