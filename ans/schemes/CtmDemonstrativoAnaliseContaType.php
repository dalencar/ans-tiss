<?php

namespace ans\schemes;

/**
 * Class representing CtmDemonstrativoAnaliseContaType
 *
 *
 * XSD Type: ctm_demonstrativoAnaliseConta
 */
class CtmDemonstrativoAnaliseContaType
{

    /**
     * @property \ans\schemes\CtDemonstrativoCabecalhoType $cabecalhoDemonstrativo
     */
    private $cabecalhoDemonstrativo = null;

    /**
     * @property \ans\schemes\CtmDemonstrativoAnaliseContaType\DadosPrestadorAType
     * $dadosPrestador
     */
    private $dadosPrestador = null;

    /**
     * @property
     * \ans\schemes\CtmDemonstrativoAnaliseContaType\DadosContaAType\DadosProtocoloAType[]
     * $dadosConta
     */
    private $dadosConta = null;

    /**
     * @property float $valorInformadoGeral
     */
    private $valorInformadoGeral = null;

    /**
     * @property float $valorProcessadoGeral
     */
    private $valorProcessadoGeral = null;

    /**
     * @property float $valorLiberadoGeral
     */
    private $valorLiberadoGeral = null;

    /**
     * @property float $valorGlosaGeral
     */
    private $valorGlosaGeral = null;

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
     * Gets as dadosPrestador
     *
     * @return \ans\schemes\CtmDemonstrativoAnaliseContaType\DadosPrestadorAType
     */
    public function getDadosPrestador()
    {
        return $this->dadosPrestador;
    }

    /**
     * Sets a new dadosPrestador
     *
     * @param \ans\schemes\CtmDemonstrativoAnaliseContaType\DadosPrestadorAType
     * $dadosPrestador
     * @return self
     */
    public function setDadosPrestador(\ans\schemes\CtmDemonstrativoAnaliseContaType\DadosPrestadorAType $dadosPrestador)
    {
        $this->dadosPrestador = $dadosPrestador;
        return $this;
    }

    /**
     * Adds as dadosProtocolo
     *
     * @return self
     * @param
     * \ans\schemes\CtmDemonstrativoAnaliseContaType\DadosContaAType\DadosProtocoloAType
     * $dadosProtocolo
     */
    public function addToDadosConta(\ans\schemes\CtmDemonstrativoAnaliseContaType\DadosContaAType\DadosProtocoloAType $dadosProtocolo)
    {
        $this->dadosConta[] = $dadosProtocolo;
        return $this;
    }

    /**
     * isset dadosConta
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDadosConta($index)
    {
        return isset($this->dadosConta[$index]);
    }

    /**
     * unset dadosConta
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDadosConta($index)
    {
        unset($this->dadosConta[$index]);
    }

    /**
     * Gets as dadosConta
     *
     * @return
     * \ans\schemes\CtmDemonstrativoAnaliseContaType\DadosContaAType\DadosProtocoloAType[]
     */
    public function getDadosConta()
    {
        return $this->dadosConta;
    }

    /**
     * Sets a new dadosConta
     *
     * @param
     * \ans\schemes\CtmDemonstrativoAnaliseContaType\DadosContaAType\DadosProtocoloAType[]
     * $dadosConta
     * @return self
     */
    public function setDadosConta(array $dadosConta)
    {
        $this->dadosConta = $dadosConta;
        return $this;
    }

    /**
     * Gets as valorInformadoGeral
     *
     * @return float
     */
    public function getValorInformadoGeral()
    {
        return $this->valorInformadoGeral;
    }

    /**
     * Sets a new valorInformadoGeral
     *
     * @param float $valorInformadoGeral
     * @return self
     */
    public function setValorInformadoGeral($valorInformadoGeral)
    {
        $this->valorInformadoGeral = $valorInformadoGeral;
        return $this;
    }

    /**
     * Gets as valorProcessadoGeral
     *
     * @return float
     */
    public function getValorProcessadoGeral()
    {
        return $this->valorProcessadoGeral;
    }

    /**
     * Sets a new valorProcessadoGeral
     *
     * @param float $valorProcessadoGeral
     * @return self
     */
    public function setValorProcessadoGeral($valorProcessadoGeral)
    {
        $this->valorProcessadoGeral = $valorProcessadoGeral;
        return $this;
    }

    /**
     * Gets as valorLiberadoGeral
     *
     * @return float
     */
    public function getValorLiberadoGeral()
    {
        return $this->valorLiberadoGeral;
    }

    /**
     * Sets a new valorLiberadoGeral
     *
     * @param float $valorLiberadoGeral
     * @return self
     */
    public function setValorLiberadoGeral($valorLiberadoGeral)
    {
        $this->valorLiberadoGeral = $valorLiberadoGeral;
        return $this;
    }

    /**
     * Gets as valorGlosaGeral
     *
     * @return float
     */
    public function getValorGlosaGeral()
    {
        return $this->valorGlosaGeral;
    }

    /**
     * Sets a new valorGlosaGeral
     *
     * @param float $valorGlosaGeral
     * @return self
     */
    public function setValorGlosaGeral($valorGlosaGeral)
    {
        $this->valorGlosaGeral = $valorGlosaGeral;
        return $this;
    }


}

