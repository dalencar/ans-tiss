<?php

namespace ans\schemes\OperadoraPrestadorType;

/**
 * Class representing SituacaoProtocoloAType
 */
class SituacaoProtocoloAType
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
     * @property \ans\schemes\CtProtocoloAnexoStatusType $situacaoProtocoloAnexo
     */
    private $situacaoProtocoloAnexo = null;

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

    /**
     * Gets as situacaoProtocoloAnexo
     *
     * @return \ans\schemes\CtProtocoloAnexoStatusType
     */
    public function getSituacaoProtocoloAnexo()
    {
        return $this->situacaoProtocoloAnexo;
    }

    /**
     * Sets a new situacaoProtocoloAnexo
     *
     * @param \ans\schemes\CtProtocoloAnexoStatusType $situacaoProtocoloAnexo
     * @return self
     */
    public function setSituacaoProtocoloAnexo(\ans\schemes\CtProtocoloAnexoStatusType $situacaoProtocoloAnexo)
    {
        $this->situacaoProtocoloAnexo = $situacaoProtocoloAnexo;
        return $this;
    }


}

