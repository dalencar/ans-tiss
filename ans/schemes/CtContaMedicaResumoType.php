<?php

namespace ans\schemes;

/**
 * Class representing CtContaMedicaResumoType
 *
 * utilizado no demonstrativo de análise de conta
 * XSD Type: ct_contaMedicaResumo
 */
class CtContaMedicaResumoType
{

    /**
     * @property string $numeroLotePrestador
     */
    private $numeroLotePrestador = null;

    /**
     * @property string $numeroProtocolo
     */
    private $numeroProtocolo = null;

    /**
     * @property \DateTime $dataProtocolo
     */
    private $dataProtocolo = null;

    /**
     * @property float $valorProtocolo
     */
    private $valorProtocolo = null;

    /**
     * @property float $valorGlosaProtocolo
     */
    private $valorGlosaProtocolo = null;

    /**
     * @property \ans\schemes\CtMotivoGlosaType $glosaProtocolo
     */
    private $glosaProtocolo = null;

    /**
     * @property \ans\schemes\CtContaMedicaResumoType\RelacaoGuiasAType[] $relacaoGuias
     */
    private $relacaoGuias = null;

    /**
     * @property float $valorInformadoProtocolo
     */
    private $valorInformadoProtocolo = null;

    /**
     * @property float $valorProcessadoProtocolo
     */
    private $valorProcessadoProtocolo = null;

    /**
     * @property float $valorLiberadoProtocolo
     */
    private $valorLiberadoProtocolo = null;

    /**
     * Gets as numeroLotePrestador
     *
     * @return string
     */
    public function getNumeroLotePrestador()
    {
        return $this->numeroLotePrestador;
    }

    /**
     * Sets a new numeroLotePrestador
     *
     * @param string $numeroLotePrestador
     * @return self
     */
    public function setNumeroLotePrestador($numeroLotePrestador)
    {
        $this->numeroLotePrestador = $numeroLotePrestador;
        return $this;
    }

    /**
     * Gets as numeroProtocolo
     *
     * @return string
     */
    public function getNumeroProtocolo()
    {
        return $this->numeroProtocolo;
    }

    /**
     * Sets a new numeroProtocolo
     *
     * @param string $numeroProtocolo
     * @return self
     */
    public function setNumeroProtocolo($numeroProtocolo)
    {
        $this->numeroProtocolo = $numeroProtocolo;
        return $this;
    }

    /**
     * Gets as dataProtocolo
     *
     * @return \DateTime
     */
    public function getDataProtocolo()
    {
        return $this->dataProtocolo;
    }

    /**
     * Sets a new dataProtocolo
     *
     * @param \DateTime $dataProtocolo
     * @return self
     */
    public function setDataProtocolo(\DateTime $dataProtocolo)
    {
        $this->dataProtocolo = $dataProtocolo;
        return $this;
    }

    /**
     * Gets as valorProtocolo
     *
     * @return float
     */
    public function getValorProtocolo()
    {
        return $this->valorProtocolo;
    }

    /**
     * Sets a new valorProtocolo
     *
     * @param float $valorProtocolo
     * @return self
     */
    public function setValorProtocolo($valorProtocolo)
    {
        $this->valorProtocolo = $valorProtocolo;
        return $this;
    }

    /**
     * Gets as valorGlosaProtocolo
     *
     * @return float
     */
    public function getValorGlosaProtocolo()
    {
        return $this->valorGlosaProtocolo;
    }

    /**
     * Sets a new valorGlosaProtocolo
     *
     * @param float $valorGlosaProtocolo
     * @return self
     */
    public function setValorGlosaProtocolo($valorGlosaProtocolo)
    {
        $this->valorGlosaProtocolo = $valorGlosaProtocolo;
        return $this;
    }

    /**
     * Gets as glosaProtocolo
     *
     * @return \ans\schemes\CtMotivoGlosaType
     */
    public function getGlosaProtocolo()
    {
        return $this->glosaProtocolo;
    }

    /**
     * Sets a new glosaProtocolo
     *
     * @param \ans\schemes\CtMotivoGlosaType $glosaProtocolo
     * @return self
     */
    public function setGlosaProtocolo(\ans\schemes\CtMotivoGlosaType $glosaProtocolo)
    {
        $this->glosaProtocolo = $glosaProtocolo;
        return $this;
    }

    /**
     * Adds as relacaoGuias
     *
     * @return self
     * @param \ans\schemes\CtContaMedicaResumoType\RelacaoGuiasAType $relacaoGuias
     */
    public function addToRelacaoGuias(\ans\schemes\CtContaMedicaResumoType\RelacaoGuiasAType $relacaoGuias)
    {
        $this->relacaoGuias[] = $relacaoGuias;
        return $this;
    }

    /**
     * isset relacaoGuias
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRelacaoGuias($index)
    {
        return isset($this->relacaoGuias[$index]);
    }

    /**
     * unset relacaoGuias
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRelacaoGuias($index)
    {
        unset($this->relacaoGuias[$index]);
    }

    /**
     * Gets as relacaoGuias
     *
     * @return \ans\schemes\CtContaMedicaResumoType\RelacaoGuiasAType[]
     */
    public function getRelacaoGuias()
    {
        return $this->relacaoGuias;
    }

    /**
     * Sets a new relacaoGuias
     *
     * @param \ans\schemes\CtContaMedicaResumoType\RelacaoGuiasAType[] $relacaoGuias
     * @return self
     */
    public function setRelacaoGuias(array $relacaoGuias)
    {
        $this->relacaoGuias = $relacaoGuias;
        return $this;
    }

    /**
     * Gets as valorInformadoProtocolo
     *
     * @return float
     */
    public function getValorInformadoProtocolo()
    {
        return $this->valorInformadoProtocolo;
    }

    /**
     * Sets a new valorInformadoProtocolo
     *
     * @param float $valorInformadoProtocolo
     * @return self
     */
    public function setValorInformadoProtocolo($valorInformadoProtocolo)
    {
        $this->valorInformadoProtocolo = $valorInformadoProtocolo;
        return $this;
    }

    /**
     * Gets as valorProcessadoProtocolo
     *
     * @return float
     */
    public function getValorProcessadoProtocolo()
    {
        return $this->valorProcessadoProtocolo;
    }

    /**
     * Sets a new valorProcessadoProtocolo
     *
     * @param float $valorProcessadoProtocolo
     * @return self
     */
    public function setValorProcessadoProtocolo($valorProcessadoProtocolo)
    {
        $this->valorProcessadoProtocolo = $valorProcessadoProtocolo;
        return $this;
    }

    /**
     * Gets as valorLiberadoProtocolo
     *
     * @return float
     */
    public function getValorLiberadoProtocolo()
    {
        return $this->valorLiberadoProtocolo;
    }

    /**
     * Sets a new valorLiberadoProtocolo
     *
     * @param float $valorLiberadoProtocolo
     * @return self
     */
    public function setValorLiberadoProtocolo($valorLiberadoProtocolo)
    {
        $this->valorLiberadoProtocolo = $valorLiberadoProtocolo;
        return $this;
    }


}

