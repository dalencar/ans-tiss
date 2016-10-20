<?php

namespace ans\schemes;

/**
 * Class representing PrestadorOperadoraType
 *
 *
 * XSD Type: prestadorOperadora
 */
class PrestadorOperadoraType
{

    /**
     * @property \ans\schemes\CtmGuiaLoteType $loteGuias
     */
    private $loteGuias = null;

    /**
     * @property \ans\schemes\CtAnexoLoteType $loteAnexos
     */
    private $loteAnexos = null;

    /**
     * @property \ans\schemes\CtDemonstrativoSolicitacaoType
     * $solicitacaoDemonstrativoRetorno
     */
    private $solicitacaoDemonstrativoRetorno = null;

    /**
     * @property \ans\schemes\CtProtocoloSolicitacaoStatusType
     * $solicitacaoStatusProtocolo
     */
    private $solicitacaoStatusProtocolo = null;

    /**
     * @property \ans\schemes\CtmSolicitacaoLoteType $solicitacaoProcedimento
     */
    private $solicitacaoProcedimento = null;

    /**
     * @property \ans\schemes\CtAutorizacaoSolicitaStatusType
     * $solicitaStatusAutorizacao
     */
    private $solicitaStatusAutorizacao = null;

    /**
     * @property \ans\schemes\CtElegibilidadeVerificaType $verificaElegibilidade
     */
    private $verificaElegibilidade = null;

    /**
     * @property \ans\schemes\CtGuiaCancelamentoType $cancelaGuia
     */
    private $cancelaGuia = null;

    /**
     * @property \ans\schemes\CtmBeneficiarioComunicacaoType $comunicacaoInternacao
     */
    private $comunicacaoInternacao = null;

    /**
     * @property \ans\schemes\CtGuiaRecursoLoteType $recursoGlosa
     */
    private $recursoGlosa = null;

    /**
     * @property \ans\schemes\CtProtocoloSolicitacaoStatusType
     * $solicitacaoStatusRecursoGlosa
     */
    private $solicitacaoStatusRecursoGlosa = null;

    /**
     * Gets as loteGuias
     *
     * @return \ans\schemes\CtmGuiaLoteType
     */
    public function getLoteGuias()
    {
        return $this->loteGuias;
    }

    /**
     * Sets a new loteGuias
     *
     * @param \ans\schemes\CtmGuiaLoteType $loteGuias
     * @return self
     */
    public function setLoteGuias(\ans\schemes\CtmGuiaLoteType $loteGuias)
    {
        $this->loteGuias = $loteGuias;
        return $this;
    }

    /**
     * Gets as loteAnexos
     *
     * @return \ans\schemes\CtAnexoLoteType
     */
    public function getLoteAnexos()
    {
        return $this->loteAnexos;
    }

    /**
     * Sets a new loteAnexos
     *
     * @param \ans\schemes\CtAnexoLoteType $loteAnexos
     * @return self
     */
    public function setLoteAnexos(\ans\schemes\CtAnexoLoteType $loteAnexos)
    {
        $this->loteAnexos = $loteAnexos;
        return $this;
    }

    /**
     * Gets as solicitacaoDemonstrativoRetorno
     *
     * @return \ans\schemes\CtDemonstrativoSolicitacaoType
     */
    public function getSolicitacaoDemonstrativoRetorno()
    {
        return $this->solicitacaoDemonstrativoRetorno;
    }

    /**
     * Sets a new solicitacaoDemonstrativoRetorno
     *
     * @param \ans\schemes\CtDemonstrativoSolicitacaoType
     * $solicitacaoDemonstrativoRetorno
     * @return self
     */
    public function setSolicitacaoDemonstrativoRetorno(\ans\schemes\CtDemonstrativoSolicitacaoType $solicitacaoDemonstrativoRetorno)
    {
        $this->solicitacaoDemonstrativoRetorno = $solicitacaoDemonstrativoRetorno;
        return $this;
    }

    /**
     * Gets as solicitacaoStatusProtocolo
     *
     * @return \ans\schemes\CtProtocoloSolicitacaoStatusType
     */
    public function getSolicitacaoStatusProtocolo()
    {
        return $this->solicitacaoStatusProtocolo;
    }

    /**
     * Sets a new solicitacaoStatusProtocolo
     *
     * @param \ans\schemes\CtProtocoloSolicitacaoStatusType $solicitacaoStatusProtocolo
     * @return self
     */
    public function setSolicitacaoStatusProtocolo(\ans\schemes\CtProtocoloSolicitacaoStatusType $solicitacaoStatusProtocolo)
    {
        $this->solicitacaoStatusProtocolo = $solicitacaoStatusProtocolo;
        return $this;
    }

