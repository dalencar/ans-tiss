<?php

namespace ans\schemes;

/**
 * Class representing CtmSpSadtSolicitacaoGuiaType
 *
 *
 * XSD Type: ctm_sp-sadtSolicitacaoGuia
 */
class CtmSpSadtSolicitacaoGuiaType
{

    /**
     * @property \ans\schemes\CtGuiaCabecalhoType $cabecalhoSolicitacao
     */
    private $cabecalhoSolicitacao = null;

    /**
     * @property string $numeroGuiaPrincipal
     */
    private $numeroGuiaPrincipal = null;

    /**
     * @property \ans\schemes\CtBeneficiarioDadosType $dadosBeneficiario
     */
    private $dadosBeneficiario = null;

    /**
     * @property \ans\schemes\CtmSpSadtSolicitacaoGuiaType\DadosSolicitanteAType
     * $dadosSolicitante
     */
    private $dadosSolicitante = null;

    /**
     * @property \DateTime $dataSolicitacao
     */
    private $dataSolicitacao = null;

    /**
     * @property string $caraterAtendimento
     */
    private $caraterAtendimento = null;

    /**
     * @property string $indicacaoClinica
     */
    private $indicacaoClinica = null;

    /**
     * @property
     * \ans\schemes\CtmSpSadtSolicitacaoGuiaType\ProcedimentosSolicitadosAType[]
     * $procedimentosSolicitados
     */
    private $procedimentosSolicitados = null;

    /**
     * @property \ans\schemes\CtmSpSadtSolicitacaoGuiaType\DadosExecutanteAType
     * $dadosExecutante
     */
    private $dadosExecutante = null;

    /**
     * @property \ans\schemes\CtmSpSadtSolicitacaoGuiaType\AnexoClinicoAType[]
     * $anexoClinico
     */
    private $anexoClinico = null;

    /**
     * @property string $observacao
     */
    private $observacao = null;

    /**
     * Gets as cabecalhoSolicitacao
     *
     * @return \ans\schemes\CtGuiaCabecalhoType
     */
    public function getCabecalhoSolicitacao()
    {
        return $this->cabecalhoSolicitacao;
    }

    /**
     * Sets a new cabecalhoSolicitacao
     *
     * @param \ans\schemes\CtGuiaCabecalhoType $cabecalhoSolicitacao
     * @return self
     */
    public function setCabecalhoSolicitacao(\ans\schemes\CtGuiaCabecalhoType $cabecalhoSolicitacao)
    {
        $this->cabecalhoSolicitacao = $cabecalhoSolicitacao;
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
     * Gets as dadosSolicitante
     *
     * @return \ans\schemes\CtmSpSadtSolicitacaoGuiaType\DadosSolicitanteAType
     */
    public function getDadosSolicitante()
    {
        return $this->dadosSolicitante;
    }

    /**
     * Sets a new dadosSolicitante
     *
     * @param \ans\schemes\CtmSpSadtSolicitacaoGuiaType\DadosSolicitanteAType
     * $dadosSolicitante
     * @return self
     */
    public function setDadosSolicitante(\ans\schemes\CtmSpSadtSolicitacaoGuiaType\DadosSolicitanteAType $dadosSolicitante)
    {
        $this->dadosSolicitante = $dadosSolicitante;
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
     * Gets as caraterAtendimento
     *
     * @return string
     */
    public function getCaraterAtendimento()
    {
        return $this->caraterAtendimento;
    }

    /**
     * Sets a new caraterAtendimento
     *
     * @param string $caraterAtendimento
     * @return self
     */
    public function setCaraterAtendimento($caraterAtendimento)
    {
        $this->caraterAtendimento = $caraterAtendimento;
        return $this;
    }

    /**
     * Gets as indicacaoClinica
     *
     * @return string
     */
    public function getIndicacaoClinica()
    {
        return $this->indicacaoClinica;
    }

    /**
     * Sets a new indicacaoClinica
     *
     * @param string $indicacaoClinica
     * @return self
     */
    public function setIndicacaoClinica($indicacaoClinica)
    {
        $this->indicacaoClinica = $indicacaoClinica;
        return $this;
    }

    /**
     * Adds as procedimentosSolicitados
     *
     * @return self
     * @param \ans\schemes\CtmSpSadtSolicitacaoGuiaType\ProcedimentosSolicitadosAType
     * $procedimentosSolicitados
     */
    public function addToProcedimentosSolicitados(\ans\schemes\CtmSpSadtSolicitacaoGuiaType\ProcedimentosSolicitadosAType $procedimentosSolicitados)
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
     * \ans\schemes\CtmSpSadtSolicitacaoGuiaType\ProcedimentosSolicitadosAType[]
     */
    public function getProcedimentosSolicitados()
    {
        return $this->procedimentosSolicitados;
    }

    /**
     * Sets a new procedimentosSolicitados
     *
     * @param \ans\schemes\CtmSpSadtSolicitacaoGuiaType\ProcedimentosSolicitadosAType[]
     * $procedimentosSolicitados
     * @return self
     */
    public function setProcedimentosSolicitados(array $procedimentosSolicitados)
    {
        $this->procedimentosSolicitados = $procedimentosSolicitados;
        return $this;
    }

    /**
     * Gets as dadosExecutante
     *
     * @return \ans\schemes\CtmSpSadtSolicitacaoGuiaType\DadosExecutanteAType
     */
    public function getDadosExecutante()
    {
        return $this->dadosExecutante;
    }

    /**
     * Sets a new dadosExecutante
     *
     * @param \ans\schemes\CtmSpSadtSolicitacaoGuiaType\DadosExecutanteAType
     * $dadosExecutante
     * @return self
     */
    public function setDadosExecutante(\ans\schemes\CtmSpSadtSolicitacaoGuiaType\DadosExecutanteAType $dadosExecutante)
    {
        $this->dadosExecutante = $dadosExecutante;
        return $this;
    }

    /**
     * Adds as anexoClinico
     *
     * @return self
     * @param \ans\schemes\CtmSpSadtSolicitacaoGuiaType\AnexoClinicoAType $anexoClinico
     */
    public function addToAnexoClinico(\ans\schemes\CtmSpSadtSolicitacaoGuiaType\AnexoClinicoAType $anexoClinico)
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
     * @return \ans\schemes\CtmSpSadtSolicitacaoGuiaType\AnexoClinicoAType[]
     */
    public function getAnexoClinico()
    {
        return $this->anexoClinico;
    }

    /**
     * Sets a new anexoClinico
     *
     * @param \ans\schemes\CtmSpSadtSolicitacaoGuiaType\AnexoClinicoAType[]
     * $anexoClinico
     * @return self
     */
    public function setAnexoClinico(array $anexoClinico)
    {
        $this->anexoClinico = $anexoClinico;
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


}

