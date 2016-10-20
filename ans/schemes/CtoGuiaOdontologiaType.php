<?php

namespace ans\schemes;

/**
 * Class representing CtoGuiaOdontologiaType
 *
 *
 * XSD Type: cto_guiaOdontologia
 */
class CtoGuiaOdontologiaType
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
     * @property \DateTime $dataAutorizacao
     */
    private $dataAutorizacao = null;

    /**
     * @property string $senhaAutorizacao
     */
    private $senhaAutorizacao = null;

    /**
     * @property \DateTime $validadeSenha
     */
    private $validadeSenha = null;

    /**
     * @property string $numeroGuiaOperadora
     */
    private $numeroGuiaOperadora = null;

    /**
     * @property \ans\schemes\CtBeneficiarioDadosType $dadosBeneficiario
     */
    private $dadosBeneficiario = null;

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
     * \ans\schemes\CtoGuiaOdontologiaType\DadosProfissionaisResponsaveisAType
     * $dadosProfissionaisResponsaveis
     */
    private $dadosProfissionaisResponsaveis = null;

    /**
     * @property \ans\schemes\CtoGuiaOdontologiaType\ProcedimentosExecutadosAType[]
     * $procedimentosExecutados
     */
    private $procedimentosExecutados = null;

    /**
     * @property \DateTime $dataTerminoTrat
     */
    private $dataTerminoTrat = null;

    /**
     * @property string $tipoAtendimento
     */
    private $tipoAtendimento = null;

    /**
     * @property string $tipoFaturamento
     */
    private $tipoFaturamento = null;

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
     * @property \ans\schemes\CtoAnexoSituacaoInicialnaGTOType $odontoInicial
     */
    private $odontoInicial = null;

    /**
     * @property \ans\schemes\AssinaturaDigitalType $assinaturaDigital
     */
    private $assinaturaDigital = null;

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
     * Gets as dataAutorizacao
     *
     * @return \DateTime
     */
    public function getDataAutorizacao()
    {
        return $this->dataAutorizacao;
    }

    /**
     * Sets a new dataAutorizacao
     *
     * @param \DateTime $dataAutorizacao
     * @return self
     */
    public function setDataAutorizacao(\DateTime $dataAutorizacao)
    {
        $this->dataAutorizacao = $dataAutorizacao;
        return $this;
    }

    /**
     * Gets as senhaAutorizacao
     *
     * @return string
     */
    public function getSenhaAutorizacao()
    {
        return $this->senhaAutorizacao;
    }

    /**
     * Sets a new senhaAutorizacao
     *
     * @param string $senhaAutorizacao
     * @return self
     */
    public function setSenhaAutorizacao($senhaAutorizacao)
    {
        $this->senhaAutorizacao = $senhaAutorizacao;
        return $this;
    }

    /**
     * Gets as validadeSenha
     *
     * @return \DateTime
     */
    public function getValidadeSenha()
    {
        return $this->validadeSenha;
    }

    /**
     * Sets a new validadeSenha
     *
     * @param \DateTime $validadeSenha
     * @return self
     */
    public function setValidadeSenha(\DateTime $validadeSenha)
    {
        $this->validadeSenha = $validadeSenha;
        return $this;
    }

    /**
     * Gets as numeroGuiaOperadora
     *
     * @return string
     */
    public function getNumeroGuiaOperadora()
    {
        return $this->numeroGuiaOperadora;
    }

    /**
     * Sets a new numeroGuiaOperadora
     *
     * @param string $numeroGuiaOperadora
     * @return self
     */
    public function setNumeroGuiaOperadora($numeroGuiaOperadora)
    {
        $this->numeroGuiaOperadora = $numeroGuiaOperadora;
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
     * @return \ans\schemes\CtoGuiaOdontologiaType\DadosProfissionaisResponsaveisAType
     */
    public function getDadosProfissionaisResponsaveis()
    {
        return $this->dadosProfissionaisResponsaveis;
    }

    /**
     * Sets a new dadosProfissionaisResponsaveis
     *
     * @param \ans\schemes\CtoGuiaOdontologiaType\DadosProfissionaisResponsaveisAType
     * $dadosProfissionaisResponsaveis
     * @return self
     */
    public function setDadosProfissionaisResponsaveis(\ans\schemes\CtoGuiaOdontologiaType\DadosProfissionaisResponsaveisAType $dadosProfissionaisResponsaveis)
    {
        $this->dadosProfissionaisResponsaveis = $dadosProfissionaisResponsaveis;
        return $this;
    }

    /**
     * Adds as procedimentosExecutados
     *
     * @return self
     * @param \ans\schemes\CtoGuiaOdontologiaType\ProcedimentosExecutadosAType
     * $procedimentosExecutados
     */
    public function addToProcedimentosExecutados(\ans\schemes\CtoGuiaOdontologiaType\ProcedimentosExecutadosAType $procedimentosExecutados)
    {
        $this->procedimentosExecutados[] = $procedimentosExecutados;
        return $this;
    }

    /**
     * isset procedimentosExecutados
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProcedimentosExecutados($index)
    {
        return isset($this->procedimentosExecutados[$index]);
    }

    /**
     * unset procedimentosExecutados
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProcedimentosExecutados($index)
    {
        unset($this->procedimentosExecutados[$index]);
    }

    /**
     * Gets as procedimentosExecutados
     *
     * @return \ans\schemes\CtoGuiaOdontologiaType\ProcedimentosExecutadosAType[]
     */
    public function getProcedimentosExecutados()
    {
        return $this->procedimentosExecutados;
    }

    /**
     * Sets a new procedimentosExecutados
     *
     * @param \ans\schemes\CtoGuiaOdontologiaType\ProcedimentosExecutadosAType[]
     * $procedimentosExecutados
     * @return self
     */
    public function setProcedimentosExecutados(array $procedimentosExecutados)
    {
        $this->procedimentosExecutados = $procedimentosExecutados;
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
     * Gets as tipoFaturamento
     *
     * @return string
     */
    public function getTipoFaturamento()
    {
        return $this->tipoFaturamento;
    }

    /**
     * Sets a new tipoFaturamento
     *
     * @param string $tipoFaturamento
     * @return self
     */
    public function setTipoFaturamento($tipoFaturamento)
    {
        $this->tipoFaturamento = $tipoFaturamento;
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
     * @return \ans\schemes\CtoAnexoSituacaoInicialnaGTOType
     */
    public function getOdontoInicial()
    {
        return $this->odontoInicial;
    }

    /**
     * Sets a new odontoInicial
     *
     * @param \ans\schemes\CtoAnexoSituacaoInicialnaGTOType $odontoInicial
     * @return self
     */
    public function setOdontoInicial(\ans\schemes\CtoAnexoSituacaoInicialnaGTOType $odontoInicial)
    {
        $this->odontoInicial = $odontoInicial;
        return $this;
    }

    /**
     * Gets as assinaturaDigital
     *
     * @return \ans\schemes\AssinaturaDigitalType
     */
    public function getAssinaturaDigital()
    {
        return $this->assinaturaDigital;
    }

    /**
     * Sets a new assinaturaDigital
     *
     * @param \ans\schemes\AssinaturaDigitalType $assinaturaDigital
     * @return self
     */
    public function setAssinaturaDigital(\ans\schemes\AssinaturaDigitalType $assinaturaDigital)
    {
        $this->assinaturaDigital = $assinaturaDigital;
        return $this;
    }


}

