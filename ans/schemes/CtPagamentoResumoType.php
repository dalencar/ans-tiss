<?php

namespace ans\schemes;

/**
 * Class representing CtPagamentoResumoType
 *
 *
 * XSD Type: ct_pagamentoResumo
 */
class CtPagamentoResumoType
{

    /**
     * @property string $numeroFatura
     */
    private $numeroFatura = null;

    /**
     * @property string $numeroLote
     */
    private $numeroLote = null;

    /**
     * @property string $numeroProtocolo
     */
    private $numeroProtocolo = null;

    /**
     * @property \ans\schemes\CtValorTotalType $valorTotalLote
     */
    private $valorTotalLote = null;

    /**
     * Gets as numeroFatura
     *
     * @return string
     */
    public function getNumeroFatura()
    {
        return $this->numeroFatura;
    }

    /**
     * Sets a new numeroFatura
     *
     * @param string $numeroFatura
     * @return self
     */
    public function setNumeroFatura($numeroFatura)
    {
        $this->numeroFatura = $numeroFatura;
        return $this;
    }

    /**
     * Gets as numeroLote
     *
     * @return string
     */
    public function getNumeroLote()
    {
        return $this->numeroLote;
    }

    /**
     * Sets a new numeroLote
     *
     * @param string $numeroLote
     * @return self
     */
    public function setNumeroLote($numeroLote)
    {
        $this->numeroLote = $numeroLote;
        return $this;
    }

    /**
     * Gets as numeroProtocolo
     *
     * @return string
     */
    public function getNumeroProtocolo()
    {
        return $this->numeroProtocolo;
    }

    /**
     * Sets a new numeroProtocolo
     *
     * @param string $numeroProtocolo
     * @return self
     */
    public function setNumeroProtocolo($numeroProtocolo)
    {
        $this->numeroProtocolo = $numeroProtocolo;
        return $this;
    }

    /**
     * Gets as valorTotalLote
     *
     * @return \ans\schemes\CtValorTotalType
     */
    public function getValorTotalLote()
    {
        return $this->valorTotalLote;
    }

    /**
     * Sets a new valorTotalLote
     *
     * @param \ans\schemes\CtValorTotalType $valorTotalLote
     * @return self
     */
    public function setValorTotalLote(\ans\schemes\CtValorTotalType $valorTotalLote)
    {
        $this->valorTotalLote = $valorTotalLote;
        return $this;
    }


}

