<?php

namespace ans\schemes;

/**
 * Class representing CtAutorizacaoSolicitaStatusType
 *
 *
 * XSD Type: ct_autorizacaoSolicitaStatus
 */
class CtAutorizacaoSolicitaStatusType
{

    /**
     * @property \ans\schemes\CtGuiaCabecalhoType $identificacaoSolicitacao
     */
    private $identificacaoSolicitacao = null;

    /**
     * @property \ans\schemes\CtBeneficiarioDadosType $dadosBeneficiario
     */
    private $dadosBeneficiario = null;

    /**
     * @property \ans\schemes\CtContratadoDadosType $dadosContratado
     */
    private $dadosContratado = null;

    /**
     * Gets as identificacaoSolicitacao
     *
     * @return \ans\schemes\CtGuiaCabecalhoType
     */
    public function getIdentificacaoSolicitacao()
    {
        return $this->identificacaoSolicitacao;
    }

    /**
     * Sets a new identificacaoSolicitacao
     *
     * @param \ans\schemes\CtGuiaCabecalhoType $identificacaoSolicitacao
     * @return self
     */
    public function setIdentificacaoSolicitacao(\ans\schemes\CtGuiaCabecalhoType $identificacaoSolicitacao)
    {
        $this->identificacaoSolicitacao = $identificacaoSolicitacao;
        return $this;
    }

    /**
     * Gets as dadosBeneficiario
     *
     * @return \ans\schemes\CtBeneficiarioDadosType
     */
    public function getDadosBeneficiario()
    {
        return $this->dadosBeneficiario;
    }

    /**
     * Sets a new dadosBeneficiario
     *
     * @param \ans\schemes\CtBeneficiarioDadosType $dadosBeneficiario
     * @return self
     */
    public function setDadosBeneficiario(\ans\schemes\CtBeneficiarioDadosType $dadosBeneficiario)
    {
        $this->dadosBeneficiario = $dadosBeneficiario;
        return $this;
    }

    /**
     * Gets as dadosContratado
     *
     * @return \ans\schemes\CtContratadoDadosType
     */
    public function getDadosContratado()
    {
        return $this->dadosContratado;
    }

    /**
     * Sets a new dadosContratado
     *
     * @param \ans\schemes\CtContratadoDadosType $dadosContratado
     * @return self
     */
    public function setDadosContratado(\ans\schemes\CtContratadoDadosType $dadosContratado)
    {
        $this->dadosContratado = $dadosContratado;
        return $this;
    }


}

