<?php

namespace ans\schemes\CtmGuiaLoteType;

/**
 * Class representing GuiasTISSAType
 */
class GuiasTISSAType
{

    /**
     * @property \ans\schemes\CtmSpSadtGuiaType[] $guiaSPSADT
     */
    private $guiaSPSADT = null;

    /**
     * @property \ans\schemes\CtmInternacaoResumoGuiaType[] $guiaResumoInternacao
     */
    private $guiaResumoInternacao = null;

    /**
     * @property \ans\schemes\CtmHonorarioIndividualGuiaType[] $guiaHonorarioIndividual
     */
    private $guiaHonorarioIndividual = null;

    /**
     * @property \ans\schemes\CtmConsultaGuiaType[] $guiaConsulta
     */
    private $guiaConsulta = null;

    /**
     * @property \ans\schemes\CtoGuiaOdontologiaType[] $guiaOdonto
     */
    private $guiaOdonto = null;

    /**
     * Adds as guiaSPSADT
     *
     * @return self
     * @param \ans\schemes\CtmSpSadtGuiaType $guiaSPSADT
     */
    public function addToGuiaSPSADT(\ans\schemes\CtmSpSadtGuiaType $guiaSPSADT)
    {
        $this->guiaSPSADT[] = $guiaSPSADT;
        return $this;
    }

    /**
     * isset guiaSPSADT
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuiaSPSADT($index)
    {
        return isset($this->guiaSPSADT[$index]);
    }

    /**
     * unset guiaSPSADT
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuiaSPSADT($index)
    {
        unset($this->guiaSPSADT[$index]);
    }

    /**
     * Gets as guiaSPSADT
     *
     * @return \ans\schemes\CtmSpSadtGuiaType[]
     */
    public function getGuiaSPSADT()
    {
        return $this->guiaSPSADT;
    }

    /**
     * Sets a new guiaSPSADT
     *
     * @param \ans\schemes\CtmSpSadtGuiaType[] $guiaSPSADT
     * @return self
     */
    public function setGuiaSPSADT(array $guiaSPSADT)
    {
        $this->guiaSPSADT = $guiaSPSADT;
        return $this;
    }

    /**
     * Adds as guiaResumoInternacao
     *
     * @return self
     * @param \ans\schemes\CtmInternacaoResumoGuiaType $guiaResumoInternacao
     */
    public function addToGuiaResumoInternacao(\ans\schemes\CtmInternacaoResumoGuiaType $guiaResumoInternacao)
    {
        $this->guiaResumoInternacao[] = $guiaResumoInternacao;
        return $this;
    }

    /**
     * isset guiaResumoInternacao
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuiaResumoInternacao($index)
    {
        return isset($this->guiaResumoInternacao[$index]);
    }

    /**
     * unset guiaResumoInternacao
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuiaResumoInternacao($index)
    {
        unset($this->guiaResumoInternacao[$index]);
    }

    /**
     * Gets as guiaResumoInternacao
     *
     * @return \ans\schemes\CtmInternacaoResumoGuiaType[]
     */
    public function getGuiaResumoInternacao()
    {
        return $this->guiaResumoInternacao;
    }

    /**
     * Sets a new guiaResumoInternacao
     *
     * @param \ans\schemes\CtmInternacaoResumoGuiaType[] $guiaResumoInternacao
     * @return self
     */
    public function setGuiaResumoInternacao(array $guiaResumoInternacao)
    {
        $this->guiaResumoInternacao = $guiaResumoInternacao;
        return $this;
    }

    /**
     * Adds as guiaHonorarioIndividual
     *
     * @return self
     * @param \ans\schemes\CtmHonorarioIndividualGuiaType $guiaHonorarioIndividual
     */
    public function addToGuiaHonorarioIndividual(\ans\schemes\CtmHonorarioIndividualGuiaType $guiaHonorarioIndividual)
    {
        $this->guiaHonorarioIndividual[] = $guiaHonorarioIndividual;
        return $this;
    }

    /**
     * isset guiaHonorarioIndividual
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuiaHonorarioIndividual($index)
    {
        return isset($this->guiaHonorarioIndividual[$index]);
    }

    /**
     * unset guiaHonorarioIndividual
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuiaHonorarioIndividual($index)
    {
        unset($this->guiaHonorarioIndividual[$index]);
    }

    /**
     * Gets as guiaHonorarioIndividual
     *
     * @return \ans\schemes\CtmHonorarioIndividualGuiaType[]
     */
    public function getGuiaHonorarioIndividual()
    {
        return $this->guiaHonorarioIndividual;
    }

    /**
     * Sets a new guiaHonorarioIndividual
     *
     * @param \ans\schemes\CtmHonorarioIndividualGuiaType[] $guiaHonorarioIndividual
     * @return self
     */
    public function setGuiaHonorarioIndividual(array $guiaHonorarioIndividual)
    {
        $this->guiaHonorarioIndividual = $guiaHonorarioIndividual;
        return $this;
    }

    /**
     * Adds as guiaConsulta
     *
     * @return self
     * @param \ans\schemes\CtmConsultaGuiaType $guiaConsulta
     */
    public function addToGuiaConsulta(\ans\schemes\CtmConsultaGuiaType $guiaConsulta)
    {
        $this->guiaConsulta[] = $guiaConsulta;
        return $this;
    }

    /**
     * isset guiaConsulta
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuiaConsulta($index)
    {
        return isset($this->guiaConsulta[$index]);
    }

    /**
     * unset guiaConsulta
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuiaConsulta($index)
    {
        unset($this->guiaConsulta[$index]);
    }

    /**
     * Gets as guiaConsulta
     *
     * @return \ans\schemes\CtmConsultaGuiaType[]
     */
    public function getGuiaConsulta()
    {
        return $this->guiaConsulta;
    }

    /**
     * Sets a new guiaConsulta
     *
     * @param \ans\schemes\CtmConsultaGuiaType[] $guiaConsulta
     * @return self
     */
    public function setGuiaConsulta(array $guiaConsulta)
    {
        $this->guiaConsulta = $guiaConsulta;
        return $this;
    }

    /**
     * Adds as guiaOdonto
     *
     * @return self
     * @param \ans\schemes\CtoGuiaOdontologiaType $guiaOdonto
     */
    public function addToGuiaOdonto(\ans\schemes\CtoGuiaOdontologiaType $guiaOdonto)
    {
        $this->guiaOdonto[] = $guiaOdonto;
        return $this;
    }

    /**
     * isset guiaOdonto
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuiaOdonto($index)
    {
        return isset($this->guiaOdonto[$index]);
    }

    /**
     * unset guiaOdonto
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuiaOdonto($index)
    {
        unset($this->guiaOdonto[$index]);
    }

    /**
     * Gets as guiaOdonto
     *
     * @return \ans\schemes\CtoGuiaOdontologiaType[]
     */
    public function getGuiaOdonto()
    {
        return $this->guiaOdonto;
    }

    /**
     * Sets a new guiaOdonto
     *
     * @param \ans\schemes\CtoGuiaOdontologiaType[] $guiaOdonto
     * @return self
     */
    public function setGuiaOdonto(array $guiaOdonto)
    {
        $this->guiaOdonto = $guiaOdonto;
        return $this;
    }


}

