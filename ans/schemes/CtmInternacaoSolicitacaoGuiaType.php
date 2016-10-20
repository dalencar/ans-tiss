<?php

namespace ans\schemes;

/**
 * Class representing CtmInternacaoSolicitacaoGuiaType
 *
 *
 * XSD Type: ctm_internacaoSolicitacaoGuia
 */
class CtmInternacaoSolicitacaoGuiaType
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
     * @property \ans\schemes\CtBeneficiarioDadosType $dadosBeneficiario
     */
    private $dadosBeneficiario = null;

    /**
     * @property
     * \ans\schemes\CtmInternacaoSolicitacaoGuiaType\IdentificacaoSolicitanteAType
     * $identificacaoSolicitante
     */
    private $identificacaoSolicitante = null;

    /**
     * @property
     * \ans\schemes\CtmInternacaoSolicitacaoGuiaType\DadosHospitalSolicitadoAType
     * $dadosHospitalSolicitado
     */
    private $dadosHospitalSolicitado = null;

    /**
     * @property \ans\schemes\CtmInternacaoSolicitacaoGuiaType\DadosInternacaoAType
     * $dadosInternacao
     */
    private $dadosInternacao = null;

    /**
     * @property
     * \ans\schemes\CtmInternacaoSolicitacaoGuiaType\HipotesesDiagnosticasAType
     * $hipotesesDiagnosticas
     */
    private $hipotesesDiagnosticas = null;

    /**
     * @property
     * \ans\schemes\CtmInternacaoSolicitacaoGuiaType\ProcedimentosSolicitadosAType[]
     * $procedimentosSolicitados
     */
    private $procedimentosSolicitados = null;

    /**
     * @property \DateTime $dataSolicitacao
     */
    private $dataSolicitacao = null;

    /**
     * @property string $observacao
     */
    private $observacao = null;

    /**
     * @property \ans\schemes\CtmInternacaoSolicitacaoGuiaType\AnexoClinicoAType[]
     * $anexoClinico
     */
    private $anexoClinico = null;

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
     * Gets as dadosBeneficiario
     *
     * @return \ans\schemes\CtBeneficiarioDadosType
     */
    public function getDadosBeneficiario()
    {
        return $this->dadosBeneficiario;
    }

    /**
     * Sets a new dadosBeneficiario
     *
     * @param \ans\schemes\CtBeneficiarioDadosType $dadosBeneficiario
     * @return self
     */
    public function setDadosBeneficiario(\ans\schemes\CtBeneficiarioDadosType $dadosBeneficiario)
    {
        $this->dadosBeneficiario = $dadosBeneficiario;
        return $this;
    }

    /**
     * Gets as identificacaoSolicitante
     *
     * @return
     * \ans\schemes\CtmInternacaoSolicitacaoGuiaType\IdentificacaoSolicitanteAType
     */
    public function getIdentificacaoSolicitante()
    {
        return $this->identificacaoSolicitante;
    }

    /**
     * Sets a new identificacaoSolicitante
     *
     * @param
     * \ans\schemes\CtmInternacaoSolicitacaoGuiaType\IdentificacaoSolicitanteAType
     * $identificacaoSolicitante
     * @return self
     */
    public function setIdentificacaoSolicitante(\ans\schemes\CtmInternacaoSolicitacaoGuiaType\IdentificacaoSolicitanteAType $identificacaoSolicitante)
    {
        $this->identificacaoSolicitante = $identificacaoSolicitante;
        return $this;
    }

    /**
     * Gets as dadosHospitalSolicitado
     *
     * @return
     * \ans\schemes\CtmInternacaoSolicitacaoGuiaType\DadosHospitalSolicitadoAType
     */
    public function getDadosHospitalSolicitado()
    {
        return $this->dadosHospitalSolicitado;
    }

    /**
     * Sets a new dadosHospitalSolicitado
     *
     * @param
     * \ans\schemes\CtmInternacaoSolicitacaoGuiaType\DadosHospitalSolicitadoAType
     * $dadosHospitalSolicitado
     * @return self
     */
    public function setDadosHospitalSolicitado(\ans\schemes\CtmInternacaoSolicitacaoGuiaType\DadosHospitalSolicitadoAType $dadosHospitalSolicitado)
    {
        $this->dadosHospitalSolicitado = $dadosHospitalSolicitado;
        return $this;
    }

    /**
     * Gets as dadosInternacao
     *
     * @return \ans\schemes\CtmInternacaoSolicitacaoGuiaType\DadosInternacaoAType
     */
    public function getDadosInternacao()
    {
        return $this->dadosInternacao;
    }

    /**
     * Sets a new dadosInternacao
     *
     * @param \ans\schemes\CtmInternacaoSolicitacaoGuiaType\DadosInternacaoAType
     * $dadosInternacao
     * @return self
     */
    public function setDadosInternacao(\ans\schemes\CtmInternacaoSolicitacaoGuiaType\DadosInternacaoAType $dadosInternacao)
    {
        $this->dadosInternacao = $dadosInternacao;
        return $this;
    }

    /**
     * Gets as hipotesesDiagnosticas
     *
     * @return \ans\schemes\CtmInternacaoSolicitacaoGuiaType\HipotesesDiagnosticasAType
     */
    public function getHipotesesDiagnosticas()
    {
        return $this->hipotesesDiagnosticas;
    }

    /**
     * Sets a new hipotesesDiagnosticas
     *
     * @param \ans\schemes\CtmInternacaoSolicitacaoGuiaType\HipotesesDiagnosticasAType
     * $hipotesesDiagnosticas
     * @return self
     */
    public function setHipotesesDiagnosticas(\ans\schemes\CtmInternacaoSolicitacaoGuiaType\HipotesesDiagnosticasAType $hipotesesDiagnosticas)
    {
        $this->hipotesesDiagnosticas = $hipotesesDiagnosticas;
        return $this;
    }

    /**
     * Adds as procedimentosSolicitados
     *
     * @return self
     * @param
     * \ans\schemes\CtmInternacaoSolicitacaoGuiaType\ProcedimentosSolicitadosAType
     * $procedimentosSolicitados
     */
    public function addToProcedimentosSolicitados(\ans\schemes\CtmInternacaoSolicitacaoGuiaType\ProcedimentosSolicitadosAType $procedimentosSolicitados)
    {
        $this->procedimentosSolicitados[] = $procedimentosSolicitados;
        return $this;
    }

    /**
     * isset procedimentosSolicitados
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProcedimentosSolicitados($index)
    {
        return isset($this->procedimentosSolicitados[$index]);
    }

    /**
     * unset procedimentosSolicitados
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProcedimentosSolicitados($index)
    {
        unset($this->procedimentosSolicitados[$index]);
    }

    /**
     * Gets as procedimentosSolicitados
     *
     * @return
     * \ans\schemes\CtmInternacaoSolicitacaoGuiaType\ProcedimentosSolicitadosAType[]
     */
    public function getProcedimentosSolicitados()
    {
        return $this->procedimentosSolicitados;
    }

    /**
     * Sets a new procedimentosSolicitados
     *
     * @param
     * \ans\schemes\CtmInternacaoSolicitacaoGuiaType\ProcedimentosSolicitadosAType[]
     * $procedimentosSolicitados
     * @return self
     */
    public function setProcedimentosSolicitados(array $procedimentosSolicitados)
    {
        $this->procedimentosSolicitados = $procedimentosSolicitados;
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
     * Adds as anexoClinico
     *
     * @return self
     * @param \ans\schemes\CtmInternacaoSolicitacaoGuiaType\AnexoClinicoAType
     * $anexoClinico
     */
    public function addToAnexoClinico(\ans\schemes\CtmInternacaoSolicitacaoGuiaType\AnexoClinicoAType $anexoClinico)
    {
        $this->anexoClinico[] = $anexoClinico;
        return $this;
    }

    /**
     * isset anexoClinico
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAnexoClinico($index)
    {
        return isset($this->anexoClinico[$index]);
    }

    /**
     * unset anexoClinico
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAnexoClinico($index)
    {
        unset($this->anexoClinico[$index]);
    }

    /**
     * Gets as anexoClinico
     *
     * @return \ans\schemes\CtmInternacaoSolicitacaoGuiaType\AnexoClinicoAType[]
     */
    public function getAnexoClinico()
    {
        return $this->anexoClinico;
    }

    /**
     * Sets a new anexoClinico
     *
     * @param \ans\schemes\CtmInternacaoSolicitacaoGuiaType\AnexoClinicoAType[]
     * $anexoClinico
     * @return self
     */
    public function setAnexoClinico(array $anexoClinico)
    {
        $this->anexoClinico = $anexoClinico;
        return $this;
    }


}

