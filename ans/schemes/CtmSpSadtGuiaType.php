<?php

namespace ans\schemes;

/**
 * Class representing CtmSpSadtGuiaType
 *
 *
 * XSD Type: ctm_sp-sadtGuia
 */
class CtmSpSadtGuiaType
{

    /**
     * @property \ans\schemes\CtmSpSadtGuiaType\CabecalhoGuiaAType $cabecalhoGuia
     */
    private $cabecalhoGuia = null;

    /**
     * @property \ans\schemes\CtAutorizacaoSADTType $dadosAutorizacao
     */
    private $dadosAutorizacao = null;

    /**
     * @property \ans\schemes\CtBeneficiarioDadosType $dadosBeneficiario
     */
    private $dadosBeneficiario = null;

    /**
     * @property \ans\schemes\CtmSpSadtGuiaType\DadosSolicitanteAType $dadosSolicitante
     */
    private $dadosSolicitante = null;

    /**
     * @property \ans\schemes\CtmSpSadtGuiaType\DadosSolicitacaoAType $dadosSolicitacao
     */
    private $dadosSolicitacao = null;

    /**
     * @property \ans\schemes\CtmSpSadtGuiaType\DadosExecutanteAType $dadosExecutante
     */
    private $dadosExecutante = null;

    /**
     * @property \ans\schemes\CtmSpSadtAtendimentoType $dadosAtendimento
     */
    private $dadosAtendimento = null;

    /**
     * @property \ans\schemes\CtProcedimentoExecutadoSadtType[]
     * $procedimentosExecutados
     */
    private $procedimentosExecutados = null;

    /**
     * @property \ans\schemes\CtOutrasDespesasType\DespesaAType[] $outrasDespesas
     */
    private $outrasDespesas = null;

    /**
     * @property string $observacao
     */
    private $observacao = null;

    /**
     * @property \ans\schemes\CtGuiaValorTotalType $valorTotal
     */
    private $valorTotal = null;

    /**
     * @property \ans\schemes\AssinaturaDigitalType $assinaturaDigital
     */
    private $assinaturaDigital = null;

    /**
     * Gets as cabecalhoGuia
     *
     * @return \ans\schemes\CtmSpSadtGuiaType\CabecalhoGuiaAType
     */
    public function getCabecalhoGuia()
    {
        return $this->cabecalhoGuia;
    }

    /**
     * Sets a new cabecalhoGuia
     *
     * @param \ans\schemes\CtmSpSadtGuiaType\CabecalhoGuiaAType $cabecalhoGuia
     * @return self
     */
    public function setCabecalhoGuia(\ans\schemes\CtmSpSadtGuiaType\CabecalhoGuiaAType $cabecalhoGuia)
    {
        $this->cabecalhoGuia = $cabecalhoGuia;
        return $this;
    }

    /**
     * Gets as dadosAutorizacao
     *
     * @return \ans\schemes\CtAutorizacaoSADTType
     */
    public function getDadosAutorizacao()
    {
        return $this->dadosAutorizacao;
    }

