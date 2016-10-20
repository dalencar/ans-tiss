<?php

namespace ans\schemes\CtmInternacaoSolicitacaoGuiaType;

/**
 * Class representing DadosHospitalSolicitadoAType
 */
class DadosHospitalSolicitadoAType
{

    /**
     * @property string $codigoIndicadonaOperadora
     */
    private $codigoIndicadonaOperadora = null;

    /**
     * @property string $nomeContratadoIndicado
     */
    private $nomeContratadoIndicado = null;

    /**
     * @property \DateTime $dataSugeridaInternacao
     */
    private $dataSugeridaInternacao = null;

    /**
     * Gets as codigoIndicadonaOperadora
     *
     * @return string
     */
    public function getCodigoIndicadonaOperadora()
    {
        return $this->codigoIndicadonaOperadora;
    }

    /**
     * Sets a new codigoIndicadonaOperadora
     *
     * @param string $codigoIndicadonaOperadora
     * @return self
     */
    public function setCodigoIndicadonaOperadora($codigoIndicadonaOperadora)
    {
        $this->codigoIndicadonaOperadora = $codigoIndicadonaOperadora;
        return $this;
    }

    /**
     * Gets as nomeContratadoIndicado
     *
     * @return string
     */
    public function getNomeContratadoIndicado()
    {
        return $this->nomeContratadoIndicado;
    }

    /**
     * Sets a new nomeContratadoIndicado
     *
     * @param string $nomeContratadoIndicado
     * @return self
     */
    public function setNomeContratadoIndicado($nomeContratadoIndicado)
    {
        $this->nomeContratadoIndicado = $nomeContratadoIndicado;
        return $this;
    }

    /**
     * Gets as dataSugeridaInternacao
     *
     * @return \DateTime
     */
    public function getDataSugeridaInternacao()
    {
        return $this->dataSugeridaInternacao;
    }

    /**
     * Sets a new dataSugeridaInternacao
     *
     * @param \DateTime $dataSugeridaInternacao
     * @return self
     */
    public function setDataSugeridaInternacao(\DateTime $dataSugeridaInternacao)
    {
        $this->dataSugeridaInternacao = $dataSugeridaInternacao;
        return $this;
    }


}

