<?php

namespace ans\schemes\CtoDemonstrativoOdontologiaType\DadosPagamentoProtocoloAType;

/**
 * Class representing DadosPagamentoGuiaAType
 */
class DadosPagamentoGuiaAType
{

    /**
     * @property string $numeroGuiaPrestador
     */
    private $numeroGuiaPrestador = null;

    /**
     * @property string $carteiraBeneficiario
     */
    private $carteiraBeneficiario = null;

    /**
     * @property string $nomeBeneficiario
     */
    private $nomeBeneficiario = null;

    /**
     * @property
     * \ans\schemes\CtoDemonstrativoOdontologiaType\DadosPagamentoProtocoloAType\DadosPagamentoGuiaAType\DadosPagamentoAType[]
     * $dadosPagamento
     */
    private $dadosPagamento = null;

    /**
     * @property string $observacaoGuia
     */
    private $observacaoGuia = null;

    /**
     * @property float $valorTotalInformadoGuia
     */
    private $valorTotalInformadoGuia = null;

    /**
     * @property float $valorTotalProcessadoGuia
     */
    private $valorTotalProcessadoGuia = null;

    /**
     * @property float $valorTotalGlosaGuia
     */
    private $valorTotalGlosaGuia = null;

    /**
     * @property float $valorTotalFranquiaGuia
     */
    private $valorTotalFranquiaGuia = null;

    /**
     * @property float $valorTotalLiberadoGuia
     */
    private $valorTotalLiberadoGuia = null;

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
     * Gets as carteiraBeneficiario
     *
     * @return string
     */
    public function getCarteiraBeneficiario()
    {
        return $this->carteiraBeneficiario;
    }

    /**
     * Sets a new carteiraBeneficiario
     *
     * @param string $carteiraBeneficiario
     * @return self
     */
    public function setCarteiraBeneficiario($carteiraBeneficiario)
    {
        $this->carteiraBeneficiario = $carteiraBeneficiario;
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
     * Adds as dadosPagamento
     *
     * @return self
     * @param
     * \ans\schemes\CtoDemonstrativoOdontologiaType\DadosPagamentoProtocoloAType\DadosPagamentoGuiaAType\DadosPagamentoAType
     * $dadosPagamento
     */
    public function addToDadosPagamento(\ans\schemes\CtoDemonstrativoOdontologiaType\DadosPagamentoProtocoloAType\DadosPagamentoGuiaAType\DadosPagamentoAType $dadosPagamento)
    {
        $this->dadosPagamento[] = $dadosPagamento;
        return $this;
    }

    /**
     * isset dadosPagamento
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDadosPagamento($index)
    {
        return isset($this->dadosPagamento[$index]);
    }

    /**
     * unset dadosPagamento
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDadosPagamento($index)
    {
        unset($this->dadosPagamento[$index]);
    }

    /**
     * Gets as dadosPagamento
     *
     * @return
     * \ans\schemes\CtoDemonstrativoOdontologiaType\DadosPagamentoProtocoloAType\DadosPagamentoGuiaAType\DadosPagamentoAType[]
     */
    public function getDadosPagamento()
    {
        return $this->dadosPagamento;
    }

    /**
     * Sets a new dadosPagamento
     *
     * @param
     * \ans\schemes\CtoDemonstrativoOdontologiaType\DadosPagamentoProtocoloAType\DadosPagamentoGuiaAType\DadosPagamentoAType[]
     * $dadosPagamento
     * @return self
     */
    public function setDadosPagamento(array $dadosPagamento)
    {
        $this->dadosPagamento = $dadosPagamento;
        return $this;
    }

    /**
     * Gets as observacaoGuia
     *
     * @return string
     */
    public function getObservacaoGuia()
    {
        return $this->observacaoGuia;
    }

    /**
     * Sets a new observacaoGuia
     *
     * @param string $observacaoGuia
     * @return self
     */
    public function setObservacaoGuia($observacaoGuia)
    {
        $this->observacaoGuia = $observacaoGuia;
        return $this;
    }

    /**
     * Gets as valorTotalInformadoGuia
     *
     * @return float
     */
    public function getValorTotalInformadoGuia()
    {
        return $this->valorTotalInformadoGuia;
    }

    /**
     * Sets a new valorTotalInformadoGuia
     *
     * @param float $valorTotalInformadoGuia
     * @return self
     */
    public function setValorTotalInformadoGuia($valorTotalInformadoGuia)
    {
        $this->valorTotalInformadoGuia = $valorTotalInformadoGuia;
        return $this;
    }

    /**
     * Gets as valorTotalProcessadoGuia
     *
     * @return float
     */
    public function getValorTotalProcessadoGuia()
    {
        return $this->valorTotalProcessadoGuia;
    }

    /**
     * Sets a new valorTotalProcessadoGuia
     *
     * @param float $valorTotalProcessadoGuia
     * @return self
     */
    public function setValorTotalProcessadoGuia($valorTotalProcessadoGuia)
    {
        $this->valorTotalProcessadoGuia = $valorTotalProcessadoGuia;
        return $this;
    }

    /**
     * Gets as valorTotalGlosaGuia
     *
     * @return float
     */
    public function getValorTotalGlosaGuia()
    {
        return $this->valorTotalGlosaGuia;
    }

    /**
     * Sets a new valorTotalGlosaGuia
     *
     * @param float $valorTotalGlosaGuia
     * @return self
     */
    public function setValorTotalGlosaGuia($valorTotalGlosaGuia)
    {
        $this->valorTotalGlosaGuia = $valorTotalGlosaGuia;
        return $this;
    }

    /**
     * Gets as valorTotalFranquiaGuia
     *
     * @return float
     */
    public function getValorTotalFranquiaGuia()
    {
        return $this->valorTotalFranquiaGuia;
    }

    /**
     * Sets a new valorTotalFranquiaGuia
     *
     * @param float $valorTotalFranquiaGuia
     * @return self
     */
    public function setValorTotalFranquiaGuia($valorTotalFranquiaGuia)
    {
        $this->valorTotalFranquiaGuia = $valorTotalFranquiaGuia;
        return $this;
    }

    /**
     * Gets as valorTotalLiberadoGuia
     *
     * @return float
     */
    public function getValorTotalLiberadoGuia()
    {
        return $this->valorTotalLiberadoGuia;
    }

    /**
     * Sets a new valorTotalLiberadoGuia
     *
     * @param float $valorTotalLiberadoGuia
     * @return self
     */
    public function setValorTotalLiberadoGuia($valorTotalLiberadoGuia)
    {
        $this->valorTotalLiberadoGuia = $valorTotalLiberadoGuia;
        return $this;
    }


}