    /**
     * Sets a new dadosAutorizacao
     *
     * @param \ans\schemes\CtAutorizacaoSADTType $dadosAutorizacao
     * @return self
     */
    public function setDadosAutorizacao(\ans\schemes\CtAutorizacaoSADTType $dadosAutorizacao)
    {
        $this->dadosAutorizacao = $dadosAutorizacao;
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
     * @return \ans\schemes\CtmSpSadtGuiaType\DadosSolicitanteAType
     */
    public function getDadosSolicitante()
    {
        return $this->dadosSolicitante;
    }

    /**
     * Sets a new dadosSolicitante
     *
     * @param \ans\schemes\CtmSpSadtGuiaType\DadosSolicitanteAType $dadosSolicitante
     * @return self
     */
    public function setDadosSolicitante(\ans\schemes\CtmSpSadtGuiaType\DadosSolicitanteAType $dadosSolicitante)
    {
        $this->dadosSolicitante = $dadosSolicitante;
        return $this;
    }

    /**
     * Gets as dadosSolicitacao
     *
     * @return \ans\schemes\CtmSpSadtGuiaType\DadosSolicitacaoAType
     */
    public function getDadosSolicitacao()
    {
        return $this->dadosSolicitacao;
    }

    /**
     * Sets a new dadosSolicitacao
     *
     * @param \ans\schemes\CtmSpSadtGuiaType\DadosSolicitacaoAType $dadosSolicitacao
     * @return self
     */
    public function setDadosSolicitacao(\ans\schemes\CtmSpSadtGuiaType\DadosSolicitacaoAType $dadosSolicitacao)
    {
        $this->dadosSolicitacao = $dadosSolicitacao;
        return $this;
    }

    /**
     * Gets as dadosExecutante
     *
     * @return \ans\schemes\CtmSpSadtGuiaType\DadosExecutanteAType
     */
    public function getDadosExecutante()
    {
        return $this->dadosExecutante;
    }

    /**
     * Sets a new dadosExecutante
     *
     * @param \ans\schemes\CtmSpSadtGuiaType\DadosExecutanteAType $dadosExecutante
     * @return self
     */
    public function setDadosExecutante(\ans\schemes\CtmSpSadtGuiaType\DadosExecutanteAType $dadosExecutante)
    {
        $this->dadosExecutante = $dadosExecutante;
        return $this;
    }

    /**
     * Gets as dadosAtendimento
     *
     * @return \ans\schemes\CtmSpSadtAtendimentoType
     */
    public function getDadosAtendimento()
    {
        return $this->dadosAtendimento;
    }

    /**
     * Sets a new dadosAtendimento
     *
     * @param \ans\schemes\CtmSpSadtAtendimentoType $dadosAtendimento
     * @return self
     */
    public function setDadosAtendimento(\ans\schemes\CtmSpSadtAtendimentoType $dadosAtendimento)
    {
        $this->dadosAtendimento = $dadosAtendimento;
        return $this;
    }

    /**
     * Adds as procedimentoExecutado
     *
     * @return self
     * @param \ans\schemes\CtProcedimentoExecutadoSadtType $procedimentoExecutado
     */
    public function addToProcedimentosExecutados(\ans\schemes\CtProcedimentoExecutadoSadtType $procedimentoExecutado)
    {
        $this->procedimentosExecutados[] = $procedimentoExecutado;
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
     * @return \ans\schemes\CtProcedimentoExecutadoSadtType[]
     */
    public function getProcedimentosExecutados()
    {
        return $this->procedimentosExecutados;
    }

    /**
     * Sets a new procedimentosExecutados
     *
     * @param \ans\schemes\CtProcedimentoExecutadoSadtType[] $procedimentosExecutados
     * @return self
     */
    public function setProcedimentosExecutados(array $procedimentosExecutados)
    {
        $this->procedimentosExecutados = $procedimentosExecutados;
        return $this;
    }

    /**
     * Adds as despesa
     *
     * @return self
     * @param \ans\schemes\CtOutrasDespesasType\DespesaAType $despesa
     */
    public function addToOutrasDespesas(\ans\schemes\CtOutrasDespesasType\DespesaAType $despesa)
    {
        $this->outrasDespesas[] = $despesa;
        return $this;
    }

    /**
     * isset outrasDespesas
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOutrasDespesas($index)
    {
        return isset($this->outrasDespesas[$index]);
    }

    /**
     * unset outrasDespesas
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOutrasDespesas($index)
    {
        unset($this->outrasDespesas[$index]);
    }

    /**
     * Gets as outrasDespesas
     *
     * @return \ans\schemes\CtOutrasDespesasType\DespesaAType[]
     */
    public function getOutrasDespesas()
    {
        return $this->outrasDespesas;
    }

    /**
     * Sets a new outrasDespesas
     *
     * @param \ans\schemes\CtOutrasDespesasType\DespesaAType[] $outrasDespesas
     * @return self
     */
    public function setOutrasDespesas(array $outrasDespesas)
    {
        $this->outrasDespesas = $outrasDespesas;
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
     * Gets as valorTotal
     *
     * @return \ans\schemes\CtGuiaValorTotalType
     */
    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    /**
     * Sets a new valorTotal
     *
     * @param \ans\schemes\CtGuiaValorTotalType $valorTotal
     * @return self
     */
    public function setValorTotal(\ans\schemes\CtGuiaValorTotalType $valorTotal)
    {
        $this->valorTotal = $valorTotal;
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

