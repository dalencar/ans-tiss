<?php

namespace ans\schemes;

/**
 * Class representing CtDescontosType
 *
 *
 * XSD Type: ct_descontos
 */
class CtDescontosType
{

    /**
     * @property string $indicador
     */
    private $indicador = null;

    /**
     * @property string $tipoDebitoCredito
     */
    private $tipoDebitoCredito = null;

    /**
     * @property string $descricaoDbCr
     */
    private $descricaoDbCr = null;

    /**
     * @property float $valorDbCr
     */
    private $valorDbCr = null;

    /**
     * Gets as indicador
     *
     * @return string
     */
    public function getIndicador()
    {
        return $this->indicador;
    }

    /**
     * Sets a new indicador
     *
     * @param string $indicador
     * @return self
     */
    public function setIndicador($indicador)
    {
        $this->indicador = $indicador;
        return $this;
    }

    /**
     * Gets as tipoDebitoCredito
     *
     * @return string
     */
    public function getTipoDebitoCredito()
    {
        return $this->tipoDebitoCredito;
    }

    /**
     * Sets a new tipoDebitoCredito
     *
     * @param string $tipoDebitoCredito
     * @return self
     */
    public function setTipoDebitoCredito($tipoDebitoCredito)
    {
        $this->tipoDebitoCredito = $tipoDebitoCredito;
        return $this;
    }

    /**
     * Gets as descricaoDbCr
     *
     * @return string
     */
    public function getDescricaoDbCr()
    {
        return $this->descricaoDbCr;
    }

    /**
     * Sets a new descricaoDbCr
     *
     * @param string $descricaoDbCr
     * @return self
     */
    public function setDescricaoDbCr($descricaoDbCr)
    {
        $this->descricaoDbCr = $descricaoDbCr;
        return $this;
    }

    /**
     * Gets as valorDbCr
     *
     * @return float
     */
    public function getValorDbCr()
    {
        return $this->valorDbCr;
    }

    /**
     * Sets a new valorDbCr
     *
     * @param float $valorDbCr
     * @return self
     */
    public function setValorDbCr($valorDbCr)
    {
        $this->valorDbCr = $valorDbCr;
        return $this;
    }


}

