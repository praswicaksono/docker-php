<?php

namespace PRSW\Docker\Generated\Model;

class ImageInspectRootFS
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
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var list<string>
     */
    protected $layers;
    /**
     * 
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getLayers(): array
    {
        return $this->layers;
    }
    /**
     * 
     *
     * @param list<string> $layers
     *
     * @return self
     */
    public function setLayers(array $layers): self
    {
        $this->initialized['layers'] = true;
        $this->layers = $layers;
        return $this;
    }
}