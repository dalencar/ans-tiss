<?php

namespace ans\schemes\CtProtocoloDetalheType;

/**
 * Class representing DadosGuiasProtocoloAType
 */
class DadosGuiasProtocoloAType
{

    /**
     * @property \ans\schemes\CtGuiaDadosType[] $dadosGuias
     */
    private $dadosGuias = null;

    /**
     * @property \ans\schemes\CtGuiaDadosOdontoType[] $dadosGuiasOdonto
     */
    private $dadosGuiasOdonto = null;

    /**
     * Adds as dadosGuias
     *
     * @return self
     * @param \ans\schemes\CtGuiaDadosType $dadosGuias
     */
    public function addToDadosGuias(\ans\schemes\CtGuiaDadosType $dadosGuias)
    {
        $this->dadosGuias[] = $dadosGuias;
        return $this;
    }

    /**
     * isset dadosGuias
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDadosGuias($index)
    {
        return isset($this->dadosGuias[$index]);
    }

    /**
     * unset dadosGuias
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDadosGuias($index)
    {
        unset($this->dadosGuias[$index]);
    }

    /**
     * Gets as dadosGuias
     *
     * @return \ans\schemes\CtGuiaDadosType[]
     */
    public function getDadosGuias()
    {
        return $this->dadosGuias;
    }

    /**
     * Sets a new dadosGuias
     *
     * @param \ans\schemes\CtGuiaDadosType[] $dadosGuias
     * @return self
     */
    public function setDadosGuias(array $dadosGuias)
    {
        $this->dadosGuias = $dadosGuias;
        return $this;
    }

    /**
     * Adds as dadosGuiasOdonto
     *
     * @return self
     * @param \ans\schemes\CtGuiaDadosOdontoType $dadosGuiasOdonto
     */
    public function addToDadosGuiasOdonto(\ans\schemes\CtGuiaDadosOdontoType $dadosGuiasOdonto)
    {
        $this->dadosGuiasOdonto[] = $dadosGuiasOdonto;
        return $this;
    }

    /**
     * isset dadosGuiasOdonto
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDadosGuiasOdonto($index)
    {
        return isset($this->dadosGuiasOdonto[$index]);
    }

    /**
     * unset dadosGuiasOdonto
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDadosGuiasOdonto($index)
    {
        unset($this->dadosGuiasOdonto[$index]);
    }

    /**
     * Gets as dadosGuiasOdonto
     *
     * @return \ans\schemes\CtGuiaDadosOdontoType[]
     */
    public function getDadosGuiasOdonto()
    {
        return $this->dadosGuiasOdonto;
    }

    /**
     * Sets a new dadosGuiasOdonto
     *
     * @param \ans\schemes\CtGuiaDadosOdontoType[] $dadosGuiasOdonto
     * @return self
     */
    public function setDadosGuiasOdonto(array $dadosGuiasOdonto)
    {
        $this->dadosGuiasOdonto = $dadosGuiasOdonto;
        return $this;
    }


}

