<?php

namespace ans\schemes;

/**
 * Class representing SolicitacaoStatusProtocoloWS
 */
class SolicitacaoStatusProtocoloWS
{

    /**
     * @property \ans\schemes\CabecalhoTransacaoType $cabecalho
     */
    private $cabecalho = null;

    /**
     * @property \ans\schemes\CtProtocoloSolicitacaoStatusType
     * $solicitacaoStatusProtocolo
     */
    private $solicitacaoStatusProtocolo = null;

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
     * Gets as solicitacaoStatusProtocolo
     *
     * @return \ans\schemes\CtProtocoloSolicitacaoStatusType
     */
    public function getSolicitacaoStatusProtocolo()
    {
        return $this->solicitacaoStatusProtocolo;
    }

    /**
     * Sets a new solicitacaoStatusProtocolo
     *
     * @param \ans\schemes\CtProtocoloSolicitacaoStatusType $solicitacaoStatusProtocolo
     * @return self
     */
    public function setSolicitacaoStatusProtocolo(\ans\schemes\CtProtocoloSolicitacaoStatusType $solicitacaoStatusProtocolo)
    {
        $this->solicitacaoStatusProtocolo = $solicitacaoStatusProtocolo;
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

