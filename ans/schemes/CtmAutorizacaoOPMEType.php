<?php

namespace ans\schemes;

/**
 * Class representing CtmAutorizacaoOPMEType
 *
 *
 * XSD Type: ctm_autorizacaoOPME
 */
class CtmAutorizacaoOPMEType
{

    /**
     * @property \ans\schemes\CtAutorizacaoDadosType $dadosAutorizacao
     */
    private $dadosAutorizacao = null;

    /**
     * @property \ans\schemes\CtBeneficiarioDadosType $dadosBeneficiario
     */
    private $dadosBeneficiario = null;

    /**
     * @property string $statusSolicitacao
     */
    private $statusSolicitacao = null;

    /**
     * @property \ans\schemes\CtMotivoGlosaType[] $motivosNegativa
     */
    private $motivosNegativa = null;

    /**
     * @property \ans\schemes\CtContratadoDadosType $prestadorAutorizado
     */
    private $prestadorAutorizado = null;

    /**
     * @property \ans\schemes\CtmAutorizacaoOPMEType\ServicosAutorizadosOPMEAType[]
     * $servicosAutorizadosOPME
     */
    private $servicosAutorizadosOPME = null;

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
     * Adds as servicosAutorizadosOPME
     *
     * @return self
     * @param \ans\schemes\CtmAutorizacaoOPMEType\ServicosAutorizadosOPMEAType
     * $servicosAutorizadosOPME
     */
    public function addToServicosAutorizadosOPME(\ans\schemes\CtmAutorizacaoOPMEType\ServicosAutorizadosOPMEAType $servicosAutorizadosOPME)
    {
        $this->servicosAutorizadosOPME[] = $servicosAutorizadosOPME;
        return $this;
    }

    /**
     * isset servicosAutorizadosOPME
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetServicosAutorizadosOPME($index)
    {
        return isset($this->servicosAutorizadosOPME[$index]);
    }

    /**
     * unset servicosAutorizadosOPME
     *
     * @param scalar $index
     * @return void
     */
    public function unsetServicosAutorizadosOPME($index)
    {
        unset($this->servicosAutorizadosOPME[$index]);
    }

    /**
     * Gets as servicosAutorizadosOPME
     *
     * @return \ans\schemes\CtmAutorizacaoOPMEType\ServicosAutorizadosOPMEAType[]
     */
    public function getServicosAutorizadosOPME()
    {
        return $this->servicosAutorizadosOPME;
    }

    /**
     * Sets a new servicosAutorizadosOPME
     *
     * @param \ans\schemes\CtmAutorizacaoOPMEType\ServicosAutorizadosOPMEAType[]
     * $servicosAutorizadosOPME
     * @return self
     */
    public function setServicosAutorizadosOPME(array $servicosAutorizadosOPME)
    {
        $this->servicosAutorizadosOPME = $servicosAutorizadosOPME;
        return $this;
    }


}

