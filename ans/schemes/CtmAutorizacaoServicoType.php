<?php

namespace ans\schemes;

/**
 * Class representing CtmAutorizacaoServicoType
 *
 *
 * XSD Type: ctm_autorizacaoServico
 */
class CtmAutorizacaoServicoType
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
     * @property \ans\schemes\CtmAutorizacaoServicoType\PrestadorAutorizadoAType
     * $prestadorAutorizado
     */
    private $prestadorAutorizado = null;

    /**
     * @property string $statusSolicitacao
     */
    private $statusSolicitacao = null;

    /**
     * @property \ans\schemes\CtMotivoGlosaType[] $motivosNegativa
     */
    private $motivosNegativa = null;

    /**
     * @property \ans\schemes\CtmAutorizacaoServicoType\ServicosAutorizadosAType[]
     * $servicosAutorizados
     */
    private $servicosAutorizados = null;

    /**
     * @property string $observacao
     */
    private $observacao = null;

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
     * Gets as prestadorAutorizado
     *
     * @return \ans\schemes\CtmAutorizacaoServicoType\PrestadorAutorizadoAType
     */
    public function getPrestadorAutorizado()
    {
        return $this->prestadorAutorizado;
    }

    /**
     * Sets a new prestadorAutorizado
     *
     * @param \ans\schemes\CtmAutorizacaoServicoType\PrestadorAutorizadoAType
     * $prestadorAutorizado
     * @return self
     */
    public function setPrestadorAutorizado(\ans\schemes\CtmAutorizacaoServicoType\PrestadorAutorizadoAType $prestadorAutorizado)
    {
        $this->prestadorAutorizado = $prestadorAutorizado;
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
     * Adds as servicosAutorizados
     *
     * @return self
     * @param \ans\schemes\CtmAutorizacaoServicoType\ServicosAutorizadosAType
     * $servicosAutorizados
     */
    public function addToServicosAutorizados(\ans\schemes\CtmAutorizacaoServicoType\ServicosAutorizadosAType $servicosAutorizados)
    {
        $this->servicosAutorizados[] = $servicosAutorizados;
        return $this;
    }

    /**
     * isset servicosAutorizados
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetServicosAutorizados($index)
    {
        return isset($this->servicosAutorizados[$index]);
    }

    /**
     * unset servicosAutorizados
     *
     * @param scalar $index
     * @return void
     */
    public function unsetServicosAutorizados($index)
    {
        unset($this->servicosAutorizados[$index]);
    }

    /**
     * Gets as servicosAutorizados
     *
     * @return \ans\schemes\CtmAutorizacaoServicoType\ServicosAutorizadosAType[]
     */
    public function getServicosAutorizados()
    {
        return $this->servicosAutorizados;
    }

    /**
     * Sets a new servicosAutorizados
     *
     * @param \ans\schemes\CtmAutorizacaoServicoType\ServicosAutorizadosAType[]
     * $servicosAutorizados
     * @return self
     */
    public function setServicosAutorizados(array $servicosAutorizados)
    {
        $this->servicosAutorizados = $servicosAutorizados;
        return $this;
    }

    /**
     * Gets as observacao
     *
     * @return string
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * Sets a new observacao
     *
     * @param string $observacao
     * @return self
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;
        return $this;
    }


}

