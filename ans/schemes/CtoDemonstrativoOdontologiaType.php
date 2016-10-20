<?php

namespace ans\schemes;

/**
 * Class representing CtoDemonstrativoOdontologiaType
 *
 *
 * XSD Type: cto_demonstrativoOdontologia
 */
class CtoDemonstrativoOdontologiaType
{

    /**
     * @property string $registroANS
     */
    private $registroANS = null;

    /**
     * @property string $numeroDemonstrativo
     */
    private $numeroDemonstrativo = null;

    /**
     * @property string $nomeOperadora
     */
    private $nomeOperadora = null;

    /**
     * @property string $cnpjOper
     */
    private $cnpjOper = null;

    /**
     * @property \ans\schemes\CtoDemonstrativoOdontologiaType\PeriodoProcAType
     * $periodoProc
     */
    private $periodoProc = null;

    /**
     * @property \ans\schemes\CtoDemonstrativoOdontologiaType\DadosPrestadorAType
     * $dadosPrestador
     */
    private $dadosPrestador = null;

    /**
     * @property
     * \ans\schemes\CtoDemonstrativoOdontologiaType\DadosPagamentoProtocoloAType[]
     * $dadosPagamentoProtocolo
     */
    private $dadosPagamentoProtocolo = null;

    /**
     * @property \ans\schemes\CtDescontosType[] $debitosCreditosTributaveis
     */
    private $debitosCreditosTributaveis = null;

    /**
     * @property \ans\schemes\CtDescontosType[] $debitosCreditosNaoTributaveis
     */
    private $debitosCreditosNaoTributaveis = null;

    /**
     * @property \ans\schemes\CtDescontosType[] $demaisImpostos
     */
    private $demaisImpostos = null;

    /**
     * @property float $valorTotalTributavel
     */
    private $valorTotalTributavel = null;

    /**
     * @property float $valorTotalImpostos
     */
    private $valorTotalImpostos = null;

    /**
     * @property float $valorTotalNaoTributavel
     */
    private $valorTotalNaoTributavel = null;

    /**
     * @property float $valorFinalReceber
     */
    private $valorFinalReceber = null;

    /**
     * @property string $observacao
     */
    private $observacao = null;

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
     * Gets as numeroDemonstrativo
     *
     * @return string
     */
    public function getNumeroDemonstrativo()
    {
        return $this->numeroDemonstrativo;
    }

    /**
     * Sets a new numeroDemonstrativo
     *
     * @param string $numeroDemonstrativo
     * @return self
     */
    public function setNumeroDemonstrativo($numeroDemonstrativo)
    {
        $this->numeroDemonstrativo = $numeroDemonstrativo;
        return $this;
    }

    /**
     * Gets as nomeOperadora
     *
     * @return string
     */
    public function getNomeOperadora()
    {
        return $this->nomeOperadora;
    }

    /**
     * Sets a new nomeOperadora
     *
     * @param string $nomeOperadora
     * @return self
     */
    public function setNomeOperadora($nomeOperadora)
    {
        $this->nomeOperadora = $nomeOperadora;
        return $this;
    }

    /**
     * Gets as cnpjOper
     *
     * @return string
     */
    public function getCnpjOper()
    {
        return $this->cnpjOper;
    }

    /**
     * Sets a new cnpjOper
     *
     * @param string $cnpjOper
     * @return self
     */
    public function setCnpjOper($cnpjOper)
    {
        $this->cnpjOper = $cnpjOper;
        return $this;
    }

    /**
     * Gets as periodoProc
     *
     * @return \ans\schemes\CtoDemonstrativoOdontologiaType\PeriodoProcAType
     */
    public function getPeriodoProc()
    {
        return $this->periodoProc;
    }

