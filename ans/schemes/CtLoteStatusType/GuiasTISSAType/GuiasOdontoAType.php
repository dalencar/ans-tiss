<?php

namespace ans\schemes\CtLoteStatusType\GuiasTISSAType;

/**
 * Class representing GuiasOdontoAType
 */
class GuiasOdontoAType
{

    /**
     * @property \ans\schemes\CtGuiaDadosOdontoType $guias
     */
    private $guias = null;

    /**
     * Gets as guias
     *
     * @return \ans\schemes\CtGuiaDadosOdontoType
     */
    public function getGuias()
    {
        return $this->guias;
    }

    /**
     * Sets a new guias
     *
     * @param \ans\schemes\CtGuiaDadosOdontoType $guias
     * @return self
     */
    public function setGuias(\ans\schemes\CtGuiaDadosOdontoType $guias)
    {
        $this->guias = $guias;
        return $this;
    }


}

