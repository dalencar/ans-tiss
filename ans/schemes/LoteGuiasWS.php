<?php

namespace ans\schemes;

/**
 * Class representing LoteGuiasWS
 */
class LoteGuiasWS
{

    /**
     * @property \ans\schemes\CabecalhoTransacaoType $cabecalho
     */
    private $cabecalho = null;

    /**
     * @property \ans\schemes\CtmGuiaLoteType $loteGuias
     */
    private $loteGuias = null;

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
     * Gets as loteGuias
     *
     * @return \ans\schemes\CtmGuiaLoteType
     */
    public function getLoteGuias()
    {
        return $this->loteGuias;
    }

    /**
     * Sets a new loteGuias
     *
     * @param \ans\schemes\CtmGuiaLoteType $loteGuias
     * @return self
     */
    public function setLoteGuias(\ans\schemes\CtmGuiaLoteType $loteGuias)
    {
        $this->loteGuias = $loteGuias;
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

