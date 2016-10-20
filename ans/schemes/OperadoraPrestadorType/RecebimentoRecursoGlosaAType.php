<?php

namespace ans\schemes\OperadoraPrestadorType;

/**
 * Class representing RecebimentoRecursoGlosaAType
 */
class RecebimentoRecursoGlosaAType
{

    /**
     * @property \ans\schemes\CtMotivoGlosaType $mensagemErro
     */
    private $mensagemErro = null;

    /**
     * @property \ans\schemes\CtRecursoGlosaRecebimentoType $protocoloRecebimento
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
     * @return \ans\schemes\CtRecursoGlosaRecebimentoType
     */
    public function getProtocoloRecebimento()
    {
        return $this->protocoloRecebimento;
    }

    /**
     * Sets a new protocoloRecebimento
     *
     * @param \ans\schemes\CtRecursoGlosaRecebimentoType $protocoloRecebimento
     * @return self
     */
    public function setProtocoloRecebimento(\ans\schemes\CtRecursoGlosaRecebimentoType $protocoloRecebimento)
    {
        $this->protocoloRecebimento = $protocoloRecebimento;
        return $this;
    }


}

