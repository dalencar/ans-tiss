<?php

namespace ans\schemes\CtGuiaDadosAnexoType;

/**
 * Class representing GlosaAnexoAType
 */
class GlosaAnexoAType
{

    /**
     * @property \ans\schemes\CtMotivoGlosaType[] $motivoGlosa
     */
    private $motivoGlosa = null;

    /**
     * @property float $vlGlosaAnexo
     */
    private $vlGlosaAnexo = null;

    /**
     * Adds as motivoGlosa
     *
     * @return self
     * @param \ans\schemes\CtMotivoGlosaType $motivoGlosa
     */
    public function addToMotivoGlosa(\ans\schemes\CtMotivoGlosaType $motivoGlosa)
    {
        $this->motivoGlosa[] = $motivoGlosa;
        return $this;
    }

    /**
     * isset motivoGlosa
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMotivoGlosa($index)
    {
        return isset($this->motivoGlosa[$index]);
    }

    /**
     * unset motivoGlosa
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMotivoGlosa($index)
    {
        unset($this->motivoGlosa[$index]);
    }

    /**
     * Gets as motivoGlosa
     *
     * @return \ans\schemes\CtMotivoGlosaType[]
     */
    public function getMotivoGlosa()
    {
        return $this->motivoGlosa;
    }

    /**
     * Sets a new motivoGlosa
     *
     * @param \ans\schemes\CtMotivoGlosaType[] $motivoGlosa
     * @return self
     */
    public function setMotivoGlosa(array $motivoGlosa)
    {
        $this->motivoGlosa = $motivoGlosa;
        return $this;
    }

    /**
     * Gets as vlGlosaAnexo
     *
     * @return float
     */
    public function getVlGlosaAnexo()
    {
        return $this->vlGlosaAnexo;
    }

    /**
     * Sets a new vlGlosaAnexo
     *
     * @param float $vlGlosaAnexo
     * @return self
     */
    public function setVlGlosaAnexo($vlGlosaAnexo)
    {
        $this->vlGlosaAnexo = $vlGlosaAnexo;
        return $this;
    }


}

