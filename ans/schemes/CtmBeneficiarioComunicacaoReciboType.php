<?php

namespace ans\schemes;

/**
 * Class representing CtmBeneficiarioComunicacaoReciboType
 *
 *
 * XSD Type: ctm_beneficiarioComunicacaoRecibo
 */
class CtmBeneficiarioComunicacaoReciboType
{

    /**
     * @property string $statusComunicacao
     */
    private $statusComunicacao = null;

    /**
     * @property \ans\schemes\CtmBeneficiarioComunicacaoType $beneficiarioComunicacao
     */
    private $beneficiarioComunicacao = null;

    /**
     * @property \ans\schemes\CtMotivoGlosaType $mensagemErro
     */
    private $mensagemErro = null;

    /**
     * Gets as statusComunicacao
     *
     * @return string
     */
    public function getStatusComunicacao()
    {
        return $this->statusComunicacao;
    }

    /**
     * Sets a new statusComunicacao
     *
     * @param string $statusComunicacao
     * @return self
     */
    public function setStatusComunicacao($statusComunicacao)
    {
        $this->statusComunicacao = $statusComunicacao;
        return $this;
    }

    /**
     * Gets as beneficiarioComunicacao
     *
     * @return \ans\schemes\CtmBeneficiarioComunicacaoType
     */
    public function getBeneficiarioComunicacao()
    {
        return $this->beneficiarioComunicacao;
    }

    /**
     * Sets a new beneficiarioComunicacao
     *
     * @param \ans\schemes\CtmBeneficiarioComunicacaoType $beneficiarioComunicacao
     * @return self
     */
    public function setBeneficiarioComunicacao(\ans\schemes\CtmBeneficiarioComunicacaoType $beneficiarioComunicacao)
    {
        $this->beneficiarioComunicacao = $beneficiarioComunicacao;
        return $this;
    }

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


}

