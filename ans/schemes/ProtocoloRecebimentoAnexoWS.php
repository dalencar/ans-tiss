<?php

namespace ans\schemes;

/**
 * Class representing ProtocoloRecebimentoAnexoWS
 */
class ProtocoloRecebimentoAnexoWS
{

    /**
     * @property \ans\schemes\CabecalhoTransacaoType $cabecalho
     */
    private $cabecalho = null;

    /**
     * @property \ans\schemes\CtAnexoRecebimentoType $loteAnexo
     */
    private $loteAnexo = null;

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
     * Gets as loteAnexo
     *
     * @return \ans\schemes\CtAnexoRecebimentoType
     */
    public function getLoteAnexo()
    {
        return $this->loteAnexo;
    }

    /**
     * Sets a new loteAnexo
     *
     * @param \ans\schemes\CtAnexoRecebimentoType $loteAnexo
     * @return self
     */
    public function setLoteAnexo(\ans\schemes\CtAnexoRecebimentoType $loteAnexo)
    {
        $this->loteAnexo = $loteAnexo;
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