    /**
     * Sets a new periodoProc
     *
     * @param \ans\schemes\CtoDemonstrativoOdontologiaType\PeriodoProcAType
     * $periodoProc
     * @return self
     */
    public function setPeriodoProc(\ans\schemes\CtoDemonstrativoOdontologiaType\PeriodoProcAType $periodoProc)
    {
        $this->periodoProc = $periodoProc;
        return $this;
    }

    /**
     * Gets as dadosPrestador
     *
     * @return \ans\schemes\CtoDemonstrativoOdontologiaType\DadosPrestadorAType
     */
    public function getDadosPrestador()
    {
        return $this->dadosPrestador;
    }

    /**
     * Sets a new dadosPrestador
     *
     * @param \ans\schemes\CtoDemonstrativoOdontologiaType\DadosPrestadorAType
     * $dadosPrestador
     * @return self
     */
    public function setDadosPrestador(\ans\schemes\CtoDemonstrativoOdontologiaType\DadosPrestadorAType $dadosPrestador)
    {
        $this->dadosPrestador = $dadosPrestador;
        return $this;
    }

    /**
     * Adds as dadosPagamentoProtocolo
     *
     * @return self
     * @param \ans\schemes\CtoDemonstrativoOdontologiaType\DadosPagamentoProtocoloAType
     * $dadosPagamentoProtocolo
     */
    public function addToDadosPagamentoProtocolo(\ans\schemes\CtoDemonstrativoOdontologiaType\DadosPagamentoProtocoloAType $dadosPagamentoProtocolo)
    {
        $this->dadosPagamentoProtocolo[] = $dadosPagamentoProtocolo;
        return $this;
    }

    /**
     * isset dadosPagamentoProtocolo
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDadosPagamentoProtocolo($index)
    {
        return isset($this->dadosPagamentoProtocolo[$index]);
    }

    /**
     * unset dadosPagamentoProtocolo
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDadosPagamentoProtocolo($index)
    {
        unset($this->dadosPagamentoProtocolo[$index]);
    }

    /**
     * Gets as dadosPagamentoProtocolo
     *
     * @return
     * \ans\schemes\CtoDemonstrativoOdontologiaType\DadosPagamentoProtocoloAType[]
     */
    public function getDadosPagamentoProtocolo()
    {
        return $this->dadosPagamentoProtocolo;
    }

    /**
     * Sets a new dadosPagamentoProtocolo
     *
     * @param
     * \ans\schemes\CtoDemonstrativoOdontologiaType\DadosPagamentoProtocoloAType[]
     * $dadosPagamentoProtocolo
     * @return self
     */
    public function setDadosPagamentoProtocolo(array $dadosPagamentoProtocolo)
    {
        $this->dadosPagamentoProtocolo = $dadosPagamentoProtocolo;
        return $this;
    }

    /**
     * Adds as descontos
     *
     * @return self
     * @param \ans\schemes\CtDescontosType $descontos
     */
    public function addToDebitosCreditosTributaveis(\ans\schemes\CtDescontosType $descontos)
    {
        $this->debitosCreditosTributaveis[] = $descontos;
        return $this;
    }

    /**
     * isset debitosCreditosTributaveis
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDebitosCreditosTributaveis($index)
    {
        return isset($this->debitosCreditosTributaveis[$index]);
    }

    /**
     * unset debitosCreditosTributaveis
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDebitosCreditosTributaveis($index)
    {
        unset($this->debitosCreditosTributaveis[$index]);
    }

    /**
     * Gets as debitosCreditosTributaveis
     *
     * @return \ans\schemes\CtDescontosType[]
     */
    public function getDebitosCreditosTributaveis()
    {
        return $this->debitosCreditosTributaveis;
    }

    /**
     * Sets a new debitosCreditosTributaveis
     *
     * @param \ans\schemes\CtDescontosType[] $debitosCreditosTributaveis
     * @return self
     */
    public function setDebitosCreditosTributaveis(array $debitosCreditosTributaveis)
    {
        $this->debitosCreditosTributaveis = $debitosCreditosTributaveis;
        return $this;
    }

