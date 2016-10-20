<?php

namespace ans\schemes;

/**
 * Class representing CtmSolicitacaoLoteType
 *
 *
 * XSD Type: ctm_solicitacaoLote
 */
class CtmSolicitacaoLoteType
{

    /**
     * @property \ans\schemes\CtmSpSadtSolicitacaoGuiaType $solicitacaoSPSADT
     */
    private $solicitacaoSPSADT = null;

    /**
     * @property \ans\schemes\CtmInternacaoSolicitacaoGuiaType $solicitacaoInternacao
     */
    private $solicitacaoInternacao = null;

    /**
     * @property \ans\schemes\CtmProrrogacaoSolicitacaoGuiaType $solicitacaoProrrogacao
     */
    private $solicitacaoProrrogacao = null;

    /**
     * @property \ans\schemes\CtoOdontoSolicitacaoGuiaType $solicitacaoOdontologia
     */
    private $solicitacaoOdontologia = null;

    /**
     * Gets as solicitacaoSPSADT
     *
     * @return \ans\schemes\CtmSpSadtSolicitacaoGuiaType
     */
    public function getSolicitacaoSPSADT()
    {
        return $this->solicitacaoSPSADT;
    }

    /**
     * Sets a new solicitacaoSPSADT
     *
     * @param \ans\schemes\CtmSpSadtSolicitacaoGuiaType $solicitacaoSPSADT
     * @return self
     */
    public function setSolicitacaoSPSADT(\ans\schemes\CtmSpSadtSolicitacaoGuiaType $solicitacaoSPSADT)
    {
        $this->solicitacaoSPSADT = $solicitacaoSPSADT;
        return $this;
    }

    /**
     * Gets as solicitacaoInternacao
     *
     * @return \ans\schemes\CtmInternacaoSolicitacaoGuiaType
     */
    public function getSolicitacaoInternacao()
    {
        return $this->solicitacaoInternacao;
    }

    /**
     * Sets a new solicitacaoInternacao
     *
     * @param \ans\schemes\CtmInternacaoSolicitacaoGuiaType $solicitacaoInternacao
     * @return self
     */
    public function setSolicitacaoInternacao(\ans\schemes\CtmInternacaoSolicitacaoGuiaType $solicitacaoInternacao)
    {
        $this->solicitacaoInternacao = $solicitacaoInternacao;
        return $this;
    }

    /**
     * Gets as solicitacaoProrrogacao
     *
     * @return \ans\schemes\CtmProrrogacaoSolicitacaoGuiaType
     */
    public function getSolicitacaoProrrogacao()
    {
        return $this->solicitacaoProrrogacao;
    }

    /**
     * Sets a new solicitacaoProrrogacao
     *
     * @param \ans\schemes\CtmProrrogacaoSolicitacaoGuiaType $solicitacaoProrrogacao
     * @return self
     */
    public function setSolicitacaoProrrogacao(\ans\schemes\CtmProrrogacaoSolicitacaoGuiaType $solicitacaoProrrogacao)
    {
        $this->solicitacaoProrrogacao = $solicitacaoProrrogacao;
        return $this;
    }

    /**
     * Gets as solicitacaoOdontologia
     *
     * @return \ans\schemes\CtoOdontoSolicitacaoGuiaType
     */
    public function getSolicitacaoOdontologia()
    {
        return $this->solicitacaoOdontologia;
    }

    /**
     * Sets a new solicitacaoOdontologia
     *
     * @param \ans\schemes\CtoOdontoSolicitacaoGuiaType $solicitacaoOdontologia
     * @return self
     */
    public function setSolicitacaoOdontologia(\ans\schemes\CtoOdontoSolicitacaoGuiaType $solicitacaoOdontologia)
    {
        $this->solicitacaoOdontologia = $solicitacaoOdontologia;
        return $this;
    }


}

