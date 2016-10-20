<?php

namespace ans\schemes\CtProtocoloAnexoStatusType;

/**
 * Class representing LoteAnexoAType
 */
class LoteAnexoAType
{

    /**
     * @property \ans\schemes\CtLoteAnexoStatusType $detalheLoteAnexo
     */
    private $detalheLoteAnexo = null;

    /**
     * @property \ans\schemes\CtMotivoGlosaType $mensagemErro
     */
    private $mensagemErro = null;

    /**
     * Gets as detalheLoteAnexo
     *
     * @return \ans\schemes\CtLoteAnexoStatusType
     */
    public function getDetalheLoteAnexo()
    {
        return $this->detalheLoteAnexo;
    }

    /**
     * Sets a new detalheLoteAnexo
     *
     * @param \ans\schemes\CtLoteAnexoStatusType $detalheLoteAnexo
     * @return self
     */
    public function setDetalheLoteAnexo(\ans\schemes\CtLoteAnexoStatusType $detalheLoteAnexo)
    {
        $this->detalheLoteAnexo = $detalheLoteAnexo;
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

