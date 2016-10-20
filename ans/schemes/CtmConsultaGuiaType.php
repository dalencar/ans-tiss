<?php

namespace ans\schemes;

/**
 * Class representing CtmConsultaGuiaType
 *
 *
 * XSD Type: ctm_consultaGuia
 */
class CtmConsultaGuiaType
{

    /**
     * @property \ans\schemes\CtGuiaCabecalhoType $cabecalhoConsulta
     */
    private $cabecalhoConsulta = null;

    /**
     * @property string $numeroGuiaOperadora
     */
    private $numeroGuiaOperadora = null;

    /**
     * @property \ans\schemes\CtBeneficiarioDadosType $dadosBeneficiario
     */
    private $dadosBeneficiario = null;

    /**
     * @property \ans\schemes\CtmConsultaGuiaType\ContratadoExecutanteAType
     * $contratadoExecutante
     */
    private $contratadoExecutante = null;

    /**
     * @property \ans\schemes\CtContratadoProfissionalDadosType $profissionalExecutante
     */
    private $profissionalExecutante = null;

    /**
     * @property string $indicacaoAcidente
     */
    private $indicacaoAcidente = null;

    /**
     * @property \ans\schemes\CtmConsultaAtendimentoType $dadosAtendimento
     */
    private $dadosAtendimento = null;

    /**
     * @property string $observacao
     */
    private $observacao = null;

    /**
     * @property \ans\schemes\AssinaturaDigitalType $assinaturaDigital
     */
    private $assinaturaDigital = null;

    /**
     * Gets as cabecalhoConsulta
     *
     * @return \ans\schemes\CtGuiaCabecalhoType
     */
    public function getCabecalhoConsulta()
    {
        return $this->cabecalhoConsulta;
    }

    /**
     * Sets a new cabecalhoConsulta
     *
     * @param \ans\schemes\CtGuiaCabecalhoType $cabecalhoConsulta
     * @return self
     */
    public function setCabecalhoConsulta(\ans\schemes\CtGuiaCabecalhoType $cabecalhoConsulta)
    {
        $this->cabecalhoConsulta = $cabecalhoConsulta;
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
     * Gets as contratadoExecutante
     *
     * @return \ans\schemes\CtmConsultaGuiaType\ContratadoExecutanteAType
     */
    public function getContratadoExecutante()
    {
        return $this->contratadoExecutante;
    }

    /**
     * Sets a new contratadoExecutante
     *
     * @param \ans\schemes\CtmConsultaGuiaType\ContratadoExecutanteAType
     * $contratadoExecutante
     * @return self
     */
    public function setContratadoExecutante(\ans\schemes\CtmConsultaGuiaType\ContratadoExecutanteAType $contratadoExecutante)
    {
        $this->contratadoExecutante = $contratadoExecutante;
        return $this;
    }

    /**
     * Gets as profissionalExecutante
     *
     * @return \ans\schemes\CtContratadoProfissionalDadosType
     */
    public function getProfissionalExecutante()
    {
        return $this->profissionalExecutante;
    }

    /**
     * Sets a new profissionalExecutante
     *
     * @param \ans\schemes\CtContratadoProfissionalDadosType $profissionalExecutante
     * @return self
     */
    public function setProfissionalExecutante(\ans\schemes\CtContratadoProfissionalDadosType $profissionalExecutante)
    {
        $this->profissionalExecutante = $profissionalExecutante;
        return $this;
    }

    /**
     * Gets as indicacaoAcidente
     *
     * @return string
     */
    public function getIndicacaoAcidente()
    {
        return $this->indicacaoAcidente;
    }

    /**
     * Sets a new indicacaoAcidente
     *
     * @param string $indicacaoAcidente
     * @return self
     */
    public function setIndicacaoAcidente($indicacaoAcidente)
    {
        $this->indicacaoAcidente = $indicacaoAcidente;
        return $this;
    }

    /**
     * Gets as dadosAtendimento
     *
     * @return \ans\schemes\CtmConsultaAtendimentoType
     */
    public function getDadosAtendimento()
    {
        return $this->dadosAtendimento;
    }

    /**
     * Sets a new dadosAtendimento
     *
     * @param \ans\schemes\CtmConsultaAtendimentoType $dadosAtendimento
     * @return self
     */
    public function setDadosAtendimento(\ans\schemes\CtmConsultaAtendimentoType $dadosAtendimento)
    {
        $this->dadosAtendimento = $dadosAtendimento;
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

