<?php

namespace ans\schemes\OperadoraPrestadorType;

/**
 * Class representing RecebimentoAnexoAType
 */
class RecebimentoAnexoAType
{

    /**
     * @property \ans\schemes\CtMotivoGlosaType $mensagemErro
     */
    private $mensagemErro = null;

    /**
     * @property \ans\schemes\CtAnexoRecebimentoType $protocoloRecebimento
     */
    private $protocoloRecebimento = null;

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
     * Gets as protocoloRecebimento
     *
     * @return \ans\schemes\CtAnexoRecebimentoType
     */
    public function getProtocoloRecebimento()
    {
        return $this->protocoloRecebimento;
    }

    /**
     * Sets a new protocoloRecebimento
     *
     * @param \ans\schemes\CtAnexoRecebimentoType $protocoloRecebimento
     * @return self
     */
    public function setProtocoloRecebimento(\ans\schemes\CtAnexoRecebimentoType $protocoloRecebimento)
    {
        $this->protocoloRecebimento = $protocoloRecebimento;
        return $this;
    }


}

