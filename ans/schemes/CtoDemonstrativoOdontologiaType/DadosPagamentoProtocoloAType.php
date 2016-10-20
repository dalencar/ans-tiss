<?php

namespace ans\schemes\CtoDemonstrativoOdontologiaType;

/**
 * Class representing DadosPagamentoProtocoloAType
 */
class DadosPagamentoProtocoloAType
{

    /**
     * @property \DateTime $dataPagamento
     */
    private $dataPagamento = null;

    /**
     * @property string $banco
     */
    private $banco = null;

    /**
     * @property string $agencia
     */
    private $agencia = null;

    /**
     * @property string $conta
     */
    private $conta = null;

    /**
     * @property string $numeroLote
     */
    private $numeroLote = null;

    /**
     * @property string $numeroProtocolo
     */
    private $numeroProtocolo = null;

    /**
     * @property
     * \ans\schemes\CtoDemonstrativoOdontologiaType\DadosPagamentoProtocoloAType\DadosPagamentoGuiaAType[]
     * $dadosPagamentoGuia
     */
    private $dadosPagamentoGuia = null;

    /**
     * @property float $valorTotalInformadoProtocolo
     */
    private $valorTotalInformadoProtocolo = null;

    /**
     * @property float $valorTotalProcessadoProtocolo
     */
    private $valorTotalProcessadoProtocolo = null;

    /**
     * @property float $valorTotalGlosaProtocolo
     */
    private $valorTotalGlosaProtocolo = null;

    /**
     * @property float $valorTotalFranquiaProtocolo
     */
    private $valorTotalFranquiaProtocolo = null;

    /**
     * @property float $valorTotalLiberadoProtocolo
     */
    private $valorTotalLiberadoProtocolo = null;

    /**
     * Gets as dataPagamento
     *
     * @return \DateTime
     */
    public function getDataPagamento()
    {
        return $this->dataPagamento;
    }

    /**
     * Sets a new dataPagamento
     *
     * @param \DateTime $dataPagamento
     * @return self
     */
    public function setDataPagamento(\DateTime $dataPagamento)
    {
        $this->dataPagamento = $dataPagamento;
        return $this;
    }

    /**
     * Gets as banco
     *
     * @return string
     */
    public function getBanco()
    {
        return $this->banco;
    }

    /**
     * Sets a new banco
     *
     * @param string $banco
     * @return self
     */
    public function setBanco($banco)
    {
        $this->banco = $banco;
        return $this;
    }

    /**
     * Gets as agencia
     *
     * @return string
     */
    public function getAgencia()
    {
        return $this->agencia;
    }

    /**
     * Sets a new agencia
     *
     * @param string $agencia
     * @return self
     */
    public function setAgencia($agencia)
    {
        $this->agencia = $agencia;
        return $this;
    }

    /**
     * Gets as conta
     *
     * @return string
     */
    public function getConta()
    {
        return $this->conta;
    }

    /**
     * Sets a new conta
     *
     * @param string $conta
     * @return self
     */
    public function setConta($conta)
    {
        $this->conta = $conta;
        return $this;
    }

    /**
     * Gets as numeroLote
     *
     * @return string
     */
    public function getNumeroLote()
    {
        return $this->numeroLote;
    }

    /**
     * Sets a new numeroLote
     *
     * @param string $numeroLote
     * @return self
     */
    public function setNumeroLote($numeroLote)
    {
        $this->numeroLote = $numeroLote;
        return $this;
    }

    /**
     * Gets as numeroProtocolo
     *
     * @return string
     */
    public function getNumeroProtocolo()
    {
        return $this->numeroProtocolo;
    }

    /**
     * Sets a new numeroProtocolo
     *
     * @param string $numeroProtocolo
     * @return self
     */
    public function setNumeroProtocolo($numeroProtocolo)
    {
        $this->numeroProtocolo = $numeroProtocolo;
        return $this;
    }

    /**
     * Adds as dadosPagamentoGuia
     *
     * @return self
     * @param
     * \ans\schemes\CtoDemonstrativoOdontologiaType\DadosPagamentoProtocoloAType\DadosPagamentoGuiaAType
     * $dadosPagamentoGuia
     */
    public function addToDadosPagamentoGuia(\ans\schemes\CtoDemonstrativoOdontologiaType\DadosPagamentoProtocoloAType\DadosPagamentoGuiaAType $dadosPagamentoGuia)
    {
        $this->dadosPagamentoGuia[] = $dadosPagamentoGuia;
        return $this;
    }

