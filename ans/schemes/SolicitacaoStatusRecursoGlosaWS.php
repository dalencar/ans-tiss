<?php

namespace ans\schemes;

/**
 * Class representing SolicitacaoStatusRecursoGlosaWS
 */
class SolicitacaoStatusRecursoGlosaWS
{

    /**
     * @property \ans\schemes\CabecalhoTransacaoType $cabecalho
     */
    private $cabecalho = null;

    /**
     * @property \ans\schemes\CtProtocoloSolicitacaoStatusType
     * $solicitacaoStatusProtocoloRecurso
     */
    private $solicitacaoStatusProtocoloRecurso = null;

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
     * Gets as solicitacaoStatusProtocoloRecurso
     *
     * @return \ans\schemes\CtProtocoloSolicitacaoStatusType
     */
    public function getSolicitacaoStatusProtocoloRecurso()
    {
        return $this->solicitacaoStatusProtocoloRecurso;
    }

    /**
     * Sets a new solicitacaoStatusProtocoloRecurso
     *
     * @param \ans\schemes\CtProtocoloSolicitacaoStatusType
     * $solicitacaoStatusProtocoloRecurso
     * @return self
     */
    public function setSolicitacaoStatusProtocoloRecurso(\ans\schemes\CtProtocoloSolicitacaoStatusType $solicitacaoStatusProtocoloRecurso)
    {
        $this->solicitacaoStatusProtocoloRecurso = $solicitacaoStatusProtocoloRecurso;
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

