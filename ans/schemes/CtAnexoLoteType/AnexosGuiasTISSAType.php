<?php

namespace ans\schemes\CtAnexoLoteType;

/**
 * Class representing AnexosGuiasTISSAType
 */
class AnexosGuiasTISSAType
{

    /**
     * @property \ans\schemes\CtoAnexoSituacaoInicialType[] $anexoSituacaoInicial
     */
    private $anexoSituacaoInicial = null;

    /**
     * @property \ans\schemes\CtmAnexoSolicitacaoRadioType[] $anexoSolicitacaoRadio
     */
    private $anexoSolicitacaoRadio = null;

    /**
     * @property \ans\schemes\CtmAnexoSolicitacaoQuimioType[] $anexoSolicitacaoQuimio
     */
    private $anexoSolicitacaoQuimio = null;

    /**
     * @property \ans\schemes\CtmAnexoSolicitacaoOPMEType[] $anexoSolicitacaoOPME
     */
    private $anexoSolicitacaoOPME = null;

    /**
     * Adds as anexoSituacaoInicial
     *
     * @return self
     * @param \ans\schemes\CtoAnexoSituacaoInicialType $anexoSituacaoInicial
     */
    public function addToAnexoSituacaoInicial(\ans\schemes\CtoAnexoSituacaoInicialType $anexoSituacaoInicial)
    {
        $this->anexoSituacaoInicial[] = $anexoSituacaoInicial;
        return $this;
    }

    /**
     * isset anexoSituacaoInicial
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAnexoSituacaoInicial($index)
    {
        return isset($this->anexoSituacaoInicial[$index]);
    }

    /**
     * unset anexoSituacaoInicial
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAnexoSituacaoInicial($index)
    {
        unset($this->anexoSituacaoInicial[$index]);
    }

    /**
     * Gets as anexoSituacaoInicial
     *
     * @return \ans\schemes\CtoAnexoSituacaoInicialType[]
     */
    public function getAnexoSituacaoInicial()
    {
        return $this->anexoSituacaoInicial;
    }

    /**
     * Sets a new anexoSituacaoInicial
     *
     * @param \ans\schemes\CtoAnexoSituacaoInicialType[] $anexoSituacaoInicial
     * @return self
     */
    public function setAnexoSituacaoInicial(array $anexoSituacaoInicial)
    {
        $this->anexoSituacaoInicial = $anexoSituacaoInicial;
        return $this;
    }

    /**
     * Adds as anexoSolicitacaoRadio
     *
     * @return self
     * @param \ans\schemes\CtmAnexoSolicitacaoRadioType $anexoSolicitacaoRadio
     */
    public function addToAnexoSolicitacaoRadio(\ans\schemes\CtmAnexoSolicitacaoRadioType $anexoSolicitacaoRadio)
    {
        $this->anexoSolicitacaoRadio[] = $anexoSolicitacaoRadio;
        return $this;
    }

    /**
     * isset anexoSolicitacaoRadio
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAnexoSolicitacaoRadio($index)
    {
        return isset($this->anexoSolicitacaoRadio[$index]);
    }

    /**
     * unset anexoSolicitacaoRadio
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAnexoSolicitacaoRadio($index)
    {
        unset($this->anexoSolicitacaoRadio[$index]);
    }

    /**
     * Gets as anexoSolicitacaoRadio
     *
     * @return \ans\schemes\CtmAnexoSolicitacaoRadioType[]
     */
    public function getAnexoSolicitacaoRadio()
    {
        return $this->anexoSolicitacaoRadio;
    }

    /**
     * Sets a new anexoSolicitacaoRadio
     *
     * @param \ans\schemes\CtmAnexoSolicitacaoRadioType[] $anexoSolicitacaoRadio
     * @return self
     */
    public function setAnexoSolicitacaoRadio(array $anexoSolicitacaoRadio)
    {
        $this->anexoSolicitacaoRadio = $anexoSolicitacaoRadio;
        return $this;
    }

    /**
     * Adds as anexoSolicitacaoQuimio
     *
     * @return self
     * @param \ans\schemes\CtmAnexoSolicitacaoQuimioType $anexoSolicitacaoQuimio
     */
    public function addToAnexoSolicitacaoQuimio(\ans\schemes\CtmAnexoSolicitacaoQuimioType $anexoSolicitacaoQuimio)
    {
        $this->anexoSolicitacaoQuimio[] = $anexoSolicitacaoQuimio;
        return $this;
    }

    /**
     * isset anexoSolicitacaoQuimio
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAnexoSolicitacaoQuimio($index)
    {
        return isset($this->anexoSolicitacaoQuimio[$index]);
    }

    /**
     * unset anexoSolicitacaoQuimio
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAnexoSolicitacaoQuimio($index)
    {
        unset($this->anexoSolicitacaoQuimio[$index]);
    }

    /**
     * Gets as anexoSolicitacaoQuimio
     *
     * @return \ans\schemes\CtmAnexoSolicitacaoQuimioType[]
     */
    public function getAnexoSolicitacaoQuimio()
    {
        return $this->anexoSolicitacaoQuimio;
    }

    /**
     * Sets a new anexoSolicitacaoQuimio
     *
     * @param \ans\schemes\CtmAnexoSolicitacaoQuimioType[] $anexoSolicitacaoQuimio
     * @return self
     */
    public function setAnexoSolicitacaoQuimio(array $anexoSolicitacaoQuimio)
    {
        $this->anexoSolicitacaoQuimio = $anexoSolicitacaoQuimio;
        return $this;
    }

    /**
     * Adds as anexoSolicitacaoOPME
     *
     * @return self
     * @param \ans\schemes\CtmAnexoSolicitacaoOPMEType $anexoSolicitacaoOPME
     */
    public function addToAnexoSolicitacaoOPME(\ans\schemes\CtmAnexoSolicitacaoOPMEType $anexoSolicitacaoOPME)
    {
        $this->anexoSolicitacaoOPME[] = $anexoSolicitacaoOPME;
        return $this;
    }

    /**
     * isset anexoSolicitacaoOPME
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAnexoSolicitacaoOPME($index)
    {
        return isset($this->anexoSolicitacaoOPME[$index]);
    }

    /**
     * unset anexoSolicitacaoOPME
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAnexoSolicitacaoOPME($index)
    {
        unset($this->anexoSolicitacaoOPME[$index]);
    }

    /**
     * Gets as anexoSolicitacaoOPME
     *
     * @return \ans\schemes\CtmAnexoSolicitacaoOPMEType[]
     */
    public function getAnexoSolicitacaoOPME()
    {
        return $this->anexoSolicitacaoOPME;
    }

    /**
     * Sets a new anexoSolicitacaoOPME
     *
     * @param \ans\schemes\CtmAnexoSolicitacaoOPMEType[] $anexoSolicitacaoOPME
     * @return self
     */
    public function setAnexoSolicitacaoOPME(array $anexoSolicitacaoOPME)
    {
        $this->anexoSolicitacaoOPME = $anexoSolicitacaoOPME;
        return $this;
    }


}

