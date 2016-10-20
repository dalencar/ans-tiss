<?php

namespace ans\schemes;

/**
 * Class representing CtReciboComunicacaoType
 *
 *
 * XSD Type: ct_reciboComunicacao
 */
class CtReciboComunicacaoType
{

    /**
     * @property \ans\schemes\CtMotivoGlosaType $mensagemErro
     */
    private $mensagemErro = null;

    /**
     * @property \ans\schemes\CtmBeneficiarioComunicacaoReciboType $reciboComunicacao
     */
    private $reciboComunicacao = null;

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
     * Gets as reciboComunicacao
     *
     * @return \ans\schemes\CtmBeneficiarioComunicacaoReciboType
     */
    public function getReciboComunicacao()
    {
        return $this->reciboComunicacao;
    }

    /**
     * Sets a new reciboComunicacao
     *
     * @param \ans\schemes\CtmBeneficiarioComunicacaoReciboType $reciboComunicacao
     * @return self
     */
    public function setReciboComunicacao(\ans\schemes\CtmBeneficiarioComunicacaoReciboType $reciboComunicacao)
    {
        $this->reciboComunicacao = $reciboComunicacao;
        return $this;
    }


}

