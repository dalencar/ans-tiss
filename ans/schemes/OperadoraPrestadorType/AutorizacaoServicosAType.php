<?php

namespace ans\schemes\OperadoraPrestadorType;

/**
 * Class representing AutorizacaoServicosAType
 */
class AutorizacaoServicosAType
{

    /**
     * @property \ans\schemes\CtMotivoGlosaType $mensagemErro
     */
    private $mensagemErro = null;

    /**
     * @property \ans\schemes\CtmAutorizacaoInternacaoType $autorizacaoInternacao
     */
    private $autorizacaoInternacao = null;

    /**
     * @property \ans\schemes\CtmAutorizacaoServicoType $autorizacaoServico
     */
    private $autorizacaoServico = null;

    /**
     * @property \ans\schemes\CtoAutorizacaoServicoType $autorizacaoServicoOdonto
     */
    private $autorizacaoServicoOdonto = null;

    /**
     * @property \ans\schemes\CtmAutorizacaoProrrogacaoType $autorizacaoProrrogacao
     */
    private $autorizacaoProrrogacao = null;

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
     * Gets as autorizacaoInternacao
     *
     * @return \ans\schemes\CtmAutorizacaoInternacaoType
     */
    public function getAutorizacaoInternacao()
    {
        return $this->autorizacaoInternacao;
    }

    /**
     * Sets a new autorizacaoInternacao
     *
     * @param \ans\schemes\CtmAutorizacaoInternacaoType $autorizacaoInternacao
     * @return self
     */
    public function setAutorizacaoInternacao(\ans\schemes\CtmAutorizacaoInternacaoType $autorizacaoInternacao)
    {
        $this->autorizacaoInternacao = $autorizacaoInternacao;
        return $this;
    }

    /**
     * Gets as autorizacaoServico
     *
     * @return \ans\schemes\CtmAutorizacaoServicoType
     */
    public function getAutorizacaoServico()
    {
        return $this->autorizacaoServico;
    }

    /**
     * Sets a new autorizacaoServico
     *
     * @param \ans\schemes\CtmAutorizacaoServicoType $autorizacaoServico
     * @return self
     */
    public function setAutorizacaoServico(\ans\schemes\CtmAutorizacaoServicoType $autorizacaoServico)
    {
        $this->autorizacaoServico = $autorizacaoServico;
        return $this;
    }

    /**
     * Gets as autorizacaoServicoOdonto
     *
     * @return \ans\schemes\CtoAutorizacaoServicoType
     */
    public function getAutorizacaoServicoOdonto()
    {
        return $this->autorizacaoServicoOdonto;
    }

    /**
     * Sets a new autorizacaoServicoOdonto
     *
     * @param \ans\schemes\CtoAutorizacaoServicoType $autorizacaoServicoOdonto
     * @return self
     */
    public function setAutorizacaoServicoOdonto(\ans\schemes\CtoAutorizacaoServicoType $autorizacaoServicoOdonto)
    {
        $this->autorizacaoServicoOdonto = $autorizacaoServicoOdonto;
        return $this;
    }

    /**
     * Gets as autorizacaoProrrogacao
     *
     * @return \ans\schemes\CtmAutorizacaoProrrogacaoType
     */
    public function getAutorizacaoProrrogacao()
    {
        return $this->autorizacaoProrrogacao;
    }

    /**
     * Sets a new autorizacaoProrrogacao
     *
     * @param \ans\schemes\CtmAutorizacaoProrrogacaoType $autorizacaoProrrogacao
     * @return self
     */
    public function setAutorizacaoProrrogacao(\ans\schemes\CtmAutorizacaoProrrogacaoType $autorizacaoProrrogacao)
    {
        $this->autorizacaoProrrogacao = $autorizacaoProrrogacao;
        return $this;
    }


}

