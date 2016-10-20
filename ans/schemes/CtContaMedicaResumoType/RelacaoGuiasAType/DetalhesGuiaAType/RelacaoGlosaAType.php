<?php

namespace ans\schemes\CtContaMedicaResumoType\RelacaoGuiasAType\DetalhesGuiaAType;

/**
 * Class representing RelacaoGlosaAType
 */
class RelacaoGlosaAType
{

    /**
     * @property float $valorGlosa
     */
    private $valorGlosa = null;

    /**
     * @property string $tipoGlosa
     */
    private $tipoGlosa = null;

    /**
     * Gets as valorGlosa
     *
     * @return float
     */
    public function getValorGlosa()
    {
        return $this->valorGlosa;
    }

    /**
     * Sets a new valorGlosa
     *
     * @param float $valorGlosa
     * @return self
     */
    public function setValorGlosa($valorGlosa)
    {
        $this->valorGlosa = $valorGlosa;
        return $this;
    }

    /**
     * Gets as tipoGlosa
     *
     * @return string
     */
    public function getTipoGlosa()
    {
        return $this->tipoGlosa;
    }

    /**
     * Sets a new tipoGlosa
     *
     * @param string $tipoGlosa
     * @return self
     */
    public function setTipoGlosa($tipoGlosa)
    {
        $this->tipoGlosa = $tipoGlosa;
        return $this;
    }


}

