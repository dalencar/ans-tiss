<?php

namespace ans\schemes;

/**
 * Class representing ProtocoloRecebimentoWS
 */
class ProtocoloRecebimentoWS
{

    /**
     * @property \ans\schemes\CabecalhoTransacaoType $cabecalho
     */
    private $cabecalho = null;

    /**
     * @property \ans\schemes\CtRecebimentoLoteType $recebimentoLote
     */
    private $recebimentoLote = null;

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
     * Gets as recebimentoLote
     *
     * @return \ans\schemes\CtRecebimentoLoteType
     */
    public function getRecebimentoLote()
    {
        return $this->recebimentoLote;
    }

    /**
     * Sets a new recebimentoLote
     *
     * @param \ans\schemes\CtRecebimentoLoteType $recebimentoLote
     * @return self
     */
    public function setRecebimentoLote(\ans\schemes\CtRecebimentoLoteType $recebimentoLote)
    {
        $this->recebimentoLote = $recebimentoLote;
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

