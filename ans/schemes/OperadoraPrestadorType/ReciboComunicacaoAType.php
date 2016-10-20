<?php

namespace ans\schemes\OperadoraPrestadorType;

/**
 * Class representing ReciboComunicacaoAType
 */
class ReciboComunicacaoAType
{

    /**
     * @property \ans\schemes\CtMotivoGlosaType $mensagemErro
     */
    private $mensagemErro = null;

    /**
     * @property \ans\schemes\CtmBeneficiarioComunicacaoReciboType
     * $reciboComunicacaoDetalhe
     */
    private $reciboComunicacaoDetalhe = null;

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
     * Gets as reciboComunicacaoDetalhe
     *
     * @return \ans\schemes\CtmBeneficiarioComunicacaoReciboType
     */
    public function getReciboComunicacaoDetalhe()
    {
        return $this->reciboComunicacaoDetalhe;
    }

    /**
     * Sets a new reciboComunicacaoDetalhe
     *
     * @param \ans\schemes\CtmBeneficiarioComunicacaoReciboType
     * $reciboComunicacaoDetalhe
     * @return self
     */
    public function setReciboComunicacaoDetalhe(\ans\schemes\CtmBeneficiarioComunicacaoReciboType $reciboComunicacaoDetalhe)
    {
        $this->reciboComunicacaoDetalhe = $reciboComunicacaoDetalhe;
        return $this;
    }


}

