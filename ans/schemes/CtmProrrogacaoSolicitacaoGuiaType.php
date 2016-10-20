<?php

namespace ans\schemes;

/**
 * Class representing CtmProrrogacaoSolicitacaoGuiaType
 *
 *
 * XSD Type: ctm_prorrogacaoSolicitacaoGuia
 */
class CtmProrrogacaoSolicitacaoGuiaType
{

    /**
     * @property string $registroANS
     */
    private $registroANS = null;

    /**
     * @property string $numeroGuiaPrestador
     */
    private $numeroGuiaPrestador = null;

    /**
     * @property string $nrGuiaReferenciada
     */
    private $nrGuiaReferenciada = null;

    /**
     * @property \ans\schemes\CtmProrrogacaoSolicitacaoGuiaType\DadosBeneficiarioAType
     * $dadosBeneficiario
     */
    private $dadosBeneficiario = null;

    /**
     * @property \ans\schemes\CtContratadoDadosType $dadosContratadoSolicitante
     */
    private $dadosContratadoSolicitante = null;

    /**
     * @property \ans\schemes\CtContratadoProfissionalDadosType
     * $dadosProfissionalSolicitante
     */
    private $dadosProfissionalSolicitante = null;

    /**
     * @property \ans\schemes\CtmProrrogacaoSolicitacaoGuiaType\DadosInternacaoAType
     * $dadosInternacao
     */
    private $dadosInternacao = null;

    /**
     * @property
     * \ans\schemes\CtmProrrogacaoSolicitacaoGuiaType\ProcedimentosAdicionaisAType[]
     * $procedimentosAdicionais
     */
    private $procedimentosAdicionais = null;

    /**
     * @property
     * \ans\schemes\CtmProrrogacaoSolicitacaoGuiaType\AnexoClinicoProrrogacaoAType[]
     * $anexoClinicoProrrogacao
     */
    private $anexoClinicoProrrogacao = null;

    /**
     * @property string $observacao
     */
    private $observacao = null;

    /**
     * @property \DateTime $dataSolicitacao
     */
    private $dataSolicitacao = null;

    /**
     * Gets as registroANS
     *
     * @return string
     */
    public function getRegistroANS()
    {
        return $this->registroANS;
    }

    /**
     * Sets a new registroANS
     *
     * @param string $registroANS
     * @return self
     */
    public function setRegistroANS($registroANS)
    {
        $this->registroANS = $registroANS;
        return $this;
    }

    /**
     * Gets as numeroGuiaPrestador
     *
     * @return string
     */
    public function getNumeroGuiaPrestador()
    {
        return $this->numeroGuiaPrestador;
    }

    /**
     * Sets a new numeroGuiaPrestador
     *
     * @param string $numeroGuiaPrestador
     * @return self
     */
    public function setNumeroGuiaPrestador($numeroGuiaPrestador)
    {
        $this->numeroGuiaPrestador = $numeroGuiaPrestador;
        return $this;
    }

    /**
     * Gets as nrGuiaReferenciada
     *
     * @return string
     */
    public function getNrGuiaReferenciada()
    {
        return $this->nrGuiaReferenciada;
    }

    /**
     * Sets a new nrGuiaReferenciada
     *
     * @param string $nrGuiaReferenciada
     * @return self
     */
    public function setNrGuiaReferenciada($nrGuiaReferenciada)
    {
        $this->nrGuiaReferenciada = $nrGuiaReferenciada;
        return $this;
    }

    /**
     * Gets as dadosBeneficiario
     *
     * @return \ans\schemes\CtmProrrogacaoSolicitacaoGuiaType\DadosBeneficiarioAType
     */
    public function getDadosBeneficiario()
    {
        return $this->dadosBeneficiario;
    }

    /**
     * Sets a new dadosBeneficiario
     *
     * @param \ans\schemes\CtmProrrogacaoSolicitacaoGuiaType\DadosBeneficiarioAType
     * $dadosBeneficiario
     * @return self
     */
    public function setDadosBeneficiario(\ans\schemes\CtmProrrogacaoSolicitacaoGuiaType\DadosBeneficiarioAType $dadosBeneficiario)
    {
        $this->dadosBeneficiario = $dadosBeneficiario;
        return $this;
    }

    /**
     * Gets as dadosContratadoSolicitante
     *
     * @return \ans\schemes\CtContratadoDadosType
     */
    public function getDadosContratadoSolicitante()
    {
        return $this->dadosContratadoSolicitante;
    }

    /**
     * Sets a new dadosContratadoSolicitante
     *
     * @param \ans\schemes\CtContratadoDadosType $dadosContratadoSolicitante
     * @return self
     */
    public function setDadosContratadoSolicitante(\ans\schemes\CtContratadoDadosType $dadosContratadoSolicitante)
    {
        $this->dadosContratadoSolicitante = $dadosContratadoSolicitante;
        return $this;
    }

    /**
     * Gets as dadosProfissionalSolicitante
     *
     * @return \ans\schemes\CtContratadoProfissionalDadosType
     */
    public function getDadosProfissionalSolicitante()
    {
        return $this->dadosProfissionalSolicitante;
    }

