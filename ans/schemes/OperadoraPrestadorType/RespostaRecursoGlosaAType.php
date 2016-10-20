<?php

namespace ans\schemes\OperadoraPrestadorType;

/**
 * Class representing RespostaRecursoGlosaAType
 */
class RespostaRecursoGlosaAType
{

    /**
     * @property \ans\schemes\CtMotivoGlosaType $mensagemErro
     */
    private $mensagemErro = null;

    /**
     * @property \ans\schemes\CtRespostaGlosaType $recursoGlosa
     */
    private $recursoGlosa = null;

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
     * Gets as recursoGlosa
     *
     * @return \ans\schemes\CtRespostaGlosaType
     */
    public function getRecursoGlosa()
    {
        return $this->recursoGlosa;
    }

    /**
     * Sets a new recursoGlosa
     *
     * @param \ans\schemes\CtRespostaGlosaType $recursoGlosa
     * @return self
     */
    public function setRecursoGlosa(\ans\schemes\CtRespostaGlosaType $recursoGlosa)
    {
        $this->recursoGlosa = $recursoGlosa;
        return $this;
    }


}

