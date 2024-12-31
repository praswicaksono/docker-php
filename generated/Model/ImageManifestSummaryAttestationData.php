<?php

namespace PRSW\Docker\Generated\Model;

class ImageManifestSummaryAttestationData
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
     * The digest of the image manifest that this attestation is for.
     *
     * @var string
     */
    protected $for;
    /**
     * The digest of the image manifest that this attestation is for.
     *
     * @return string
     */
    public function getFor(): string
    {
        return $this->for;
    }
    /**
     * The digest of the image manifest that this attestation is for.
     *
     * @param string $for
     *
     * @return self
     */
    public function setFor(string $for): self
    {
        $this->initialized['for'] = true;
        $this->for = $for;
        return $this;
    }
}