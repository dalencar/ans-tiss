<?php

namespace ans\schemes;

/**
 * Class representing LoteAnexoWS
 */
class LoteAnexoWS
{

    /**
     * @property \ans\schemes\CabecalhoTransacaoType $cabecalho
     */
    private $cabecalho = null;

    /**
     * @property \ans\schemes\CtmAnexoLoteType $loteAnexo
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
     * @return \ans\schemes\CtmAnexoLoteType
     */
    public function getLoteAnexo()
    {
        return $this->loteAnexo;
    }

    /**
     * Sets a new loteAnexo
     *
     * @param \ans\schemes\CtmAnexoLoteType $loteAnexo
     * @return self
     */
    public function setLoteAnexo(\ans\schemes\CtmAnexoLoteType $loteAnexo)
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