    /**
     * Sets a new dadosProfissionalSolicitante
     *
     * @param \ans\schemes\CtContratadoProfissionalDadosType
     * $dadosProfissionalSolicitante
     * @return self
     */
    public function setDadosProfissionalSolicitante(\ans\schemes\CtContratadoProfissionalDadosType $dadosProfissionalSolicitante)
    {
        $this->dadosProfissionalSolicitante = $dadosProfissionalSolicitante;
        return $this;
    }

    /**
     * Gets as dadosInternacao
     *
     * @return \ans\schemes\CtmProrrogacaoSolicitacaoGuiaType\DadosInternacaoAType
     */
    public function getDadosInternacao()
    {
        return $this->dadosInternacao;
    }

    /**
     * Sets a new dadosInternacao
     *
     * @param \ans\schemes\CtmProrrogacaoSolicitacaoGuiaType\DadosInternacaoAType
     * $dadosInternacao
     * @return self
     */
    public function setDadosInternacao(\ans\schemes\CtmProrrogacaoSolicitacaoGuiaType\DadosInternacaoAType $dadosInternacao)
    {
        $this->dadosInternacao = $dadosInternacao;
        return $this;
    }

    /**
     * Adds as procedimentosAdicionais
     *
     * @return self
     * @param
     * \ans\schemes\CtmProrrogacaoSolicitacaoGuiaType\ProcedimentosAdicionaisAType
     * $procedimentosAdicionais
     */
    public function addToProcedimentosAdicionais(\ans\schemes\CtmProrrogacaoSolicitacaoGuiaType\ProcedimentosAdicionaisAType $procedimentosAdicionais)
    {
        $this->procedimentosAdicionais[] = $procedimentosAdicionais;
        return $this;
    }

    /**
     * isset procedimentosAdicionais
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProcedimentosAdicionais($index)
    {
        return isset($this->procedimentosAdicionais[$index]);
    }

    /**
     * unset procedimentosAdicionais
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProcedimentosAdicionais($index)
    {
        unset($this->procedimentosAdicionais[$index]);
    }

    /**
     * Gets as procedimentosAdicionais
     *
     * @return
     * \ans\schemes\CtmProrrogacaoSolicitacaoGuiaType\ProcedimentosAdicionaisAType[]
     */
    public function getProcedimentosAdicionais()
    {
        return $this->procedimentosAdicionais;
    }

    /**
     * Sets a new procedimentosAdicionais
     *
     * @param
     * \ans\schemes\CtmProrrogacaoSolicitacaoGuiaType\ProcedimentosAdicionaisAType[]
     * $procedimentosAdicionais
     * @return self
     */
    public function setProcedimentosAdicionais(array $procedimentosAdicionais)
    {
        $this->procedimentosAdicionais = $procedimentosAdicionais;
        return $this;
    }

    /**
     * Adds as anexoClinicoProrrogacao
     *
     * @return self
     * @param
     * \ans\schemes\CtmProrrogacaoSolicitacaoGuiaType\AnexoClinicoProrrogacaoAType
     * $anexoClinicoProrrogacao
     */
    public function addToAnexoClinicoProrrogacao(\ans\schemes\CtmProrrogacaoSolicitacaoGuiaType\AnexoClinicoProrrogacaoAType $anexoClinicoProrrogacao)
    {
        $this->anexoClinicoProrrogacao[] = $anexoClinicoProrrogacao;
        return $this;
    }

    /**
     * isset anexoClinicoProrrogacao
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAnexoClinicoProrrogacao($index)
    {
        return isset($this->anexoClinicoProrrogacao[$index]);
    }

    /**
     * unset anexoClinicoProrrogacao
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAnexoClinicoProrrogacao($index)
    {
        unset($this->anexoClinicoProrrogacao[$index]);
    }

    /**
     * Gets as anexoClinicoProrrogacao
     *
     * @return
     * \ans\schemes\CtmProrrogacaoSolicitacaoGuiaType\AnexoClinicoProrrogacaoAType[]
     */
    public function getAnexoClinicoProrrogacao()
    {
        return $this->anexoClinicoProrrogacao;
    }

    /**
     * Sets a new anexoClinicoProrrogacao
     *
     * @param
     * \ans\schemes\CtmProrrogacaoSolicitacaoGuiaType\AnexoClinicoProrrogacaoAType[]
     * $anexoClinicoProrrogacao
     * @return self
     */
    public function setAnexoClinicoProrrogacao(array $anexoClinicoProrrogacao)
    {
        $this->anexoClinicoProrrogacao = $anexoClinicoProrrogacao;
        return $this;
    }

    /**
     * Gets as observacao
     *
     * @return string
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * Sets a new observacao
     *
     * @param string $observacao
     * @return self
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;
        return $this;
    }

    /**
     * Gets as dataSolicitacao
     *
     * @return \DateTime
     */
    public function getDataSolicitacao()
    {
        return $this->dataSolicitacao;
    }

    /**
     * Sets a new dataSolicitacao
     *
     * @param \DateTime $dataSolicitacao
     * @return self
     */
    public function setDataSolicitacao(\DateTime $dataSolicitacao)
    {
        $this->dataSolicitacao = $dataSolicitacao;
        return $this;
    }


}

