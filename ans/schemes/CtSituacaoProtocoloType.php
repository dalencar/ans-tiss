<?php

namespace ans\schemes;

/**
 * Class representing CtSituacaoProtocoloType
 *
 *
 * XSD Type: ct_situacaoProtocolo
 */
class CtSituacaoProtocoloType
{

    /**
     * @property \ans\schemes\CtMotivoGlosaType $mensagemErro
     */
    private $mensagemErro = null;

    /**
     * @property \ans\schemes\CtProtocoloStatusType $situacaoProtocolo
     */
    private $situacaoProtocolo = null;

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
     * Gets as situacaoProtocolo
     *
     * @return \ans\schemes\CtProtocoloStatusType
     */
    public function getSituacaoProtocolo()
    {
        return $this->situacaoProtocolo;
    }

    /**
     * Sets a new situacaoProtocolo
     *
     * @param \ans\schemes\CtProtocoloStatusType $situacaoProtocolo
     * @return self
     */
    public function setSituacaoProtocolo(\ans\schemes\CtProtocoloStatusType $situacaoProtocolo)
    {
        $this->situacaoProtocolo = $situacaoProtocolo;
        return $this;
    }


}

