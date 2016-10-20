<?php

namespace ans\schemes;

/**
 * Class representing CtSituacaoAutorizacaoType
 *
 *
 * XSD Type: ct_situacaoAutorizacao
 */
class CtSituacaoAutorizacaoType
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
     * @property \ans\schemes\CtmAutorizacaoServicoType[] $prorrogacao
     */
    private $prorrogacao = null;

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
     * Adds as prorrogacao
     *
     * @return self
     * @param \ans\schemes\CtmAutorizacaoServicoType $prorrogacao
     */
    public function addToProrrogacao(\ans\schemes\CtmAutorizacaoServicoType $prorrogacao)
    {
        $this->prorrogacao[] = $prorrogacao;
        return $this;
    }

    /**
     * isset prorrogacao
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProrrogacao($index)
    {
        return isset($this->prorrogacao[$index]);
    }

    /**
     * unset prorrogacao
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProrrogacao($index)
    {
        unset($this->prorrogacao[$index]);
    }

    /**
     * Gets as prorrogacao
     *
     * @return \ans\schemes\CtmAutorizacaoServicoType[]
     */
    public function getProrrogacao()
    {
        return $this->prorrogacao;
    }

    /**
     * Sets a new prorrogacao
     *
     * @param \ans\schemes\CtmAutorizacaoServicoType[] $prorrogacao
     * @return self
     */
    public function setProrrogacao(array $prorrogacao)
    {
        $this->prorrogacao = $prorrogacao;
        return $this;
    }


}

