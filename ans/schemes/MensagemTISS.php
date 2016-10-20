<?php

namespace ans\schemes;

/**
 * Class representing MensagemTISS
 */
class MensagemTISS
{

    /**
     * @property \ans\schemes\CabecalhoTransacaoType $cabecalho
     */
    private $cabecalho = null;

    /**
     * @property \ans\schemes\OperadoraPrestadorType $operadoraParaPrestador
     */
    private $operadoraParaPrestador = null;

    /**
     * @property \ans\schemes\PrestadorOperadoraType $prestadorParaOperadora
     */
    private $prestadorParaOperadora = null;

    /**
     * @property \ans\schemes\EpilogoType $epilogo
     */
    private $epilogo = null;

    /**
     * Gets as cabecalho
     *
     * @return \ans\schemes\CabecalhoTransacaoType
     */
    public function getCabecalho()
    {
        return $this->cabecalho;
    }

    /**
     * Sets a new cabecalho
     *
     * @param \ans\schemes\CabecalhoTransacaoType $cabecalho
     * @return self
     */
    public function setCabecalho(\ans\schemes\CabecalhoTransacaoType $cabecalho)
    {
        $this->cabecalho = $cabecalho;
        return $this;
    }

    /**
     * Gets as operadoraParaPrestador
     *
     * @return \ans\schemes\OperadoraPrestadorType
     */
    public function getOperadoraParaPrestador()
    {
        return $this->operadoraParaPrestador;
    }

    /**
     * Sets a new operadoraParaPrestador
     *
     * @param \ans\schemes\OperadoraPrestadorType $operadoraParaPrestador
     * @return self
     */
    public function setOperadoraParaPrestador(\ans\schemes\OperadoraPrestadorType $operadoraParaPrestador)
    {
        $this->operadoraParaPrestador = $operadoraParaPrestador;
        return $this;
    }

    /**
     * Gets as prestadorParaOperadora
     *
     * @return \ans\schemes\PrestadorOperadoraType
     */
    public function getPrestadorParaOperadora()
    {
        return $this->prestadorParaOperadora;
    }

    /**
     * Sets a new prestadorParaOperadora
     *
     * @param \ans\schemes\PrestadorOperadoraType $prestadorParaOperadora
     * @return self
     */
    public function setPrestadorParaOperadora(\ans\schemes\PrestadorOperadoraType $prestadorParaOperadora)
    {
        $this->prestadorParaOperadora = $prestadorParaOperadora;
        return $this;
    }

    /**
     * Gets as epilogo
     *
     * @return \ans\schemes\EpilogoType
     */
    public function getEpilogo()
    {
        return $this->epilogo;
    }

    /**
     * Sets a new epilogo
     *
     * @param \ans\schemes\EpilogoType $epilogo
     * @return self
     */
    public function setEpilogo(\ans\schemes\EpilogoType $epilogo)
    {
        $this->epilogo = $epilogo;
        return $this;
    }


}

