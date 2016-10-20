<?php

namespace ans\schemes\OperadoraPrestadorType;

/**
 * Class representing SituacaoAutorizacaoAType
 */
class SituacaoAutorizacaoAType
{

    /**
     * @property \ans\schemes\CtMotivoGlosaType $mensagemErro
     */
    private $mensagemErro = null;

    /**
     * @property \ans\schemes\CtmAutorizacaoServicoType[] $autorizacaoServico
     */
    private $autorizacaoServico = null;

    /**
     * @property
     * \ans\schemes\OperadoraPrestadorType\SituacaoAutorizacaoAType\AutorizacaoProrrogacaoAType
     * $autorizacaoProrrogacao
     */
    private $autorizacaoProrrogacao = null;

    /**
     * @property \ans\schemes\CtoAutorizacaoServicoType[] $autorizacaoOdonto
     */
    private $autorizacaoOdonto = null;

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
     * Adds as autorizacaoServico
     *
     * @return self
     * @param \ans\schemes\CtmAutorizacaoServicoType $autorizacaoServico
     */
    public function addToAutorizacaoServico(\ans\schemes\CtmAutorizacaoServicoType $autorizacaoServico)
    {
        $this->autorizacaoServico[] = $autorizacaoServico;
        return $this;
    }

    /**
     * isset autorizacaoServico
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAutorizacaoServico($index)
    {
        return isset($this->autorizacaoServico[$index]);
    }

    /**
     * unset autorizacaoServico
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAutorizacaoServico($index)
    {
        unset($this->autorizacaoServico[$index]);
    }

    /**
     * Gets as autorizacaoServico
     *
     * @return \ans\schemes\CtmAutorizacaoServicoType[]
     */
    public function getAutorizacaoServico()
    {
        return $this->autorizacaoServico;
    }

    /**
     * Sets a new autorizacaoServico
     *
     * @param \ans\schemes\CtmAutorizacaoServicoType[] $autorizacaoServico
     * @return self
     */
    public function setAutorizacaoServico(array $autorizacaoServico)
    {
        $this->autorizacaoServico = $autorizacaoServico;
        return $this;
    }

    /**
     * Gets as autorizacaoProrrogacao
     *
     * @return
     * \ans\schemes\OperadoraPrestadorType\SituacaoAutorizacaoAType\AutorizacaoProrrogacaoAType
     */
    public function getAutorizacaoProrrogacao()
    {
        return $this->autorizacaoProrrogacao;
    }

    /**
     * Sets a new autorizacaoProrrogacao
     *
     * @param
     * \ans\schemes\OperadoraPrestadorType\SituacaoAutorizacaoAType\AutorizacaoProrrogacaoAType
     * $autorizacaoProrrogacao
     * @return self
     */
    public function setAutorizacaoProrrogacao(\ans\schemes\OperadoraPrestadorType\SituacaoAutorizacaoAType\AutorizacaoProrrogacaoAType $autorizacaoProrrogacao)
    {
        $this->autorizacaoProrrogacao = $autorizacaoProrrogacao;
        return $this;
    }

    /**
     * Adds as autorizacaoOdonto
     *
     * @return self
     * @param \ans\schemes\CtoAutorizacaoServicoType $autorizacaoOdonto
     */
    public function addToAutorizacaoOdonto(\ans\schemes\CtoAutorizacaoServicoType $autorizacaoOdonto)
    {
        $this->autorizacaoOdonto[] = $autorizacaoOdonto;
        return $this;
    }

    /**
     * isset autorizacaoOdonto
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAutorizacaoOdonto($index)
    {
        return isset($this->autorizacaoOdonto[$index]);
    }

    /**
     * unset autorizacaoOdonto
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAutorizacaoOdonto($index)
    {
        unset($this->autorizacaoOdonto[$index]);
    }

    /**
     * Gets as autorizacaoOdonto
     *
     * @return \ans\schemes\CtoAutorizacaoServicoType[]
     */
    public function getAutorizacaoOdonto()
    {
        return $this->autorizacaoOdonto;
    }

    /**
     * Sets a new autorizacaoOdonto
     *
     * @param \ans\schemes\CtoAutorizacaoServicoType[] $autorizacaoOdonto
     * @return self
     */
    public function setAutorizacaoOdonto(array $autorizacaoOdonto)
    {
        $this->autorizacaoOdonto = $autorizacaoOdonto;
        return $this;
    }


}

