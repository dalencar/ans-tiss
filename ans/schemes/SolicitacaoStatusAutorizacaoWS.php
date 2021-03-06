<?php

namespace ans\schemes;

/**
 * Class representing SolicitacaoStatusAutorizacaoWS
 */
class SolicitacaoStatusAutorizacaoWS
{

    /**
     * @property \ans\schemes\CabecalhoTransacaoType $cabecalho
     */
    private $cabecalho = null;

    /**
     * @property \ans\schemes\CtAutorizacaoSolicitaStatusType
     * $solicitacaoStatusAutorizacao
     */
    private $solicitacaoStatusAutorizacao = null;

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
     * Gets as solicitacaoStatusAutorizacao
     *
     * @return \ans\schemes\CtAutorizacaoSolicitaStatusType
     */
    public function getSolicitacaoStatusAutorizacao()
    {
        return $this->solicitacaoStatusAutorizacao;
    }

    /**
     * Sets a new solicitacaoStatusAutorizacao
     *
     * @param \ans\schemes\CtAutorizacaoSolicitaStatusType
     * $solicitacaoStatusAutorizacao
     * @return self
     */
    public function setSolicitacaoStatusAutorizacao(\ans\schemes\CtAutorizacaoSolicitaStatusType $solicitacaoStatusAutorizacao)
    {
        $this->solicitacaoStatusAutorizacao = $solicitacaoStatusAutorizacao;
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

