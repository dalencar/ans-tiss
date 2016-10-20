<?php

namespace ans\schemes;

/**
 * Class representing CancelaGuiaWS
 */
class CancelaGuiaWS
{

    /**
     * @property \ans\schemes\CabecalhoTransacaoType $cabecalho
     */
    private $cabecalho = null;

    /**
     * @property \ans\schemes\CtGuiaCancelamentoType $cancelaGuia
     */
    private $cancelaGuia = null;

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
     * Gets as cancelaGuia
     *
     * @return \ans\schemes\CtGuiaCancelamentoType
     */
    public function getCancelaGuia()
    {
        return $this->cancelaGuia;
    }

    /**
     * Sets a new cancelaGuia
     *
     * @param \ans\schemes\CtGuiaCancelamentoType $cancelaGuia
     * @return self
     */
    public function setCancelaGuia(\ans\schemes\CtGuiaCancelamentoType $cancelaGuia)
    {
        $this->cancelaGuia = $cancelaGuia;
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

