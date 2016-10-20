<?php

namespace ans\schemes\CtoDemonstrativoOdontologiaType;

/**
 * Class representing DebitosCreditosTributaveisAType
 */
class DebitosCreditosTributaveisAType
{

    /**
     * @property \ans\schemes\CtDescontosType[] $descontos
     */
    private $descontos = null;

    /**
     * Adds as descontos
     *
     * @return self
     * @param \ans\schemes\CtDescontosType $descontos
     */
    public function addToDescontos(\ans\schemes\CtDescontosType $descontos)
    {
        $this->descontos[] = $descontos;
        return $this;
    }

    /**
     * isset descontos
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDescontos($index)
    {
        return isset($this->descontos[$index]);
    }

    /**
     * unset descontos
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDescontos($index)
    {
        unset($this->descontos[$index]);
    }

    /**
     * Gets as descontos
     *
     * @return \ans\schemes\CtDescontosType[]
     */
    public function getDescontos()
    {
        return $this->descontos;
    }

    /**
     * Sets a new descontos
     *
     * @param \ans\schemes\CtDescontosType[] $descontos
     * @return self
     */
    public function setDescontos(array $descontos)
    {
        $this->descontos = $descontos;
        return $this;
    }


}

