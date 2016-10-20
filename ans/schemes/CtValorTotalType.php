<?php

namespace ans\schemes;

/**
 * Class representing CtValorTotalType
 *
 *
 * XSD Type: ct_valorTotal
 */
class CtValorTotalType
{

    /**
     * @property float $valorProcessado
     */
    private $valorProcessado = null;

    /**
     * @property float $valorGlosa
     */
    private $valorGlosa = null;

    /**
     * @property float $valorLiberado
     */
    private $valorLiberado = null;

    /**
     * Gets as valorProcessado
     *
     * @return float
     */
    public function getValorProcessado()
    {
        return $this->valorProcessado;
    }

    /**
     * Sets a new valorProcessado
     *
     * @param float $valorProcessado
     * @return self
     */
    public function setValorProcessado($valorProcessado)
    {
        $this->valorProcessado = $valorProcessado;
        return $this;
    }

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
     * Gets as valorLiberado
     *
     * @return float
     */
    public function getValorLiberado()
    {
        return $this->valorLiberado;
    }

    /**
     * Sets a new valorLiberado
     *
     * @param float $valorLiberado
     * @return self
     */
    public function setValorLiberado($valorLiberado)
    {
        $this->valorLiberado = $valorLiberado;
        return $this;
    }


}

