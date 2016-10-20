<?php

namespace ans\schemes;

/**
 * Class representing CtmHonorarioIndividualGuiaType
 *
 *
 * XSD Type: ctm_honorarioIndividualGuia
 */
class CtmHonorarioIndividualGuiaType
{

    /**
     * @property \ans\schemes\CtGuiaCabecalhoType $cabecalhoGuia
     */
    private $cabecalhoGuia = null;

    /**
     * @property string $guiaSolicInternacao
     */
    private $guiaSolicInternacao = null;

    /**
     * @property string $senha
     */
    private $senha = null;

    /**
     * @property string $numeroGuiaOperadora
     */
    private $numeroGuiaOperadora = null;

    /**
     * @property string $numeroCarteira
     */
    private $numeroCarteira = null;

    /**
     * @property string $nomeBeneficiario
     */
    private $nomeBeneficiario = null;

    /**
     * @property string $atendimentoRN
     */
    private $atendimentoRN = null;

    /**
     * @property \ans\schemes\CtmHonorarioIndividualGuiaType\LocalContratadoAType
     * $localContratado
     */
    private $localContratado = null;

    /**
     * @property
     * \ans\schemes\CtmHonorarioIndividualGuiaType\DadosContratadoExecutanteAType
     * $dadosContratadoExecutante
     */
    private $dadosContratadoExecutante = null;

    /**
     * @property \ans\schemes\CtmHonorarioIndividualGuiaType\DadosInternacaoAType
     * $dadosInternacao
     */
    private $dadosInternacao = null;

    /**
     * @property \ans\schemes\CtProcedimentoExecutadoHonorIndivType[]
     * $procedimentosRealizados
     */
    private $procedimentosRealizados = null;

    /**
     * @property string $observacao
     */
    private $observacao = null;

    /**
     * @property float $valorTotalHonorarios
     */
    private $valorTotalHonorarios = null;

    /**
     * @property \DateTime $dataEmissaoGuia
     */
    private $dataEmissaoGuia = null;

    /**
     * @property \ans\schemes\AssinaturaDigitalType $assinaturaDigital
     */
    private $assinaturaDigital = null;

    /**
     * Gets as cabecalhoGuia
     *
     * @return \ans\schemes\CtGuiaCabecalhoType
     */
    public function getCabecalhoGuia()
    {
        return $this->cabecalhoGuia;
    }

    /**
     * Sets a new cabecalhoGuia
     *
     * @param \ans\schemes\CtGuiaCabecalhoType $cabecalhoGuia
     * @return self
     */
    public function setCabecalhoGuia(\ans\schemes\CtGuiaCabecalhoType $cabecalhoGuia)
    {
        $this->cabecalhoGuia = $cabecalhoGuia;
        return $this;
    }

    /**
     * Gets as guiaSolicInternacao
     *
     * @return string
     */
    public function getGuiaSolicInternacao()
    {
        return $this->guiaSolicInternacao;
    }

    /**
     * Sets a new guiaSolicInternacao
     *
     * @param string $guiaSolicInternacao
     * @return self
     */
    public function setGuiaSolicInternacao($guiaSolicInternacao)
    {
        $this->guiaSolicInternacao = $guiaSolicInternacao;
        return $this;
    }

    /**
     * Gets as senha
     *
     * @return string
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Sets a new senha
     *
     * @param string $senha
     * @return self
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
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
     * Gets as atendimentoRN
     *
     * @return string
     */
    public function getAtendimentoRN()
    {
        return $this->atendimentoRN;
    }

    /**
     * Sets a new atendimentoRN
     *
     * @param string $atendimentoRN
     * @return self
     */
    public function setAtendimentoRN($atendimentoRN)
    {
        $this->atendimentoRN = $atendimentoRN;
        return $this;
    }

    /**
     * Gets as localContratado
     *
     * @return \ans\schemes\CtmHonorarioIndividualGuiaType\LocalContratadoAType
     */
    public function getLocalContratado()
    {
        return $this->localContratado;
    }