    /**
     * Adds as descontos
     *
     * @return self
     * @param \ans\schemes\CtDescontosType $descontos
     */
    public function addToDebitosCreditosNaoTributaveis(\ans\schemes\CtDescontosType $descontos)
    {
        $this->debitosCreditosNaoTributaveis[] = $descontos;
        return $this;
    }

    /**
     * isset debitosCreditosNaoTributaveis
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDebitosCreditosNaoTributaveis($index)
    {
        return isset($this->debitosCreditosNaoTributaveis[$index]);
    }

    /**
     * unset debitosCreditosNaoTributaveis
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDebitosCreditosNaoTributaveis($index)
    {
        unset($this->debitosCreditosNaoTributaveis[$index]);
    }

    /**
     * Gets as debitosCreditosNaoTributaveis
     *
     * @return \ans\schemes\CtDescontosType[]
     */
    public function getDebitosCreditosNaoTributaveis()
    {
        return $this->debitosCreditosNaoTributaveis;
    }

    /**
     * Sets a new debitosCreditosNaoTributaveis
     *
     * @param \ans\schemes\CtDescontosType[] $debitosCreditosNaoTributaveis
     * @return self
     */
    public function setDebitosCreditosNaoTributaveis(array $debitosCreditosNaoTributaveis)
    {
        $this->debitosCreditosNaoTributaveis = $debitosCreditosNaoTributaveis;
        return $this;
    }

    /**
     * Adds as descontos
     *
     * @return self
     * @param \ans\schemes\CtDescontosType $descontos
     */
    public function addToDemaisImpostos(\ans\schemes\CtDescontosType $descontos)
    {
        $this->demaisImpostos[] = $descontos;
        return $this;
    }

    /**
     * isset demaisImpostos
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDemaisImpostos($index)
    {
        return isset($this->demaisImpostos[$index]);
    }

    /**
     * unset demaisImpostos
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDemaisImpostos($index)
    {
        unset($this->demaisImpostos[$index]);
    }

    /**
     * Gets as demaisImpostos
     *
     * @return \ans\schemes\CtDescontosType[]
     */
    public function getDemaisImpostos()
    {
        return $this->demaisImpostos;
    }

    /**
     * Sets a new demaisImpostos
     *
     * @param \ans\schemes\CtDescontosType[] $demaisImpostos
     * @return self
     */
    public function setDemaisImpostos(array $demaisImpostos)
    {
        $this->demaisImpostos = $demaisImpostos;
        return $this;
    }

    /**
     * Gets as valorTotalTributavel
     *
     * @return float
     */
    public function getValorTotalTributavel()
    {
        return $this->valorTotalTributavel;
    }

    /**
     * Sets a new valorTotalTributavel
     *
     * @param float $valorTotalTributavel
     * @return self
     */
    public function setValorTotalTributavel($valorTotalTributavel)
    {
        $this->valorTotalTributavel = $valorTotalTributavel;
        return $this;
    }

    /**
     * Gets as valorTotalImpostos
     *
     * @return float
     */
    public function getValorTotalImpostos()
    {
        return $this->valorTotalImpostos;
    }

    /**
     * Sets a new valorTotalImpostos
     *
     * @param float $valorTotalImpostos
     * @return self
     */
    public function setValorTotalImpostos($valorTotalImpostos)
    {
        $this->valorTotalImpostos = $valorTotalImpostos;
        return $this;
    }

    /**
     * Gets as valorTotalNaoTributavel
     *
     * @return float
     */
    public function getValorTotalNaoTributavel()
    {
        return $this->valorTotalNaoTributavel;
    }

    /**
     * Sets a new valorTotalNaoTributavel
     *
     * @param float $valorTotalNaoTributavel
     * @return self
     */
    public function setValorTotalNaoTributavel($valorTotalNaoTributavel)
    {
        $this->valorTotalNaoTributavel = $valorTotalNaoTributavel;
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

