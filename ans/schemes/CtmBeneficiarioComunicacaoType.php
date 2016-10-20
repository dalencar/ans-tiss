<?php

namespace ans\schemes;

/**
 * Class representing CtmBeneficiarioComunicacaoType
 *
 *
 * XSD Type: ctm_beneficiarioComunicacao
 */
class CtmBeneficiarioComunicacaoType
{

    /**
     * @property \ans\schemes\CtBeneficiarioDadosType $dadosBeneficiario
     */
    private $dadosBeneficiario = null;

    /**
     * @property \DateTime $dataEvento
     */
    private $dataEvento = null;

    /**
     * @property string $tipoEvento
     */
    private $tipoEvento = null;

    /**
     * @property \ans\schemes\CtmBeneficiarioComunicacaoType\DadosInternacaoAType
     * $dadosInternacao
     */
    private $dadosInternacao = null;

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
     * Gets as dataEvento
     *
     * @return \DateTime
     */
    public function getDataEvento()
    {
        return $this->dataEvento;
    }

    /**
     * Sets a new dataEvento
     *
     * @param \DateTime $dataEvento
     * @return self
     */
    public function setDataEvento(\DateTime $dataEvento)
    {
        $this->dataEvento = $dataEvento;
        return $this;
    }

    /**
     * Gets as tipoEvento
     *
     * @return string
     */
    public function getTipoEvento()
    {
        return $this->tipoEvento;
    }

    /**
     * Sets a new tipoEvento
     *
     * @param string $tipoEvento
     * @return self
     */
    public function setTipoEvento($tipoEvento)
    {
        $this->tipoEvento = $tipoEvento;
        return $this;
    }

    /**
     * Gets as dadosInternacao
     *
     * @return \ans\schemes\CtmBeneficiarioComunicacaoType\DadosInternacaoAType
     */
    public function getDadosInternacao()
    {
        return $this->dadosInternacao;
    }

    /**
     * Sets a new dadosInternacao
     *
     * @param \ans\schemes\CtmBeneficiarioComunicacaoType\DadosInternacaoAType
     * $dadosInternacao
     * @return self
     */
    public function setDadosInternacao(\ans\schemes\CtmBeneficiarioComunicacaoType\DadosInternacaoAType $dadosInternacao)
    {
        $this->dadosInternacao = $dadosInternacao;
        return $this;
    }


}

