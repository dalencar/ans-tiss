<?php

namespace ans\schemes;

/**
 * Class representing CtValorCreditoDescontoType
 *
 *
 * XSD Type: ct_valorCreditoDesconto
 */
class CtValorCreditoDescontoType
{

    /**
     * @property string $tipoLancamento
     */
    private $tipoLancamento = null;

    /**
     * @property string $descricao
     */
    private $descricao = null;

    /**
     * @property float $valor
     */
    private $valor = null;

    /**
     * Gets as tipoLancamento
     *
     * @return string
     */
    public function getTipoLancamento()
    {
        return $this->tipoLancamento;
    }

    /**
     * Sets a new tipoLancamento
     *
     * @param string $tipoLancamento
     * @return self
     */
    public function setTipoLancamento($tipoLancamento)
    {
        $this->tipoLancamento = $tipoLancamento;
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

    /**
     * Gets as valor
     *
     * @return float
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Sets a new valor
     *
     * @param float $valor
     * @return self
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
        return $this;
    }


}

