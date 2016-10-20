<?php

namespace ans\schemes;

/**
 * Class representing ReciboCancelaGuiaWS
 */
class ReciboCancelaGuiaWS
{

    /**
     * @property \ans\schemes\CabecalhoTransacaoType $cabecalho
     */
    private $cabecalho = null;

    /**
     * @property \ans\schemes\CtReciboCancelaGuiaType $reciboCancelaGuia
     */
    private $reciboCancelaGuia = null;

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
     * Gets as reciboCancelaGuia
     *
     * @return \ans\schemes\CtReciboCancelaGuiaType
     */
    public function getReciboCancelaGuia()
    {
        return $this->reciboCancelaGuia;
    }

    /**
     * Sets a new reciboCancelaGuia
     *
     * @param \ans\schemes\CtReciboCancelaGuiaType $reciboCancelaGuia
     * @return self
     */
    public function setReciboCancelaGuia(\ans\schemes\CtReciboCancelaGuiaType $reciboCancelaGuia)
    {
        $this->reciboCancelaGuia = $reciboCancelaGuia;
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

