<?php

namespace ans\schemes\OperadoraPrestadorType\SituacaoAutorizacaoAType;

/**
 * Class representing AutorizacaoProrrogacaoAType
 */
class AutorizacaoProrrogacaoAType
{

    /**
     * @property \ans\schemes\CtmAutorizacaoServicoType[] $autorizaServico
     */
    private $autorizaServico = null;

    /**
     * @property string $tipoAcomodacaoAutorizada
     */
    private $tipoAcomodacaoAutorizada = null;

    /**
     * @property integer $quantidadeAutorizada
     */
    private $quantidadeAutorizada = null;

    /**
     * @property \ans\schemes\CtMotivoGlosaType $motivoNegativa
     */
    private $motivoNegativa = null;

    /**
     * Adds as autorizaServico
     *
     * @return self
     * @param \ans\schemes\CtmAutorizacaoServicoType $autorizaServico
     */
    public function addToAutorizaServico(\ans\schemes\CtmAutorizacaoServicoType $autorizaServico)
    {
        $this->autorizaServico[] = $autorizaServico;
        return $this;
    }

    /**
     * isset autorizaServico
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAutorizaServico($index)
    {
        return isset($this->autorizaServico[$index]);
    }

    /**
     * unset autorizaServico
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAutorizaServico($index)
    {
        unset($this->autorizaServico[$index]);
    }

    /**
     * Gets as autorizaServico
     *
     * @return \ans\schemes\CtmAutorizacaoServicoType[]
     */
    public function getAutorizaServico()
    {
        return $this->autorizaServico;
    }

    /**
     * Sets a new autorizaServico
     *
     * @param \ans\schemes\CtmAutorizacaoServicoType[] $autorizaServico
     * @return self
     */
    public function setAutorizaServico(array $autorizaServico)
    {
        $this->autorizaServico = $autorizaServico;
        return $this;
    }

    /**
     * Gets as tipoAcomodacaoAutorizada
     *
     * @return string
     */
    public function getTipoAcomodacaoAutorizada()
    {
        return $this->tipoAcomodacaoAutorizada;
    }

    /**
     * Sets a new tipoAcomodacaoAutorizada
     *
     * @param string $tipoAcomodacaoAutorizada
     * @return self
     */
    public function setTipoAcomodacaoAutorizada($tipoAcomodacaoAutorizada)
    {
        $this->tipoAcomodacaoAutorizada = $tipoAcomodacaoAutorizada;
        return $this;
    }

    /**
     * Gets as quantidadeAutorizada
     *
     * @return integer
     */
    public function getQuantidadeAutorizada()
    {
        return $this->quantidadeAutorizada;
    }

    /**
     * Sets a new quantidadeAutorizada
     *
     * @param integer $quantidadeAutorizada
     * @return self
     */
    public function setQuantidadeAutorizada($quantidadeAutorizada)
    {
        $this->quantidadeAutorizada = $quantidadeAutorizada;
        return $this;
    }

    /**
     * Gets as motivoNegativa
     *
     * @return \ans\schemes\CtMotivoGlosaType
     */
    public function getMotivoNegativa()
    {
        return $this->motivoNegativa;
    }

    /**
     * Sets a new motivoNegativa
     *
     * @param \ans\schemes\CtMotivoGlosaType $motivoNegativa
     * @return self
     */
    public function setMotivoNegativa(\ans\schemes\CtMotivoGlosaType $motivoNegativa)
    {
        $this->motivoNegativa = $motivoNegativa;
        return $this;
    }


}

