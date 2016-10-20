<?php

namespace ans\schemes\CtProtocoloStatusType;

/**
 * Class representing LoteAType
 */
class LoteAType
{

    /**
     * @property \ans\schemes\CtLoteStatusType $detalheLote
     */
    private $detalheLote = null;

    /**
     * @property \ans\schemes\CtMotivoGlosaType $mensagemErro
     */
    private $mensagemErro = null;

    /**
     * Gets as detalheLote
     *
     * @return \ans\schemes\CtLoteStatusType
     */
    public function getDetalheLote()
    {
        return $this->detalheLote;
    }

    /**
     * Sets a new detalheLote
     *
     * @param \ans\schemes\CtLoteStatusType $detalheLote
     * @return self
     */
    public function setDetalheLote(\ans\schemes\CtLoteStatusType $detalheLote)
    {
        $this->detalheLote = $detalheLote;
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

