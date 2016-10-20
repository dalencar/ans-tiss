<?php

namespace ans\schemes;

/**
 * Class representing CtOpmUtilizadaType
 *
 *
 * XSD Type: ct_opmUtilizada
 */
class CtOpmUtilizadaType
{

    /**
     * @property \ans\schemes\CtOpmUtilizadaType\OPMAType\IdentificacaoOPMAType[] $oPM
     */
    private $oPM = null;

    /**
     * @property float $valorTotalOPM
     */
    private $valorTotalOPM = null;

    /**
     * Adds as identificacaoOPM
     *
     * @return self
     * @param \ans\schemes\CtOpmUtilizadaType\OPMAType\IdentificacaoOPMAType
     * $identificacaoOPM
     */
    public function addToOPM(\ans\schemes\CtOpmUtilizadaType\OPMAType\IdentificacaoOPMAType $identificacaoOPM)
    {
        $this->oPM[] = $identificacaoOPM;
        return $this;
    }

    /**
     * isset oPM
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOPM($index)
    {
        return isset($this->oPM[$index]);
    }

    /**
     * unset oPM
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOPM($index)
    {
        unset($this->oPM[$index]);
    }

    /**
     * Gets as oPM
     *
     * @return \ans\schemes\CtOpmUtilizadaType\OPMAType\IdentificacaoOPMAType[]
     */
    public function getOPM()
    {
        return $this->oPM;
    }

    /**
     * Sets a new oPM
     *
     * @param \ans\schemes\CtOpmUtilizadaType\OPMAType\IdentificacaoOPMAType[] $oPM
     * @return self
     */
    public function setOPM(array $oPM)
    {
        $this->oPM = $oPM;
        return $this;
    }

    /**
     * Gets as valorTotalOPM
     *
     * @return float
     */
    public function getValorTotalOPM()
    {
        return $this->valorTotalOPM;
    }

    /**
     * Sets a new valorTotalOPM
     *
     * @param float $valorTotalOPM
     * @return self
     */
    public function setValorTotalOPM($valorTotalOPM)
    {
        $this->valorTotalOPM = $valorTotalOPM;
        return $this;
    }


}