    /**
     * isset dadosPagamentoGuia
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDadosPagamentoGuia($index)
    {
        return isset($this->dadosPagamentoGuia[$index]);
    }

    /**
     * unset dadosPagamentoGuia
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDadosPagamentoGuia($index)
    {
        unset($this->dadosPagamentoGuia[$index]);
    }

    /**
     * Gets as dadosPagamentoGuia
     *
     * @return
     * \ans\schemes\CtoDemonstrativoOdontologiaType\DadosPagamentoProtocoloAType\DadosPagamentoGuiaAType[]
     */
    public function getDadosPagamentoGuia()
    {
        return $this->dadosPagamentoGuia;
    }

    /**
     * Sets a new dadosPagamentoGuia
     *
     * @param
     * \ans\schemes\CtoDemonstrativoOdontologiaType\DadosPagamentoProtocoloAType\DadosPagamentoGuiaAType[]
     * $dadosPagamentoGuia
     * @return self
     */
    public function setDadosPagamentoGuia(array $dadosPagamentoGuia)
    {
        $this->dadosPagamentoGuia = $dadosPagamentoGuia;
        return $this;
    }

    /**
     * Gets as valorTotalInformadoProtocolo
     *
     * @return float
     */
    public function getValorTotalInformadoProtocolo()
    {
        return $this->valorTotalInformadoProtocolo;
    }

    /**
     * Sets a new valorTotalInformadoProtocolo
     *
     * @param float $valorTotalInformadoProtocolo
     * @return self
     */
    public function setValorTotalInformadoProtocolo($valorTotalInformadoProtocolo)
    {
        $this->valorTotalInformadoProtocolo = $valorTotalInformadoProtocolo;
        return $this;
    }

    /**
     * Gets as valorTotalProcessadoProtocolo
     *
     * @return float
     */
    public function getValorTotalProcessadoProtocolo()
    {
        return $this->valorTotalProcessadoProtocolo;
    }

    /**
     * Sets a new valorTotalProcessadoProtocolo
     *
     * @param float $valorTotalProcessadoProtocolo
     * @return self
     */
    public function setValorTotalProcessadoProtocolo($valorTotalProcessadoProtocolo)
    {
        $this->valorTotalProcessadoProtocolo = $valorTotalProcessadoProtocolo;
        return $this;
    }

    /**
     * Gets as valorTotalGlosaProtocolo
     *
     * @return float
     */
    public function getValorTotalGlosaProtocolo()
    {
        return $this->valorTotalGlosaProtocolo;
    }

    /**
     * Sets a new valorTotalGlosaProtocolo
     *
     * @param float $valorTotalGlosaProtocolo
     * @return self
     */
    public function setValorTotalGlosaProtocolo($valorTotalGlosaProtocolo)
    {
        $this->valorTotalGlosaProtocolo = $valorTotalGlosaProtocolo;
        return $this;
    }

    /**
     * Gets as valorTotalFranquiaProtocolo
     *
     * @return float
     */
    public function getValorTotalFranquiaProtocolo()
    {
        return $this->valorTotalFranquiaProtocolo;
    }

    /**
     * Sets a new valorTotalFranquiaProtocolo
     *
     * @param float $valorTotalFranquiaProtocolo
     * @return self
     */
    public function setValorTotalFranquiaProtocolo($valorTotalFranquiaProtocolo)
    {
        $this->valorTotalFranquiaProtocolo = $valorTotalFranquiaProtocolo;
        return $this;
    }

    /**
     * Gets as valorTotalLiberadoProtocolo
     *
     * @return float
     */
    public function getValorTotalLiberadoProtocolo()
    {
        return $this->valorTotalLiberadoProtocolo;
    }

    /**
     * Sets a new valorTotalLiberadoProtocolo
     *
     * @param float $valorTotalLiberadoProtocolo
     * @return self
     */
    public function setValorTotalLiberadoProtocolo($valorTotalLiberadoProtocolo)
    {
        $this->valorTotalLiberadoProtocolo = $valorTotalLiberadoProtocolo;
        return $this;
    }


}

