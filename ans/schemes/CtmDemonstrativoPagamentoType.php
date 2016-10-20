<?php

namespace ans\schemes;

/**
 * Class representing CtmDemonstrativoPagamentoType
 *
 *
 * XSD Type: ctm_demonstrativoPagamento
 */
class CtmDemonstrativoPagamentoType
{

    /**
     * @property \ans\schemes\CtDemonstrativoCabecalhoType $cabecalhoDemonstrativo
     */
    private $cabecalhoDemonstrativo = null;

    /**
     * @property \ans\schemes\CtmDemonstrativoPagamentoType\DadosContratadoAType
     * $dadosContratado
     */
    private $dadosContratado = null;

    /**
     * @property \ans\schemes\CtPagamentoDadosType $dadosPagamento
     */
    private $dadosPagamento = null;

    /**
     * @property \ans\schemes\CtmDemonstrativoPagamentoType\DadosResumoAType[]
     * $dadosResumo
     */
    private $dadosResumo = null;

    /**
     * @property float $valorInformadoBruto
     */
    private $valorInformadoBruto = null;

    /**
     * @property float $valorProcessadoBruto
     */
    private $valorProcessadoBruto = null;

    /**
     * @property float $valorLiberadoBruto
     */
    private $valorLiberadoBruto = null;

    /**
     * @property float $valorGlosaBruto
     */
    private $valorGlosaBruto = null;

    /**
     * @property \ans\schemes\CtDescontosType[] $demaisDebitosCreditos
     */
    private $demaisDebitosCreditos = null;

    /**
     * @property float $totalDemaisDebitos
     */
    private $totalDemaisDebitos = null;

    /**
     * @property float $totalDemaisCreditos
     */
    private $totalDemaisCreditos = null;

    /**
     * @property float $valorFinalReceber
     */
    private $valorFinalReceber = null;

    /**
     * @property string $observacao
     */
    private $observacao = null;

    /**
     * Gets as cabecalhoDemonstrativo
     *
     * @return \ans\schemes\CtDemonstrativoCabecalhoType
     */
    public function getCabecalhoDemonstrativo()
    {
        return $this->cabecalhoDemonstrativo;
    }

    /**
     * Sets a new cabecalhoDemonstrativo
     *
     * @param \ans\schemes\CtDemonstrativoCabecalhoType $cabecalhoDemonstrativo
     * @return self
     */
    public function setCabecalhoDemonstrativo(\ans\schemes\CtDemonstrativoCabecalhoType $cabecalhoDemonstrativo)
    {
        $this->cabecalhoDemonstrativo = $cabecalhoDemonstrativo;
        return $this;
    }

    /**
     * Gets as dadosContratado
     *
     * @return \ans\schemes\CtmDemonstrativoPagamentoType\DadosContratadoAType
     */
    public function getDadosContratado()
    {
        return $this->dadosContratado;
    }

    /**
     * Sets a new dadosContratado
     *
     * @param \ans\schemes\CtmDemonstrativoPagamentoType\DadosContratadoAType
     * $dadosContratado
     * @return self
     */
    public function setDadosContratado(\ans\schemes\CtmDemonstrativoPagamentoType\DadosContratadoAType $dadosContratado)
    {
        $this->dadosContratado = $dadosContratado;
        return $this;
    }

    /**
     * Gets as dadosPagamento
     *
     * @return \ans\schemes\CtPagamentoDadosType
     */
    public function getDadosPagamento()
    {
        return $this->dadosPagamento;
    }

    /**
     * Sets a new dadosPagamento
     *
     * @param \ans\schemes\CtPagamentoDadosType $dadosPagamento
     * @return self
     */
    public function setDadosPagamento(\ans\schemes\CtPagamentoDadosType $dadosPagamento)
    {
        $this->dadosPagamento = $dadosPagamento;
        return $this;
    }

    /**
     * Adds as dadosResumo
     *
     * @return self
     * @param \ans\schemes\CtmDemonstrativoPagamentoType\DadosResumoAType $dadosResumo
     */
    public function addToDadosResumo(\ans\schemes\CtmDemonstrativoPagamentoType\DadosResumoAType $dadosResumo)
    {
        $this->dadosResumo[] = $dadosResumo;
        return $this;
    }

    /**
     * isset dadosResumo
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDadosResumo($index)
    {
        return isset($this->dadosResumo[$index]);
    }

    /**
     * unset dadosResumo
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDadosResumo($index)
    {
        unset($this->dadosResumo[$index]);
    }

    /**
     * Gets as dadosResumo
     *
     * @return \ans\schemes\CtmDemonstrativoPagamentoType\DadosResumoAType[]
     */
    public function getDadosResumo()
    {
        return $this->dadosResumo;
    }

