<?php

namespace ans\schemes\CtLoteStatusType\GuiasTISSAType;

/**
 * Class representing GuiasMedicasAType
 */
class GuiasMedicasAType
{

    /**
     * @property \ans\schemes\CtGuiaDadosType $guias
     */
    private $guias = null;

    /**
     * Gets as guias
     *
     * @return \ans\schemes\CtGuiaDadosType
     */
    public function getGuias()
    {
        return $this->guias;
    }

    /**
     * Sets a new guias
     *
     * @param \ans\schemes\CtGuiaDadosType $guias
     * @return self
     */
    public function setGuias(\ans\schemes\CtGuiaDadosType $guias)
    {
        $this->guias = $guias;
        return $this;
    }


}