    /**
     * Sets a new localContratado
     *
     * @param \ans\schemes\CtmHonorarioIndividualGuiaType\LocalContratadoAType
     * $localContratado
     * @return self
     */
    public function setLocalContratado(\ans\schemes\CtmHonorarioIndividualGuiaType\LocalContratadoAType $localContratado)
    {
        $this->localContratado = $localContratado;
        return $this;
    }

    /**
     * Gets as dadosContratadoExecutante
     *
     * @return
     * \ans\schemes\CtmHonorarioIndividualGuiaType\DadosContratadoExecutanteAType
     */
    public function getDadosContratadoExecutante()
    {
        return $this->dadosContratadoExecutante;
    }

    /**
     * Sets a new dadosContratadoExecutante
     *
     * @param
     * \ans\schemes\CtmHonorarioIndividualGuiaType\DadosContratadoExecutanteAType
     * $dadosContratadoExecutante
     * @return self
     */
    public function setDadosContratadoExecutante(\ans\schemes\CtmHonorarioIndividualGuiaType\DadosContratadoExecutanteAType $dadosContratadoExecutante)
    {
        $this->dadosContratadoExecutante = $dadosContratadoExecutante;
        return $this;
    }

    /**
     * Gets as dadosInternacao
     *
     * @return \ans\schemes\CtmHonorarioIndividualGuiaType\DadosInternacaoAType
     */
    public function getDadosInternacao()
    {
        return $this->dadosInternacao;
    }

    /**
     * Sets a new dadosInternacao
     *
     * @param \ans\schemes\CtmHonorarioIndividualGuiaType\DadosInternacaoAType
     * $dadosInternacao
     * @return self
     */
    public function setDadosInternacao(\ans\schemes\CtmHonorarioIndividualGuiaType\DadosInternacaoAType $dadosInternacao)
    {
        $this->dadosInternacao = $dadosInternacao;
        return $this;
    }

    /**
     * Adds as procedimentoRealizado
     *
     * @return self
     * @param \ans\schemes\CtProcedimentoExecutadoHonorIndivType $procedimentoRealizado
     */
    public function addToProcedimentosRealizados(\ans\schemes\CtProcedimentoExecutadoHonorIndivType $procedimentoRealizado)
    {
        $this->procedimentosRealizados[] = $procedimentoRealizado;
        return $this;
    }

    /**
     * isset procedimentosRealizados
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProcedimentosRealizados($index)
    {
        return isset($this->procedimentosRealizados[$index]);
    }

    /**
     * unset procedimentosRealizados
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProcedimentosRealizados($index)
    {
        unset($this->procedimentosRealizados[$index]);
    }

    /**
     * Gets as procedimentosRealizados
     *
     * @return \ans\schemes\CtProcedimentoExecutadoHonorIndivType[]
     */
    public function getProcedimentosRealizados()
    {
        return $this->procedimentosRealizados;
    }

    /**
     * Sets a new procedimentosRealizados
     *
     * @param \ans\schemes\CtProcedimentoExecutadoHonorIndivType[]
     * $procedimentosRealizados
     * @return self
     */
    public function setProcedimentosRealizados(array $procedimentosRealizados)
    {
        $this->procedimentosRealizados = $procedimentosRealizados;
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
     * Gets as valorTotalHonorarios
     *
     * @return float
     */
    public function getValorTotalHonorarios()
    {
        return $this->valorTotalHonorarios;
    }

    /**
     * Sets a new valorTotalHonorarios
     *
     * @param float $valorTotalHonorarios
     * @return self
     */
    public function setValorTotalHonorarios($valorTotalHonorarios)
    {
        $this->valorTotalHonorarios = $valorTotalHonorarios;
        return $this;
    }

    /**
     * Gets as dataEmissaoGuia
     *
     * @return \DateTime
     */
    public function getDataEmissaoGuia()
    {
        return $this->dataEmissaoGuia;
    }

    /**
     * Sets a new dataEmissaoGuia
     *
     * @param \DateTime $dataEmissaoGuia
     * @return self
     */
    public function setDataEmissaoGuia(\DateTime $dataEmissaoGuia)
    {
        $this->dataEmissaoGuia = $dataEmissaoGuia;
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

