<?php

namespace ans\schemes;

/**
 * Class representing SolicitacaoDemonstrativoRetornoWS
 */
class SolicitacaoDemonstrativoRetornoWS
{

    /**
     * @property \ans\schemes\CabecalhoTransacaoType $cabecalho
     */
    private $cabecalho = null;

    /**
     * @property \ans\schemes\CtDemonstrativoSolicitacaoType
     * $solicitacaoDemonstrativoRetorno
     */
    private $solicitacaoDemonstrativoRetorno = null;

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
     * Gets as solicitacaoDemonstrativoRetorno
     *
     * @return \ans\schemes\CtDemonstrativoSolicitacaoType
     */
    public function getSolicitacaoDemonstrativoRetorno()
    {
        return $this->solicitacaoDemonstrativoRetorno;
    }

    /**
     * Sets a new solicitacaoDemonstrativoRetorno
     *
     * @param \ans\schemes\CtDemonstrativoSolicitacaoType
     * $solicitacaoDemonstrativoRetorno
     * @return self
     */
    public function setSolicitacaoDemonstrativoRetorno(\ans\schemes\CtDemonstrativoSolicitacaoType $solicitacaoDemonstrativoRetorno)
    {
        $this->solicitacaoDemonstrativoRetorno = $solicitacaoDemonstrativoRetorno;
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

