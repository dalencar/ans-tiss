<?php

namespace ans\schemes;

/**
 * Class representing SituacaoProtocoloWS
 */
class SituacaoProtocoloWS
{

    /**
     * @property \ans\schemes\CabecalhoTransacaoType $cabecalho
     */
    private $cabecalho = null;

    /**
     * @property \ans\schemes\CtSituacaoProtocoloType $situacaoProtocolo
     */
    private $situacaoProtocolo = null;

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
     * Gets as situacaoProtocolo
     *
     * @return \ans\schemes\CtSituacaoProtocoloType
     */
    public function getSituacaoProtocolo()
    {
        return $this->situacaoProtocolo;
    }

    /**
     * Sets a new situacaoProtocolo
     *
     * @param \ans\schemes\CtSituacaoProtocoloType $situacaoProtocolo
     * @return self
     */
    public function setSituacaoProtocolo(\ans\schemes\CtSituacaoProtocoloType $situacaoProtocolo)
    {
        $this->situacaoProtocolo = $situacaoProtocolo;
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

