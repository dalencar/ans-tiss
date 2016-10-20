<?php

namespace ans\schemes;

/**
 * Class representing AutorizacaoProcedimentoWS
 */
class AutorizacaoProcedimentoWS
{

    /**
     * @property \ans\schemes\CabecalhoTransacaoType $cabecalho
     */
    private $cabecalho = null;

    /**
     * @property \ans\schemes\CtSituacaoAutorizacaoType $autorizacaoProcedimento
     */
    private $autorizacaoProcedimento = null;

    /**
     * @property string $hash
     */
    private $hash = null;

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
     * Gets as autorizacaoProcedimento
     *
     * @return \ans\schemes\CtSituacaoAutorizacaoType
     */
    public function getAutorizacaoProcedimento()
    {
        return $this->autorizacaoProcedimento;
    }

    /**
     * Sets a new autorizacaoProcedimento
     *
     * @param \ans\schemes\CtSituacaoAutorizacaoType $autorizacaoProcedimento
     * @return self
     */
    public function setAutorizacaoProcedimento(\ans\schemes\CtSituacaoAutorizacaoType $autorizacaoProcedimento)
    {
        $this->autorizacaoProcedimento = $autorizacaoProcedimento;
        return $this;
    }

    /**
     * Gets as hash
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Sets a new hash
     *
     * @param string $hash
     * @return self
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
        return $this;
    }


}

