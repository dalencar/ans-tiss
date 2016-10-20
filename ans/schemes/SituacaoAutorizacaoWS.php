<?php

namespace ans\schemes;

/**
 * Class representing SituacaoAutorizacaoWS
 */
class SituacaoAutorizacaoWS
{

    /**
     * @property \ans\schemes\CabecalhoTransacaoType $cabecalho
     */
    private $cabecalho = null;

    /**
     * @property \ans\schemes\CtSituacaoAutorizacaoType $situacaoAutorizacao
     */
    private $situacaoAutorizacao = null;

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
     * Gets as situacaoAutorizacao
     *
     * @return \ans\schemes\CtSituacaoAutorizacaoType
     */
    public function getSituacaoAutorizacao()
    {
        return $this->situacaoAutorizacao;
    }

    /**
     * Sets a new situacaoAutorizacao
     *
     * @param \ans\schemes\CtSituacaoAutorizacaoType $situacaoAutorizacao
     * @return self
     */
    public function setSituacaoAutorizacao(\ans\schemes\CtSituacaoAutorizacaoType $situacaoAutorizacao)
    {
        $this->situacaoAutorizacao = $situacaoAutorizacao;
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

