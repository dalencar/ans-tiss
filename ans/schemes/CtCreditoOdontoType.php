<?php

namespace ans\schemes;

/**
 * Class representing CtCreditoOdontoType
 *
 *
 * XSD Type: ct_creditoOdonto
 */
class CtCreditoOdontoType
{

    /**
     * @property float $valorCredito
     */
    private $valorCredito = null;

    /**
     * @property string $descricao
     */
    private $descricao = null;

    /**
     * Gets as valorCredito
     *
     * @return float
     */
    public function getValorCredito()
    {
        return $this->valorCredito;
    }

    /**
     * Sets a new valorCredito
     *
     * @param float $valorCredito
     * @return self
     */
    public function setValorCredito($valorCredito)
    {
        $this->valorCredito = $valorCredito;
        return $this;
    }

    /**
     * Gets as descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Sets a new descricao
     *
     * @param string $descricao
     * @return self
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
        return $this;
    }


}

