<?php

namespace ans\schemes;

/**
 * Class representing CtoAutorizacaoServicoType
 *
 *
 * XSD Type: cto_autorizacaoServico
 */
class CtoAutorizacaoServicoType
{

    /**
     * @property \ans\schemes\CtAutorizacaoDadosType $dadosAutorizacao
     */
    private $dadosAutorizacao = null;

    /**
     * @property string $numeroCarteira
     */
    private $numeroCarteira = null;

    /**
     * @property string $nomeBeneficiario
     */
    private $nomeBeneficiario = null;

    /**
     * @property string $numeroCNS
     */
    private $numeroCNS = null;

    /**
     * @property mixed $identificadorBeneficiario
     */
    private $identificadorBeneficiario = null;

    /**
     * @property string $statusSolicitacao
     */
    private $statusSolicitacao = null;

    /**
     * @property \ans\schemes\CtContratadoDadosType $prestadorAutorizado
     */
    private $prestadorAutorizado = null;

    /**
     * @property \ans\schemes\CtoAutorizacaoServicoType\ProcedimentosAutorizadosAType[]
     * $procedimentosAutorizados
     */
    private $procedimentosAutorizados = null;

    /**
     * @property \ans\schemes\CtMotivoGlosaType[] $motivosNegativa
     */
    private $motivosNegativa = null;

    /**
     * Gets as dadosAutorizacao
     *
     * @return \ans\schemes\CtAutorizacaoDadosType
     */
    public function getDadosAutorizacao()
    {
        return $this->dadosAutorizacao;
    }

    /**
     * Sets a new dadosAutorizacao
     *
     * @param \ans\schemes\CtAutorizacaoDadosType $dadosAutorizacao
     * @return self
     */
    public function setDadosAutorizacao(\ans\schemes\CtAutorizacaoDadosType $dadosAutorizacao)
    {
        $this->dadosAutorizacao = $dadosAutorizacao;
        return $this;
    }

    /**
     * Gets as numeroCarteira
     *
     * @return string
     */
    public function getNumeroCarteira()
    {
        return $this->numeroCarteira;
    }

    /**
     * Sets a new numeroCarteira
     *
     * @param string $numeroCarteira
     * @return self
     */
    public function setNumeroCarteira($numeroCarteira)
    {
        $this->numeroCarteira = $numeroCarteira;
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
     * Gets as numeroCNS
     *
     * @return string
     */
    public function getNumeroCNS()
    {
        return $this->numeroCNS;
    }

    /**
     * Sets a new numeroCNS
     *
     * @param string $numeroCNS
     * @return self
     */
    public function setNumeroCNS($numeroCNS)
    {
        $this->numeroCNS = $numeroCNS;
        return $this;
    }

    /**
     * Gets as identificadorBeneficiario
     *
     * @return mixed
     */
    public function getIdentificadorBeneficiario()
    {
        return $this->identificadorBeneficiario;
    }

    /**
     * Sets a new identificadorBeneficiario
     *
     * @param mixed $identificadorBeneficiario
     * @return self
     */
    public function setIdentificadorBeneficiario($identificadorBeneficiario)
    {
        $this->identificadorBeneficiario = $identificadorBeneficiario;
        return $this;
    }

    /**
     * Gets as statusSolicitacao
     *
     * @return string
     */
    public function getStatusSolicitacao()
    {
        return $this->statusSolicitacao;
    }

    /**
     * Sets a new statusSolicitacao
     *
     * @param string $statusSolicitacao
     * @return self
     */
    public function setStatusSolicitacao($statusSolicitacao)
    {
        $this->statusSolicitacao = $statusSolicitacao;
        return $this;
    }

    /**
     * Gets as prestadorAutorizado
     *
     * @return \ans\schemes\CtContratadoDadosType
     */
    public function getPrestadorAutorizado()
    {
        return $this->prestadorAutorizado;
    }

    /**
     * Sets a new prestadorAutorizado
     *
     * @param \ans\schemes\CtContratadoDadosType $prestadorAutorizado
     * @return self
     */
    public function setPrestadorAutorizado(\ans\schemes\CtContratadoDadosType $prestadorAutorizado)
    {
        $this->prestadorAutorizado = $prestadorAutorizado;
        return $this;
    }

    /**
     * Adds as procedimentosAutorizados
     *
     * @return self
     * @param \ans\schemes\CtoAutorizacaoServicoType\ProcedimentosAutorizadosAType
     * $procedimentosAutorizados
     */
    public function addToProcedimentosAutorizados(\ans\schemes\CtoAutorizacaoServicoType\ProcedimentosAutorizadosAType $procedimentosAutorizados)
    {
        $this->procedimentosAutorizados[] = $procedimentosAutorizados;
        return $this;
    }

    /**
     * isset procedimentosAutorizados
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProcedimentosAutorizados($index)
    {
        return isset($this->procedimentosAutorizados[$index]);
    }

    /**
     * unset procedimentosAutorizados
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProcedimentosAutorizados($index)
    {
        unset($this->procedimentosAutorizados[$index]);
    }

    /**
     * Gets as procedimentosAutorizados
     *
     * @return \ans\schemes\CtoAutorizacaoServicoType\ProcedimentosAutorizadosAType[]
     */
    public function getProcedimentosAutorizados()
    {
        return $this->procedimentosAutorizados;
    }

    /**
     * Sets a new procedimentosAutorizados
     *
     * @param \ans\schemes\CtoAutorizacaoServicoType\ProcedimentosAutorizadosAType[]
     * $procedimentosAutorizados
     * @return self
     */
    public function setProcedimentosAutorizados(array $procedimentosAutorizados)
    {
        $this->procedimentosAutorizados = $procedimentosAutorizados;
        return $this;
    }

    /**
     * Adds as motivoNegativa
     *
     * @return self
     * @param \ans\schemes\CtMotivoGlosaType $motivoNegativa
     */
    public function addToMotivosNegativa(\ans\schemes\CtMotivoGlosaType $motivoNegativa)
    {
        $this->motivosNegativa[] = $motivoNegativa;
        return $this;
    }

    /**
     * isset motivosNegativa
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMotivosNegativa($index)
    {
        return isset($this->motivosNegativa[$index]);
    }

    /**
     * unset motivosNegativa
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMotivosNegativa($index)
    {
        unset($this->motivosNegativa[$index]);
    }

    /**
     * Gets as motivosNegativa
     *
     * @return \ans\schemes\CtMotivoGlosaType[]
     */
    public function getMotivosNegativa()
    {
        return $this->motivosNegativa;
    }

    /**
     * Sets a new motivosNegativa
     *
     * @param \ans\schemes\CtMotivoGlosaType[] $motivosNegativa
     * @return self
     */
    public function setMotivosNegativa(array $motivosNegativa)
    {
        $this->motivosNegativa = $motivosNegativa;
        return $this;
    }


}

