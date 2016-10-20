<?php

namespace ans\schemes;

/**
 * Class representing CtoOdontoSolicitacaoGuiaType
 *
 *
 * XSD Type: cto_odontoSolicitacaoGuia
 */
class CtoOdontoSolicitacaoGuiaType
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
     * @property string $numeroGuiaPrincipal
     */
    private $numeroGuiaPrincipal = null;

    /**
     * @property string $numeroCarteira
     */
    private $numeroCarteira = null;

    /**
     * @property string $nomeBeneficiario
     */
    private $nomeBeneficiario = null;

    /**
     * @property string $numeroCNS
     */
    private $numeroCNS = null;

    /**
     * @property mixed $identificadorBeneficiario
     */
    private $identificadorBeneficiario = null;

    /**
     * @property string $planoBeneficiario
     */
    private $planoBeneficiario = null;

    /**
     * @property string $nomeEmpresa
     */
    private $nomeEmpresa = null;

    /**
     * @property string $numeroTelefone
     */
    private $numeroTelefone = null;

    /**
     * @property string $nomeTitular
     */
    private $nomeTitular = null;

    /**
     * @property
     * \ans\schemes\CtoOdontoSolicitacaoGuiaType\DadosProfissionaisResponsaveisAType
     * $dadosProfissionaisResponsaveis
     */
    private $dadosProfissionaisResponsaveis = null;

    /**
     * @property
     * \ans\schemes\CtoOdontoSolicitacaoGuiaType\ProcedimentosSolicitadosAType[]
     * $procedimentosSolicitados
     */
    private $procedimentosSolicitados = null;

    /**
     * @property \DateTime $dataTerminoTrat
     */
    private $dataTerminoTrat = null;

    /**
     * @property string $tipoAtendimento
     */
    private $tipoAtendimento = null;

    /**
     * @property float $qtdTotalUS
     */
    private $qtdTotalUS = null;

    /**
     * @property float $valorTotalProc
     */
    private $valorTotalProc = null;

    /**
     * @property float $valorTotalFranquia
     */
    private $valorTotalFranquia = null;

    /**
     * @property string $observacao
     */
    private $observacao = null;

    /**
     * @property \ans\schemes\CtoAnexoSituacaoInicialType $odontoInicial
     */
    private $odontoInicial = null;

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
     * Gets as numeroGuiaPrincipal
     *
     * @return string
     */
    public function getNumeroGuiaPrincipal()
    {
        return $this->numeroGuiaPrincipal;
    }

    /**
     * Sets a new numeroGuiaPrincipal
     *
     * @param string $numeroGuiaPrincipal
     * @return self
     */
    public function setNumeroGuiaPrincipal($numeroGuiaPrincipal)
    {
        $this->numeroGuiaPrincipal = $numeroGuiaPrincipal;
        return $this;
    }

    /**
     * Gets as numeroCarteira
     *
     * @return string
     */
    public function getNumeroCarteira()
    {
        return $this->numeroCarteira;
    }

    /**
     * Sets a new numeroCarteira
     *
     * @param string $numeroCarteira
     * @return self
     */
    public function setNumeroCarteira($numeroCarteira)
    {
        $this->numeroCarteira = $numeroCarteira;
        return $this;
    }

    /**
     * Gets as nomeBeneficiario
     *
     * @return string
     */
    public function getNomeBeneficiario()
    {
        return $this->nomeBeneficiario;
    }

    /**
     * Sets a new nomeBeneficiario
     *
     * @param string $nomeBeneficiario
     * @return self
     */
    public function setNomeBeneficiario($nomeBeneficiario)
    {
        $this->nomeBeneficiario = $nomeBeneficiario;
        return $this;
    }

    /**
     * Gets as numeroCNS
     *
     * @return string
     */
    public function getNumeroCNS()
    {
        return $this->numeroCNS;
    }

    /**
     * Sets a new numeroCNS
     *
     * @param string $numeroCNS
     * @return self
     */
    public function setNumeroCNS($numeroCNS)
    {
        $this->numeroCNS = $numeroCNS;
        return $this;
    }

    /**
     * Gets as identificadorBeneficiario
     *
     * @return mixed
     */
    public function getIdentificadorBeneficiario()
    {
        return $this->identificadorBeneficiario;
    }

    /**
     * Sets a new identificadorBeneficiario
     *
     * @param mixed $identificadorBeneficiario
     * @return self
     */
    public function setIdentificadorBeneficiario($identificadorBeneficiario)
    {
        $this->identificadorBeneficiario = $identificadorBeneficiario;
        return $this;
    }

    /**
     * Gets as planoBeneficiario
     *
     * @return string
     */
    public function getPlanoBeneficiario()
    {
        return $this->planoBeneficiario;
    }

    /**
     * Sets a new planoBeneficiario
     *
     * @param string $planoBeneficiario
     * @return self
     */
    public function setPlanoBeneficiario($planoBeneficiario)
    {
        $this->planoBeneficiario = $planoBeneficiario;
        return $this;
    }

    /**
     * Gets as nomeEmpresa
     *
     * @return string
     */
    public function getNomeEmpresa()
    {
        return $this->nomeEmpresa;
    }

    /**
     * Sets a new nomeEmpresa
     *
     * @param string $nomeEmpresa
     * @return self
     */
    public function setNomeEmpresa($nomeEmpresa)
    {
        $this->nomeEmpresa = $nomeEmpresa;
        return $this;
    }

    /**
     * Gets as numeroTelefone
     *
     * @return string
     */
    public function getNumeroTelefone()
    {
        return $this->numeroTelefone;
    }

    /**
     * Sets a new numeroTelefone
     *
     * @param string $numeroTelefone
     * @return self
     */
    public function setNumeroTelefone($numeroTelefone)
    {
        $this->numeroTelefone = $numeroTelefone;
        return $this;
    }

    /**
     * Gets as nomeTitular
     *
     * @return string
     */
    public function getNomeTitular()
    {
        return $this->nomeTitular;
    }

    /**
     * Sets a new nomeTitular
     *
     * @param string $nomeTitular
     * @return self
     */
    public function setNomeTitular($nomeTitular)
    {
        $this->nomeTitular = $nomeTitular;
        return $this;
    }

    /**
     * Gets as dadosProfissionaisResponsaveis
     *
     * @return
     * \ans\schemes\CtoOdontoSolicitacaoGuiaType\DadosProfissionaisResponsaveisAType
     */
    public function getDadosProfissionaisResponsaveis()
    {
        return $this->dadosProfissionaisResponsaveis;
    }

    /**
     * Sets a new dadosProfissionaisResponsaveis
     *
     * @param
     * \ans\schemes\CtoOdontoSolicitacaoGuiaType\DadosProfissionaisResponsaveisAType
     * $dadosProfissionaisResponsaveis
     * @return self
     */
    public function setDadosProfissionaisResponsaveis(\ans\schemes\CtoOdontoSolicitacaoGuiaType\DadosProfissionaisResponsaveisAType $dadosProfissionaisResponsaveis)
    {
        $this->dadosProfissionaisResponsaveis = $dadosProfissionaisResponsaveis;
        return $this;
    }

    /**
     * Adds as procedimentosSolicitados
     *
     * @return self
     * @param \ans\schemes\CtoOdontoSolicitacaoGuiaType\ProcedimentosSolicitadosAType
     * $procedimentosSolicitados
     */
    public function addToProcedimentosSolicitados(\ans\schemes\CtoOdontoSolicitacaoGuiaType\ProcedimentosSolicitadosAType $procedimentosSolicitados)
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
     * \ans\schemes\CtoOdontoSolicitacaoGuiaType\ProcedimentosSolicitadosAType[]
     */
    public function getProcedimentosSolicitados()
    {
        return $this->procedimentosSolicitados;
    }

    /**
     * Sets a new procedimentosSolicitados
     *
     * @param \ans\schemes\CtoOdontoSolicitacaoGuiaType\ProcedimentosSolicitadosAType[]
     * $procedimentosSolicitados
     * @return self
     */
    public function setProcedimentosSolicitados(array $procedimentosSolicitados)
    {
        $this->procedimentosSolicitados = $procedimentosSolicitados;
        return $this;
    }

    /**
     * Gets as dataTerminoTrat
     *
     * @return \DateTime
     */
    public function getDataTerminoTrat()
    {
        return $this->dataTerminoTrat;
    }

    /**
     * Sets a new dataTerminoTrat
     *
     * @param \DateTime $dataTerminoTrat
     * @return self
     */
    public function setDataTerminoTrat(\DateTime $dataTerminoTrat)
    {
        $this->dataTerminoTrat = $dataTerminoTrat;
        return $this;
    }

    /**
     * Gets as tipoAtendimento
     *
     * @return string
     */
    public function getTipoAtendimento()
    {
        return $this->tipoAtendimento;
    }

    /**
     * Sets a new tipoAtendimento
     *
     * @param string $tipoAtendimento
     * @return self
     */
    public function setTipoAtendimento($tipoAtendimento)
    {
        $this->tipoAtendimento = $tipoAtendimento;
        return $this;
    }

    /**
     * Gets as qtdTotalUS
     *
     * @return float
     */
    public function getQtdTotalUS()
    {
        return $this->qtdTotalUS;
    }

    /**
     * Sets a new qtdTotalUS
     *
     * @param float $qtdTotalUS
     * @return self
     */
    public function setQtdTotalUS($qtdTotalUS)
    {
        $this->qtdTotalUS = $qtdTotalUS;
        return $this;
    }

    /**
     * Gets as valorTotalProc
     *
     * @return float
     */
    public function getValorTotalProc()
    {
        return $this->valorTotalProc;
    }

    /**
     * Sets a new valorTotalProc
     *
     * @param float $valorTotalProc
     * @return self
     */
    public function setValorTotalProc($valorTotalProc)
    {
        $this->valorTotalProc = $valorTotalProc;
        return $this;
    }

    /**
     * Gets as valorTotalFranquia
     *
     * @return float
     */
    public function getValorTotalFranquia()
    {
        return $this->valorTotalFranquia;
    }

    /**
     * Sets a new valorTotalFranquia
     *
     * @param float $valorTotalFranquia
     * @return self
     */
    public function setValorTotalFranquia($valorTotalFranquia)
    {
        $this->valorTotalFranquia = $valorTotalFranquia;
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
     * Gets as odontoInicial
     *
     * @return \ans\schemes\CtoAnexoSituacaoInicialType
     */
    public function getOdontoInicial()
    {
        return $this->odontoInicial;
    }

    /**
     * Sets a new odontoInicial
     *
     * @param \ans\schemes\CtoAnexoSituacaoInicialType $odontoInicial
     * @return self
     */
    public function setOdontoInicial(\ans\schemes\CtoAnexoSituacaoInicialType $odontoInicial)
    {
        $this->odontoInicial = $odontoInicial;
        return $this;
    }


}

