<?php

namespace PRSW\Docker\Generated\Model;

class ContainerdInfo
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
     * The address of the containerd socket.
     *
     * @var string
     */
    protected $address;
    /**
    * The namespaces that the daemon uses for running containers and
    plugins in containerd. These namespaces can be configured in the
    daemon configuration, and are considered to be used exclusively
    by the daemon, Tampering with the containerd instance may cause
    unexpected behavior.
    
    As these namespaces are considered to be exclusively accessed
    by the daemon, it is not recommended to change these values,
    or to change them to a value that is used by other systems,
    such as cri-containerd.
    
    *
    * @var ContainerdInfoNamespaces
    */
    protected $namespaces;
    /**
     * The address of the containerd socket.
     *
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }
    /**
     * The address of the containerd socket.
     *
     * @param string $address
     *
     * @return self
     */
    public function setAddress(string $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
    * The namespaces that the daemon uses for running containers and
    plugins in containerd. These namespaces can be configured in the
    daemon configuration, and are considered to be used exclusively
    by the daemon, Tampering with the containerd instance may cause
    unexpected behavior.
    
    As these namespaces are considered to be exclusively accessed
    by the daemon, it is not recommended to change these values,
    or to change them to a value that is used by other systems,
    such as cri-containerd.
    
    *
    * @return ContainerdInfoNamespaces
    */
    public function getNamespaces(): ContainerdInfoNamespaces
    {
        return $this->namespaces;
    }
    /**
    * The namespaces that the daemon uses for running containers and
    plugins in containerd. These namespaces can be configured in the
    daemon configuration, and are considered to be used exclusively
    by the daemon, Tampering with the containerd instance may cause
    unexpected behavior.
    
    As these namespaces are considered to be exclusively accessed
    by the daemon, it is not recommended to change these values,
    or to change them to a value that is used by other systems,
    such as cri-containerd.
    
    *
    * @param ContainerdInfoNamespaces $namespaces
    *
    * @return self
    */
    public function setNamespaces(ContainerdInfoNamespaces $namespaces): self
    {
        $this->initialized['namespaces'] = true;
        $this->namespaces = $namespaces;
        return $this;
    }
}