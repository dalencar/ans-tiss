<?php

namespace ans\schemes;

/**
 * Class representing CtMotivoGlosaType
 *
 *
 * XSD Type: ct_motivoGlosa
 */
class CtMotivoGlosaType
{

    /**
     * @property string $codigoGlosa
     */
    private $codigoGlosa = null;

    /**
     * @property string $descricaoGlosa
     */
    private $descricaoGlosa = null;

    /**
     * Gets as codigoGlosa
     *
     * @return string
     */
    public function getCodigoGlosa()
    {
        return $this->codigoGlosa;
    }

    /**
     * Sets a new codigoGlosa
     *
     * @param string $codigoGlosa
     * @return self
     */
    public function setCodigoGlosa($codigoGlosa)
    {
        $this->codigoGlosa = $codigoGlosa;
        return $this;
    }

    /**
     * Gets as descricaoGlosa
     *
     * @return string
     */
    public function getDescricaoGlosa()
    {
        return $this->descricaoGlosa;
    }

    /**
     * Sets a new descricaoGlosa
     *
     * @param string $descricaoGlosa
     * @return self
     */
    public function setDescricaoGlosa($descricaoGlosa)
    {
        $this->descricaoGlosa = $descricaoGlosa;
        return $this;
    }


}

