<?php

namespace ans\schemes\CtAnexoRecebimentoType;

/**
 * Class representing AnexosClinicosAType
 */
class AnexosClinicosAType
{

    /**
     * @property \ans\schemes\CtmAutorizacaoOPMEType $anexoOPME
     */
    private $anexoOPME = null;

    /**
     * @property \ans\schemes\CtmAutorizacaoQuimioType $anexoQuimio
     */
    private $anexoQuimio = null;

    /**
     * @property \ans\schemes\CtmAutorizacaoRadioType $anexoRadio
     */
    private $anexoRadio = null;

    /**
     * Gets as anexoOPME
     *
     * @return \ans\schemes\CtmAutorizacaoOPMEType
     */
    public function getAnexoOPME()
    {
        return $this->anexoOPME;
    }

    /**
     * Sets a new anexoOPME
     *
     * @param \ans\schemes\CtmAutorizacaoOPMEType $anexoOPME
     * @return self
     */
    public function setAnexoOPME(\ans\schemes\CtmAutorizacaoOPMEType $anexoOPME)
    {
        $this->anexoOPME = $anexoOPME;
        return $this;
    }

    /**
     * Gets as anexoQuimio
     *
     * @return \ans\schemes\CtmAutorizacaoQuimioType
     */
    public function getAnexoQuimio()
    {
        return $this->anexoQuimio;
    }

    /**
     * Sets a new anexoQuimio
     *
     * @param \ans\schemes\CtmAutorizacaoQuimioType $anexoQuimio
     * @return self
     */
    public function setAnexoQuimio(\ans\schemes\CtmAutorizacaoQuimioType $anexoQuimio)
    {
        $this->anexoQuimio = $anexoQuimio;
        return $this;
    }

    /**
     * Gets as anexoRadio
     *
     * @return \ans\schemes\CtmAutorizacaoRadioType
     */
    public function getAnexoRadio()
    {
        return $this->anexoRadio;
    }

    /**
     * Sets a new anexoRadio
     *
     * @param \ans\schemes\CtmAutorizacaoRadioType $anexoRadio
     * @return self
     */
    public function setAnexoRadio(\ans\schemes\CtmAutorizacaoRadioType $anexoRadio)
    {
        $this->anexoRadio = $anexoRadio;
        return $this;
    }


}

