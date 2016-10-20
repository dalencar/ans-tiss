<?php

namespace ans\schemes\CtmAnexoSolicitacaoOPMEType;

/**
 * Class representing OpmeSolicitadasAType
 */
class OpmeSolicitadasAType
{

    /**
     * @property
     * \ans\schemes\CtmAnexoSolicitacaoOPMEType\OpmeSolicitadasAType\OpmeSolicitadaAType[]
     * $opmeSolicitada
     */
    private $opmeSolicitada = null;

    /**
     * Adds as opmeSolicitada
     *
     * @return self
     * @param
     * \ans\schemes\CtmAnexoSolicitacaoOPMEType\OpmeSolicitadasAType\OpmeSolicitadaAType
     * $opmeSolicitada
     */
    public function addToOpmeSolicitada(\ans\schemes\CtmAnexoSolicitacaoOPMEType\OpmeSolicitadasAType\OpmeSolicitadaAType $opmeSolicitada)
    {
        $this->opmeSolicitada[] = $opmeSolicitada;
        return $this;
    }

    /**
     * isset opmeSolicitada
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOpmeSolicitada($index)
    {
        return isset($this->opmeSolicitada[$index]);
    }

    /**
     * unset opmeSolicitada
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOpmeSolicitada($index)
    {
        unset($this->opmeSolicitada[$index]);
    }

    /**
     * Gets as opmeSolicitada
     *
     * @return
     * \ans\schemes\CtmAnexoSolicitacaoOPMEType\OpmeSolicitadasAType\OpmeSolicitadaAType[]
     */
    public function getOpmeSolicitada()
    {
        return $this->opmeSolicitada;
    }

    /**
     * Sets a new opmeSolicitada
     *
     * @param
     * \ans\schemes\CtmAnexoSolicitacaoOPMEType\OpmeSolicitadasAType\OpmeSolicitadaAType[]
     * $opmeSolicitada
     * @return self
     */
    public function setOpmeSolicitada(array $opmeSolicitada)
    {
        $this->opmeSolicitada = $opmeSolicitada;
        return $this;
    }


}

