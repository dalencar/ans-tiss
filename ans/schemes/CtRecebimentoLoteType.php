<?php

namespace ans\schemes;

/**
 * Class representing CtRecebimentoLoteType
 *
 *
 * XSD Type: ct_recebimentoLote
 */
class CtRecebimentoLoteType
{

    /**
     * @property \ans\schemes\CtMotivoGlosaType $mensagemErro
     */
    private $mensagemErro = null;

    /**
     * @property \ans\schemes\CtProtocoloRecebimentoType $protocoloRecebimento
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
     * @return \ans\schemes\CtProtocoloRecebimentoType
     */
    public function getProtocoloRecebimento()
    {
        return $this->protocoloRecebimento;
    }

    /**
     * Sets a new protocoloRecebimento
     *
     * @param \ans\schemes\CtProtocoloRecebimentoType $protocoloRecebimento
     * @return self
     */
    public function setProtocoloRecebimento(\ans\schemes\CtProtocoloRecebimentoType $protocoloRecebimento)
    {
        $this->protocoloRecebimento = $protocoloRecebimento;
        return $this;
    }


}

