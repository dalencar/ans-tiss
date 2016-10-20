<?php

namespace ans\schemes\CtLoteStatusType;

/**
 * Class representing GuiasTISSAType
 */
class GuiasTISSAType
{

    /**
     * @property \ans\schemes\CtLoteStatusType\GuiasTISSAType\GuiasMedicasAType[]
     * $guiasMedicas
     */
    private $guiasMedicas = null;

    /**
     * @property \ans\schemes\CtLoteStatusType\GuiasTISSAType\GuiasOdontoAType[]
     * $guiasOdonto
     */
    private $guiasOdonto = null;

    /**
     * Adds as guiasMedicas
     *
     * @return self
     * @param \ans\schemes\CtLoteStatusType\GuiasTISSAType\GuiasMedicasAType
     * $guiasMedicas
     */
    public function addToGuiasMedicas(\ans\schemes\CtLoteStatusType\GuiasTISSAType\GuiasMedicasAType $guiasMedicas)
    {
        $this->guiasMedicas[] = $guiasMedicas;
        return $this;
    }

    /**
     * isset guiasMedicas
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuiasMedicas($index)
    {
        return isset($this->guiasMedicas[$index]);
    }

    /**
     * unset guiasMedicas
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuiasMedicas($index)
    {
        unset($this->guiasMedicas[$index]);
    }

    /**
     * Gets as guiasMedicas
     *
     * @return \ans\schemes\CtLoteStatusType\GuiasTISSAType\GuiasMedicasAType[]
     */
    public function getGuiasMedicas()
    {
        return $this->guiasMedicas;
    }

    /**
     * Sets a new guiasMedicas
     *
     * @param \ans\schemes\CtLoteStatusType\GuiasTISSAType\GuiasMedicasAType[]
     * $guiasMedicas
     * @return self
     */
    public function setGuiasMedicas(array $guiasMedicas)
    {
        $this->guiasMedicas = $guiasMedicas;
        return $this;
    }

    /**
     * Adds as guiasOdonto
     *
     * @return self
     * @param \ans\schemes\CtLoteStatusType\GuiasTISSAType\GuiasOdontoAType
     * $guiasOdonto
     */
    public function addToGuiasOdonto(\ans\schemes\CtLoteStatusType\GuiasTISSAType\GuiasOdontoAType $guiasOdonto)
    {
        $this->guiasOdonto[] = $guiasOdonto;
        return $this;
    }

    /**
     * isset guiasOdonto
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuiasOdonto($index)
    {
        return isset($this->guiasOdonto[$index]);
    }

    /**
     * unset guiasOdonto
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuiasOdonto($index)
    {
        unset($this->guiasOdonto[$index]);
    }

    /**
     * Gets as guiasOdonto
     *
     * @return \ans\schemes\CtLoteStatusType\GuiasTISSAType\GuiasOdontoAType[]
     */
    public function getGuiasOdonto()
    {
        return $this->guiasOdonto;
    }

    /**
     * Sets a new guiasOdonto
     *
     * @param \ans\schemes\CtLoteStatusType\GuiasTISSAType\GuiasOdontoAType[]
     * $guiasOdonto
     * @return self
     */
    public function setGuiasOdonto(array $guiasOdonto)
    {
        $this->guiasOdonto = $guiasOdonto;
        return $this;
    }


}