    /**
     * Sets a new dadosResumo
     *
     * @param \ans\schemes\CtmDemonstrativoPagamentoType\DadosResumoAType[]
     * $dadosResumo
     * @return self
     */
    public function setDadosResumo(array $dadosResumo)
    {
        $this->dadosResumo = $dadosResumo;
        return $this;
    }

    /**
     * Gets as valorInformadoBruto
     *
     * @return float
     */
    public function getValorInformadoBruto()
    {
        return $this->valorInformadoBruto;
    }

    /**
     * Sets a new valorInformadoBruto
     *
     * @param float $valorInformadoBruto
     * @return self
     */
    public function setValorInformadoBruto($valorInformadoBruto)
    {
        $this->valorInformadoBruto = $valorInformadoBruto;
        return $this;
    }

    /**
     * Gets as valorProcessadoBruto
     *
     * @return float
     */
    public function getValorProcessadoBruto()
    {
        return $this->valorProcessadoBruto;
    }

    /**
     * Sets a new valorProcessadoBruto
     *
     * @param float $valorProcessadoBruto
     * @return self
     */
    public function setValorProcessadoBruto($valorProcessadoBruto)
    {
        $this->valorProcessadoBruto = $valorProcessadoBruto;
        return $this;
    }

    /**
     * Gets as valorLiberadoBruto
     *
     * @return float
     */
    public function getValorLiberadoBruto()
    {
        return $this->valorLiberadoBruto;
    }

    /**
     * Sets a new valorLiberadoBruto
     *
     * @param float $valorLiberadoBruto
     * @return self
     */
    public function setValorLiberadoBruto($valorLiberadoBruto)
    {
        $this->valorLiberadoBruto = $valorLiberadoBruto;
        return $this;
    }

    /**
     * Gets as valorGlosaBruto
     *
     * @return float
     */
    public function getValorGlosaBruto()
    {
        return $this->valorGlosaBruto;
    }

    /**
     * Sets a new valorGlosaBruto
     *
     * @param float $valorGlosaBruto
     * @return self
     */
    public function setValorGlosaBruto($valorGlosaBruto)
    {
        $this->valorGlosaBruto = $valorGlosaBruto;
        return $this;
    }

    /**
     * Adds as descontos
     *
     * @return self
     * @param \ans\schemes\CtDescontosType $descontos
     */
    public function addToDemaisDebitosCreditos(\ans\schemes\CtDescontosType $descontos)
    {
        $this->demaisDebitosCreditos[] = $descontos;
        return $this;
    }

    /**
     * isset demaisDebitosCreditos
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDemaisDebitosCreditos($index)
    {
        return isset($this->demaisDebitosCreditos[$index]);
    }

    /**
     * unset demaisDebitosCreditos
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDemaisDebitosCreditos($index)
    {
        unset($this->demaisDebitosCreditos[$index]);
    }

    /**
     * Gets as demaisDebitosCreditos
     *
     * @return \ans\schemes\CtDescontosType[]
     */
    public function getDemaisDebitosCreditos()
    {
        return $this->demaisDebitosCreditos;
    }

    /**
     * Sets a new demaisDebitosCreditos
     *
     * @param \ans\schemes\CtDescontosType[] $demaisDebitosCreditos
     * @return self
     */
    public function setDemaisDebitosCreditos(array $demaisDebitosCreditos)
    {
        $this->demaisDebitosCreditos = $demaisDebitosCreditos;
        return $this;
    }

    /**
     * Gets as totalDemaisDebitos
     *
     * @return float
     */
    public function getTotalDemaisDebitos()
    {
        return $this->totalDemaisDebitos;
    }

    /**
     * Sets a new totalDemaisDebitos
     *
     * @param float $totalDemaisDebitos
     * @return self
     */
    public function setTotalDemaisDebitos($totalDemaisDebitos)
    {
        $this->totalDemaisDebitos = $totalDemaisDebitos;
        return $this;
    }

    /**
     * Gets as totalDemaisCreditos
     *
     * @return float
     */
    public function getTotalDemaisCreditos()
    {
        return $this->totalDemaisCreditos;
    }

    /**
     * Sets a new totalDemaisCreditos
     *
     * @param float $totalDemaisCreditos
     * @return self
     */
    public function setTotalDemaisCreditos($totalDemaisCreditos)
    {
        $this->totalDemaisCreditos = $totalDemaisCreditos;
        return $this;
    }

    /**
     * Gets as valorFinalReceber
     *
     * @return float
     */
    public function getValorFinalReceber()
    {
        return $this->valorFinalReceber;
    }

    /**
     * Sets a new valorFinalReceber
     *
     * @param float $valorFinalReceber
     * @return self
     */
    public function setValorFinalReceber($valorFinalReceber)
    {
        $this->valorFinalReceber = $valorFinalReceber;
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

