<?php

namespace ans\schemes;

/**
 * Class representing CtmInternacaoResumoGuiaType
 *
 *
 * XSD Type: ctm_internacaoResumoGuia
 */
class CtmInternacaoResumoGuiaType
{

    /**
     * @property \ans\schemes\CtGuiaCabecalhoType $cabecalhoGuia
     */
    private $cabecalhoGuia = null;

    /**
     * @property string $numeroGuiaSolicitacaoInternacao
     */
    private $numeroGuiaSolicitacaoInternacao = null;

    /**
     * @property \ans\schemes\CtAutorizacaoInternacaoType $dadosAutorizacao
     */
    private $dadosAutorizacao = null;

    /**
     * @property \ans\schemes\CtBeneficiarioDadosType $dadosBeneficiario
     */
    private $dadosBeneficiario = null;

    /**
     * @property \ans\schemes\CtmInternacaoResumoGuiaType\DadosExecutanteAType
     * $dadosExecutante
     */
    private $dadosExecutante = null;

    /**
     * @property \ans\schemes\CtmInternacaoDadosType $dadosInternacao
     */
    private $dadosInternacao = null;

    /**
     * @property \ans\schemes\CtmInternacaoDadosSaidaType $dadosSaidaInternacao
     */
    private $dadosSaidaInternacao = null;

    /**
     * @property \ans\schemes\CtProcedimentoExecutadoIntType[] $procedimentosExecutados
     */
    private $procedimentosExecutados = null;

    /**
     * @property \ans\schemes\CtGuiaValorTotalType $valorTotal
     */
    private $valorTotal = null;

    /**
     * @property \ans\schemes\CtOutrasDespesasType\DespesaAType[] $outrasDespesas
     */
    private $outrasDespesas = null;

    /**
     * @property string $observacao
     */
    private $observacao = null;

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
     * Gets as numeroGuiaSolicitacaoInternacao
     *
     * @return string
     */
    public function getNumeroGuiaSolicitacaoInternacao()
    {
        return $this->numeroGuiaSolicitacaoInternacao;
    }

    /**
     * Sets a new numeroGuiaSolicitacaoInternacao
     *
     * @param string $numeroGuiaSolicitacaoInternacao
     * @return self
     */
    public function setNumeroGuiaSolicitacaoInternacao($numeroGuiaSolicitacaoInternacao)
    {
        $this->numeroGuiaSolicitacaoInternacao = $numeroGuiaSolicitacaoInternacao;
        return $this;
    }

    /**
     * Gets as dadosAutorizacao
     *
     * @return \ans\schemes\CtAutorizacaoInternacaoType
     */
    public function getDadosAutorizacao()
    {
        return $this->dadosAutorizacao;
    }

    /**
     * Sets a new dadosAutorizacao
     *
     * @param \ans\schemes\CtAutorizacaoInternacaoType $dadosAutorizacao
     * @return self
     */
    public function setDadosAutorizacao(\ans\schemes\CtAutorizacaoInternacaoType $dadosAutorizacao)
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
     * Gets as dadosExecutante
     *
     * @return \ans\schemes\CtmInternacaoResumoGuiaType\DadosExecutanteAType
     */
    public function getDadosExecutante()
    {
        return $this->dadosExecutante;
    }

    /**
     * Sets a new dadosExecutante
     *
     * @param \ans\schemes\CtmInternacaoResumoGuiaType\DadosExecutanteAType
     * $dadosExecutante
     * @return self
     */
    public function setDadosExecutante(\ans\schemes\CtmInternacaoResumoGuiaType\DadosExecutanteAType $dadosExecutante)
    {
        $this->dadosExecutante = $dadosExecutante;
        return $this;
    }

    /**
     * Gets as dadosInternacao
     *
     * @return \ans\schemes\CtmInternacaoDadosType
     */
    public function getDadosInternacao()
    {
        return $this->dadosInternacao;
    }

    /**
     * Sets a new dadosInternacao
     *
     * @param \ans\schemes\CtmInternacaoDadosType $dadosInternacao
     * @return self
     */
    public function setDadosInternacao(\ans\schemes\CtmInternacaoDadosType $dadosInternacao)
    {
        $this->dadosInternacao = $dadosInternacao;
        return $this;
    }

    /**
     * Gets as dadosSaidaInternacao
     *
     * @return \ans\schemes\CtmInternacaoDadosSaidaType
     */
    public function getDadosSaidaInternacao()
    {
        return $this->dadosSaidaInternacao;
    }

    /**
     * Sets a new dadosSaidaInternacao
     *
     * @param \ans\schemes\CtmInternacaoDadosSaidaType $dadosSaidaInternacao
     * @return self
     */
    public function setDadosSaidaInternacao(\ans\schemes\CtmInternacaoDadosSaidaType $dadosSaidaInternacao)
    {
        $this->dadosSaidaInternacao = $dadosSaidaInternacao;
        return $this;
    }

    /**
     * Adds as procedimentoExecutado
     *
     * @return self
     * @param \ans\schemes\CtProcedimentoExecutadoIntType $procedimentoExecutado
     */
    public function addToProcedimentosExecutados(\ans\schemes\CtProcedimentoExecutadoIntType $procedimentoExecutado)
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
     * @return \ans\schemes\CtProcedimentoExecutadoIntType[]
     */
    public function getProcedimentosExecutados()
    {
        return $this->procedimentosExecutados;
    }

    /**
     * Sets a new procedimentosExecutados
     *
     * @param \ans\schemes\CtProcedimentoExecutadoIntType[] $procedimentosExecutados
     * @return self
     */
    public function setProcedimentosExecutados(array $procedimentosExecutados)
    {
        $this->procedimentosExecutados = $procedimentosExecutados;
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

