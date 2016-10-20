<?php

namespace ans\schemes\CtOpmUtilizadaType;

/**
 * Class representing OPMAType
 */
class OPMAType
{

    /**
     * @property \ans\schemes\CtOpmUtilizadaType\OPMAType\IdentificacaoOPMAType[]
     * $identificacaoOPM
     */
    private $identificacaoOPM = null;

    /**
     * Adds as identificacaoOPM
     *
     * @return self
     * @param \ans\schemes\CtOpmUtilizadaType\OPMAType\IdentificacaoOPMAType
     * $identificacaoOPM
     */
    public function addToIdentificacaoOPM(\ans\schemes\CtOpmUtilizadaType\OPMAType\IdentificacaoOPMAType $identificacaoOPM)
    {
        $this->identificacaoOPM[] = $identificacaoOPM;
        return $this;
    }

    /**
     * isset identificacaoOPM
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetIdentificacaoOPM($index)
    {
        return isset($this->identificacaoOPM[$index]);
    }

    /**
     * unset identificacaoOPM
     *
     * @param scalar $index
     * @return void
     */
    public function unsetIdentificacaoOPM($index)
    {
        unset($this->identificacaoOPM[$index]);
    }

    /**
     * Gets as identificacaoOPM
     *
     * @return \ans\schemes\CtOpmUtilizadaType\OPMAType\IdentificacaoOPMAType[]
     */
    public function getIdentificacaoOPM()
    {
        return $this->identificacaoOPM;
    }

    /**
     * Sets a new identificacaoOPM
     *
     * @param \ans\schemes\CtOpmUtilizadaType\OPMAType\IdentificacaoOPMAType[]
     * $identificacaoOPM
     * @return self
     */
    public function setIdentificacaoOPM(array $identificacaoOPM)
    {
        $this->identificacaoOPM = $identificacaoOPM;
        return $this;
    }


}

