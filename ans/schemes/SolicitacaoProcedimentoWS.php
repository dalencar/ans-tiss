<?php

namespace ans\schemes;

/**
 * Class representing SolicitacaoProcedimentoWS
 */
class SolicitacaoProcedimentoWS
{

    /**
     * @property \ans\schemes\CabecalhoTransacaoType $cabecalho
     */
    private $cabecalho = null;

    /**
     * @property \ans\schemes\CtSolicitacaoProcedimentoType $solicitacaoProcedimento
     */
    private $solicitacaoProcedimento = null;

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
     * Gets as solicitacaoProcedimento
     *
     * @return \ans\schemes\CtSolicitacaoProcedimentoType
     */
    public function getSolicitacaoProcedimento()
    {
        return $this->solicitacaoProcedimento;
    }

    /**
     * Sets a new solicitacaoProcedimento
     *
     * @param \ans\schemes\CtSolicitacaoProcedimentoType $solicitacaoProcedimento
     * @return self
     */
    public function setSolicitacaoProcedimento(\ans\schemes\CtSolicitacaoProcedimentoType $solicitacaoProcedimento)
    {
        $this->solicitacaoProcedimento = $solicitacaoProcedimento;
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

