<?php

namespace ans\schemes\OperadoraPrestadorType\DemonstrativosRetornoAType;

/**
 * Class representing SituacaoDemonstrativoAType
 */
class SituacaoDemonstrativoAType
{

    /**
     * @property string $identificacaoOperadora
     */
    private $identificacaoOperadora = null;

    /**
     * @property \ans\schemes\CtContratadoDadosType $dadosPrestador
     */
    private $dadosPrestador = null;

    /**
     * @property
     * \ans\schemes\OperadoraPrestadorType\DemonstrativosRetornoAType\SituacaoDemonstrativoAType\PeriodoAType
     * $periodo
     */
    private $periodo = null;

    /**
     * @property string $numeroProtocolo
     */
    private $numeroProtocolo = null;

    /**
     * @property string $protocoloSolicitacaoDemonstrativo
     */
    private $protocoloSolicitacaoDemonstrativo = null;

    /**
     * @property string $tipoDemonstrativo
     */
    private $tipoDemonstrativo = null;

    /**
     * @property \DateTime $dataSituacaoDemonstrativo
     */
    private $dataSituacaoDemonstrativo = null;

    /**
     * @property string $situacaoDemonstrativo
     */
    private $situacaoDemonstrativo = null;

    /**
     * Gets as identificacaoOperadora
     *
     * @return string
     */
    public function getIdentificacaoOperadora()
    {
        return $this->identificacaoOperadora;
    }

    /**
     * Sets a new identificacaoOperadora
     *
     * @param string $identificacaoOperadora
     * @return self
     */
    public function setIdentificacaoOperadora($identificacaoOperadora)
    {
        $this->identificacaoOperadora = $identificacaoOperadora;
        return $this;
    }

    /**
     * Gets as dadosPrestador
     *
     * @return \ans\schemes\CtContratadoDadosType
     */
    public function getDadosPrestador()
    {
        return $this->dadosPrestador;
    }

    /**
     * Sets a new dadosPrestador
     *
     * @param \ans\schemes\CtContratadoDadosType $dadosPrestador
     * @return self
     */
    public function setDadosPrestador(\ans\schemes\CtContratadoDadosType $dadosPrestador)
    {
        $this->dadosPrestador = $dadosPrestador;
        return $this;
    }

    /**
     * Gets as periodo
     *
     * @return
     * \ans\schemes\OperadoraPrestadorType\DemonstrativosRetornoAType\SituacaoDemonstrativoAType\PeriodoAType
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * Sets a new periodo
     *
     * @param
     * \ans\schemes\OperadoraPrestadorType\DemonstrativosRetornoAType\SituacaoDemonstrativoAType\PeriodoAType
     * $periodo
     * @return self
     */
    public function setPeriodo(\ans\schemes\OperadoraPrestadorType\DemonstrativosRetornoAType\SituacaoDemonstrativoAType\PeriodoAType $periodo)
    {
        $this->periodo = $periodo;
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
     * Gets as protocoloSolicitacaoDemonstrativo
     *
     * @return string
     */
    public function getProtocoloSolicitacaoDemonstrativo()
    {
        return $this->protocoloSolicitacaoDemonstrativo;
    }

    /**
     * Sets a new protocoloSolicitacaoDemonstrativo
     *
     * @param string $protocoloSolicitacaoDemonstrativo
     * @return self
     */
    public function setProtocoloSolicitacaoDemonstrativo($protocoloSolicitacaoDemonstrativo)
    {
        $this->protocoloSolicitacaoDemonstrativo = $protocoloSolicitacaoDemonstrativo;
        return $this;
    }

    /**
     * Gets as tipoDemonstrativo
     *
     * @return string
     */
    public function getTipoDemonstrativo()
    {
        return $this->tipoDemonstrativo;
    }

    /**
     * Sets a new tipoDemonstrativo
     *
     * @param string $tipoDemonstrativo
     * @return self
     */
    public function setTipoDemonstrativo($tipoDemonstrativo)
    {
        $this->tipoDemonstrativo = $tipoDemonstrativo;
        return $this;
    }

    /**
     * Gets as dataSituacaoDemonstrativo
     *
     * @return \DateTime
     */
    public function getDataSituacaoDemonstrativo()
    {
        return $this->dataSituacaoDemonstrativo;
    }

    /**
     * Sets a new dataSituacaoDemonstrativo
     *
     * @param \DateTime $dataSituacaoDemonstrativo
     * @return self
     */
    public function setDataSituacaoDemonstrativo(\DateTime $dataSituacaoDemonstrativo)
    {
        $this->dataSituacaoDemonstrativo = $dataSituacaoDemonstrativo;
        return $this;
    }

    /**
     * Gets as situacaoDemonstrativo
     *
     * @return string
     */
    public function getSituacaoDemonstrativo()
    {
        return $this->situacaoDemonstrativo;
    }

    /**
     * Sets a new situacaoDemonstrativo
     *
     * @param string $situacaoDemonstrativo
     * @return self
     */
    public function setSituacaoDemonstrativo($situacaoDemonstrativo)
    {
        $this->situacaoDemonstrativo = $situacaoDemonstrativo;
        return $this;
    }


}