    /**
     * Gets as solicitacaoProcedimento
     *
     * @return \ans\schemes\CtmSolicitacaoLoteType
     */
    public function getSolicitacaoProcedimento()
    {
        return $this->solicitacaoProcedimento;
    }

    /**
     * Sets a new solicitacaoProcedimento
     *
     * @param \ans\schemes\CtmSolicitacaoLoteType $solicitacaoProcedimento
     * @return self
     */
    public function setSolicitacaoProcedimento(\ans\schemes\CtmSolicitacaoLoteType $solicitacaoProcedimento)
    {
        $this->solicitacaoProcedimento = $solicitacaoProcedimento;
        return $this;
    }

    /**
     * Gets as solicitaStatusAutorizacao
     *
     * @return \ans\schemes\CtAutorizacaoSolicitaStatusType
     */
    public function getSolicitaStatusAutorizacao()
    {
        return $this->solicitaStatusAutorizacao;
    }

    /**
     * Sets a new solicitaStatusAutorizacao
     *
     * @param \ans\schemes\CtAutorizacaoSolicitaStatusType $solicitaStatusAutorizacao
     * @return self
     */
    public function setSolicitaStatusAutorizacao(\ans\schemes\CtAutorizacaoSolicitaStatusType $solicitaStatusAutorizacao)
    {
        $this->solicitaStatusAutorizacao = $solicitaStatusAutorizacao;
        return $this;
    }

    /**
     * Gets as verificaElegibilidade
     *
     * @return \ans\schemes\CtElegibilidadeVerificaType
     */
    public function getVerificaElegibilidade()
    {
        return $this->verificaElegibilidade;
    }

    /**
     * Sets a new verificaElegibilidade
     *
     * @param \ans\schemes\CtElegibilidadeVerificaType $verificaElegibilidade
     * @return self
     */
    public function setVerificaElegibilidade(\ans\schemes\CtElegibilidadeVerificaType $verificaElegibilidade)
    {
        $this->verificaElegibilidade = $verificaElegibilidade;
        return $this;
    }

    /**
     * Gets as cancelaGuia
     *
     * @return \ans\schemes\CtGuiaCancelamentoType
     */
    public function getCancelaGuia()
    {
        return $this->cancelaGuia;
    }

    /**
     * Sets a new cancelaGuia
     *
     * @param \ans\schemes\CtGuiaCancelamentoType $cancelaGuia
     * @return self
     */
    public function setCancelaGuia(\ans\schemes\CtGuiaCancelamentoType $cancelaGuia)
    {
        $this->cancelaGuia = $cancelaGuia;
        return $this;
    }

    /**
     * Gets as comunicacaoInternacao
     *
     * @return \ans\schemes\CtmBeneficiarioComunicacaoType
     */
    public function getComunicacaoInternacao()
    {
        return $this->comunicacaoInternacao;
    }

    /**
     * Sets a new comunicacaoInternacao
     *
     * @param \ans\schemes\CtmBeneficiarioComunicacaoType $comunicacaoInternacao
     * @return self
     */
    public function setComunicacaoInternacao(\ans\schemes\CtmBeneficiarioComunicacaoType $comunicacaoInternacao)
    {
        $this->comunicacaoInternacao = $comunicacaoInternacao;
        return $this;
    }

    /**
     * Gets as recursoGlosa
     *
     * @return \ans\schemes\CtGuiaRecursoLoteType
     */
    public function getRecursoGlosa()
    {
        return $this->recursoGlosa;
    }

    /**
     * Sets a new recursoGlosa
     *
     * @param \ans\schemes\CtGuiaRecursoLoteType $recursoGlosa
     * @return self
     */
    public function setRecursoGlosa(\ans\schemes\CtGuiaRecursoLoteType $recursoGlosa)
    {
        $this->recursoGlosa = $recursoGlosa;
        return $this;
    }

    /**
     * Gets as solicitacaoStatusRecursoGlosa
     *
     * @return \ans\schemes\CtProtocoloSolicitacaoStatusType
     */
    public function getSolicitacaoStatusRecursoGlosa()
    {
        return $this->solicitacaoStatusRecursoGlosa;
    }

    /**
     * Sets a new solicitacaoStatusRecursoGlosa
     *
     * @param \ans\schemes\CtProtocoloSolicitacaoStatusType
     * $solicitacaoStatusRecursoGlosa
     * @return self
     */
    public function setSolicitacaoStatusRecursoGlosa(\ans\schemes\CtProtocoloSolicitacaoStatusType $solicitacaoStatusRecursoGlosa)
    {
        $this->solicitacaoStatusRecursoGlosa = $solicitacaoStatusRecursoGlosa;
        return $this;
    }


}

