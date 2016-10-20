<?php

namespace ans\schemes\CtmDemonstrativoAnaliseContaType;

/**
 * Class representing DadosContaAType
 */
class DadosContaAType
{

    /**
     * @property
     * \ans\schemes\CtmDemonstrativoAnaliseContaType\DadosContaAType\DadosProtocoloAType[]
     * $dadosProtocolo
     */
    private $dadosProtocolo = null;

    /**
     * Adds as dadosProtocolo
     *
     * @return self
     * @param
     * \ans\schemes\CtmDemonstrativoAnaliseContaType\DadosContaAType\DadosProtocoloAType
     * $dadosProtocolo
     */
    public function addToDadosProtocolo(\ans\schemes\CtmDemonstrativoAnaliseContaType\DadosContaAType\DadosProtocoloAType $dadosProtocolo)
    {
        $this->dadosProtocolo[] = $dadosProtocolo;
        return $this;
    }

    /**
     * isset dadosProtocolo
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDadosProtocolo($index)
    {
        return isset($this->dadosProtocolo[$index]);
    }

    /**
     * unset dadosProtocolo
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDadosProtocolo($index)
    {
        unset($this->dadosProtocolo[$index]);
    }

    /**
     * Gets as dadosProtocolo
     *
     * @return
     * \ans\schemes\CtmDemonstrativoAnaliseContaType\DadosContaAType\DadosProtocoloAType[]
     */
    public function getDadosProtocolo()
    {
        return $this->dadosProtocolo;
    }

    /**
     * Sets a new dadosProtocolo
     *
     * @param
     * \ans\schemes\CtmDemonstrativoAnaliseContaType\DadosContaAType\DadosProtocoloAType[]
     * $dadosProtocolo
     * @return self
     */
    public function setDadosProtocolo(array $dadosProtocolo)
    {
        $this->dadosProtocolo = $dadosProtocolo;
        return $this;
    }


}

