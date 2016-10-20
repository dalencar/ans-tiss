<?php

namespace ans\schemes;

/**
 * Class representing CtDemonstrativoRetornoType
 *
 *
 * XSD Type: ct_demonstrativoRetorno
 */
class CtDemonstrativoRetornoType
{

    /**
     * @property \ans\schemes\CtMotivoGlosaType $mensagemErro
     */
    private $mensagemErro = null;

    /**
     * @property \ans\schemes\CtmDemonstrativoAnaliseContaType[]
     * $demonstrativoAnaliseConta
     */
    private $demonstrativoAnaliseConta = null;

    /**
     * @property \ans\schemes\CtmDemonstrativoPagamentoType[] $demonstrativoPagamento
     */
    private $demonstrativoPagamento = null;

    /**
     * @property \ans\schemes\CtoDemonstrativoOdontologiaType[]
     * $demonstrativoPagamentoOdonto
     */
    private $demonstrativoPagamentoOdonto = null;

    /**
     * Gets as mensagemErro
     *
     * @return \ans\schemes\CtMotivoGlosaType
     */
    public function getMensagemErro()
    {
        return $this->mensagemErro;
    }

    /**
     * Sets a new mensagemErro
     *
     * @param \ans\schemes\CtMotivoGlosaType $mensagemErro
     * @return self
     */
    public function setMensagemErro(\ans\schemes\CtMotivoGlosaType $mensagemErro)
    {
        $this->mensagemErro = $mensagemErro;
        return $this;
    }

    /**
     * Adds as demonstrativoAnaliseConta
     *
     * @return self
     * @param \ans\schemes\CtmDemonstrativoAnaliseContaType $demonstrativoAnaliseConta
     */
    public function addToDemonstrativoAnaliseConta(\ans\schemes\CtmDemonstrativoAnaliseContaType $demonstrativoAnaliseConta)
    {
        $this->demonstrativoAnaliseConta[] = $demonstrativoAnaliseConta;
        return $this;
    }

    /**
     * isset demonstrativoAnaliseConta
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDemonstrativoAnaliseConta($index)
    {
        return isset($this->demonstrativoAnaliseConta[$index]);
    }

    /**
     * unset demonstrativoAnaliseConta
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDemonstrativoAnaliseConta($index)
    {
        unset($this->demonstrativoAnaliseConta[$index]);
    }

    /**
     * Gets as demonstrativoAnaliseConta
     *
     * @return \ans\schemes\CtmDemonstrativoAnaliseContaType[]
     */
    public function getDemonstrativoAnaliseConta()
    {
        return $this->demonstrativoAnaliseConta;
    }

    /**
     * Sets a new demonstrativoAnaliseConta
     *
     * @param \ans\schemes\CtmDemonstrativoAnaliseContaType[]
     * $demonstrativoAnaliseConta
     * @return self
     */
    public function setDemonstrativoAnaliseConta(array $demonstrativoAnaliseConta)
    {
        $this->demonstrativoAnaliseConta = $demonstrativoAnaliseConta;
        return $this;
    }

    /**
     * Adds as demonstrativoPagamento
     *
     * @return self
     * @param \ans\schemes\CtmDemonstrativoPagamentoType $demonstrativoPagamento
     */
    public function addToDemonstrativoPagamento(\ans\schemes\CtmDemonstrativoPagamentoType $demonstrativoPagamento)
    {
        $this->demonstrativoPagamento[] = $demonstrativoPagamento;
        return $this;
    }

    /**
     * isset demonstrativoPagamento
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDemonstrativoPagamento($index)
    {
        return isset($this->demonstrativoPagamento[$index]);
    }

    /**
     * unset demonstrativoPagamento
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDemonstrativoPagamento($index)
    {
        unset($this->demonstrativoPagamento[$index]);
    }

    /**
     * Gets as demonstrativoPagamento
     *
     * @return \ans\schemes\CtmDemonstrativoPagamentoType[]
     */
    public function getDemonstrativoPagamento()
    {
        return $this->demonstrativoPagamento;
    }

    /**
     * Sets a new demonstrativoPagamento
     *
     * @param \ans\schemes\CtmDemonstrativoPagamentoType[] $demonstrativoPagamento
     * @return self
     */
    public function setDemonstrativoPagamento(array $demonstrativoPagamento)
    {
        $this->demonstrativoPagamento = $demonstrativoPagamento;
        return $this;
    }

    /**
     * Adds as demonstrativoPagamentoOdonto
     *
     * @return self
     * @param \ans\schemes\CtoDemonstrativoOdontologiaType
     * $demonstrativoPagamentoOdonto
     */
    public function addToDemonstrativoPagamentoOdonto(\ans\schemes\CtoDemonstrativoOdontologiaType $demonstrativoPagamentoOdonto)
    {
        $this->demonstrativoPagamentoOdonto[] = $demonstrativoPagamentoOdonto;
        return $this;
    }

    /**
     * isset demonstrativoPagamentoOdonto
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDemonstrativoPagamentoOdonto($index)
    {
        return isset($this->demonstrativoPagamentoOdonto[$index]);
    }

    /**
     * unset demonstrativoPagamentoOdonto
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDemonstrativoPagamentoOdonto($index)
    {
        unset($this->demonstrativoPagamentoOdonto[$index]);
    }

    /**
     * Gets as demonstrativoPagamentoOdonto
     *
     * @return \ans\schemes\CtoDemonstrativoOdontologiaType[]
     */
    public function getDemonstrativoPagamentoOdonto()
    {
        return $this->demonstrativoPagamentoOdonto;
    }

    /**
     * Sets a new demonstrativoPagamentoOdonto
     *
     * @param \ans\schemes\CtoDemonstrativoOdontologiaType[]
     * $demonstrativoPagamentoOdonto
     * @return self
     */
    public function setDemonstrativoPagamentoOdonto(array $demonstrativoPagamentoOdonto)
    {
        $this->demonstrativoPagamentoOdonto = $demonstrativoPagamentoOdonto;
        return $this;
    }


}

