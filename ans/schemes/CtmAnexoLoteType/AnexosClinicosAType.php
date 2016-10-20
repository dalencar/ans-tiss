<?php

namespace ans\schemes\CtmAnexoLoteType;

/**
 * Class representing AnexosClinicosAType
 */
class AnexosClinicosAType
{

    /**
     * @property \ans\schemes\CtmAnexoSolicitacaoQuimioType $solicitacaoQuimioterapia
     */
    private $solicitacaoQuimioterapia = null;

    /**
     * @property \ans\schemes\CtmAnexoSolicitacaoRadioType $solicitacaoRadioterapia
     */
    private $solicitacaoRadioterapia = null;

    /**
     * @property \ans\schemes\CtmAnexoSolicitacaoOPMEType $solicitacaoOPME
     */
    private $solicitacaoOPME = null;

    /**
     * Gets as solicitacaoQuimioterapia
     *
     * @return \ans\schemes\CtmAnexoSolicitacaoQuimioType
     */
    public function getSolicitacaoQuimioterapia()
    {
        return $this->solicitacaoQuimioterapia;
    }

    /**
     * Sets a new solicitacaoQuimioterapia
     *
     * @param \ans\schemes\CtmAnexoSolicitacaoQuimioType $solicitacaoQuimioterapia
     * @return self
     */
    public function setSolicitacaoQuimioterapia(\ans\schemes\CtmAnexoSolicitacaoQuimioType $solicitacaoQuimioterapia)
    {
        $this->solicitacaoQuimioterapia = $solicitacaoQuimioterapia;
        return $this;
    }

    /**
     * Gets as solicitacaoRadioterapia
     *
     * @return \ans\schemes\CtmAnexoSolicitacaoRadioType
     */
    public function getSolicitacaoRadioterapia()
    {
        return $this->solicitacaoRadioterapia;
    }

    /**
     * Sets a new solicitacaoRadioterapia
     *
     * @param \ans\schemes\CtmAnexoSolicitacaoRadioType $solicitacaoRadioterapia
     * @return self
     */
    public function setSolicitacaoRadioterapia(\ans\schemes\CtmAnexoSolicitacaoRadioType $solicitacaoRadioterapia)
    {
        $this->solicitacaoRadioterapia = $solicitacaoRadioterapia;
        return $this;
    }

    /**
     * Gets as solicitacaoOPME
     *
     * @return \ans\schemes\CtmAnexoSolicitacaoOPMEType
     */
    public function getSolicitacaoOPME()
    {
        return $this->solicitacaoOPME;
    }

    /**
     * Sets a new solicitacaoOPME
     *
     * @param \ans\schemes\CtmAnexoSolicitacaoOPMEType $solicitacaoOPME
     * @return self
     */
    public function setSolicitacaoOPME(\ans\schemes\CtmAnexoSolicitacaoOPMEType $solicitacaoOPME)
    {
        $this->solicitacaoOPME = $solicitacaoOPME;
        return $this;
    }


}

