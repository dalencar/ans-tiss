<?php

namespace ans\schemes;

/**
 * Class representing CtPagamentoDadosType
 *
 *
 * XSD Type: ct_pagamentoDados
 */
class CtPagamentoDadosType
{

    /**
     * @property \DateTime $dataPagamento
     */
    private $dataPagamento = null;

    /**
     * @property string $formaPagamento
     */
    private $formaPagamento = null;

    /**
     * @property string $banco
     */
    private $banco = null;

    /**
     * @property string $agencia
     */
    private $agencia = null;

    /**
     * @property string $nrContaCheque
     */
    private $nrContaCheque = null;

    /**
     * Gets as dataPagamento
     *
     * @return \DateTime
     */
    public function getDataPagamento()
    {
        return $this->dataPagamento;
    }

    /**
     * Sets a new dataPagamento
     *
     * @param \DateTime $dataPagamento
     * @return self
     */
    public function setDataPagamento(\DateTime $dataPagamento)
    {
        $this->dataPagamento = $dataPagamento;
        return $this;
    }

    /**
     * Gets as formaPagamento
     *
     * @return string
     */
    public function getFormaPagamento()
    {
        return $this->formaPagamento;
    }

    /**
     * Sets a new formaPagamento
     *
     * @param string $formaPagamento
     * @return self
     */
    public function setFormaPagamento($formaPagamento)
    {
        $this->formaPagamento = $formaPagamento;
        return $this;
    }

    /**
     * Gets as banco
     *
     * @return string
     */
    public function getBanco()
    {
        return $this->banco;
    }

    /**
     * Sets a new banco
     *
     * @param string $banco
     * @return self
     */
    public function setBanco($banco)
    {
        $this->banco = $banco;
        return $this;
    }

    /**
     * Gets as agencia
     *
     * @return string
     */
    public function getAgencia()
    {
        return $this->agencia;
    }

    /**
     * Sets a new agencia
     *
     * @param string $agencia
     * @return self
     */
    public function setAgencia($agencia)
    {
        $this->agencia = $agencia;
        return $this;
    }

    /**
     * Gets as nrContaCheque
     *
     * @return string
     */
    public function getNrContaCheque()
    {
        return $this->nrContaCheque;
    }

    /**
     * Sets a new nrContaCheque
     *
     * @param string $nrContaCheque
     * @return self
     */
    public function setNrContaCheque($nrContaCheque)
    {
        $this->nrContaCheque = $nrContaCheque;
        return $this;
    }


}

