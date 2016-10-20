<?php

namespace ans\schemes;

/**
 * Class representing ReciboComunicacaoWS
 */
class ReciboComunicacaoWS
{

    /**
     * @property \ans\schemes\CabecalhoTransacaoType $cabecalho
     */
    private $cabecalho = null;

    /**
     * @property \ans\schemes\CtReciboComunicacaoType $reciboComunicacao
     */
    private $reciboComunicacao = null;

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
     * Gets as reciboComunicacao
     *
     * @return \ans\schemes\CtReciboComunicacaoType
     */
    public function getReciboComunicacao()
    {
        return $this->reciboComunicacao;
    }

    /**
     * Sets a new reciboComunicacao
     *
     * @param \ans\schemes\CtReciboComunicacaoType $reciboComunicacao
     * @return self
     */
    public function setReciboComunicacao(\ans\schemes\CtReciboComunicacaoType $reciboComunicacao)
    {
        $this->reciboComunicacao = $reciboComunicacao;
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

