<?php

namespace ans\schemes\CtoDemonstrativoOdontologiaType;

/**
 * Class representing PeriodoProcAType
 */
class PeriodoProcAType
{

    /**
     * @property \DateTime $datainicio
     */
    private $datainicio = null;

    /**
     * @property \DateTime $datafim
     */
    private $datafim = null;

    /**
     * Gets as datainicio
     *
     * @return \DateTime
     */
    public function getDatainicio()
    {
        return $this->datainicio;
    }

    /**
     * Sets a new datainicio
     *
     * @param \DateTime $datainicio
     * @return self
     */
    public function setDatainicio(\DateTime $datainicio)
    {
        $this->datainicio = $datainicio;
        return $this;
    }

    /**
     * Gets as datafim
     *
     * @return \DateTime
     */
    public function getDatafim()
    {
        return $this->datafim;
    }

    /**
     * Sets a new datafim
     *
     * @param \DateTime $datafim
     * @return self
     */
    public function setDatafim(\DateTime $datafim)
    {
        $this->datafim = $datafim;
        return $this;
    }


}

