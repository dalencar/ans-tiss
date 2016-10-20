<?php

namespace ans\schemes\CtProcedimentoAutorizadoType;

/**
 * Class representing MotivosNegativaAType
 */
class MotivosNegativaAType
{

    /**
     * @property \ans\schemes\CtMotivoGlosaType[] $motivoNegativa
     */
    private $motivoNegativa = null;

    /**
     * Adds as motivoNegativa
     *
     * @return self
     * @param \ans\schemes\CtMotivoGlosaType $motivoNegativa
     */
    public function addToMotivoNegativa(\ans\schemes\CtMotivoGlosaType $motivoNegativa)
    {
        $this->motivoNegativa[] = $motivoNegativa;
        return $this;
    }

    /**
     * isset motivoNegativa
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMotivoNegativa($index)
    {
        return isset($this->motivoNegativa[$index]);
    }

    /**
     * unset motivoNegativa
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMotivoNegativa($index)
    {
        unset($this->motivoNegativa[$index]);
    }

    /**
     * Gets as motivoNegativa
     *
     * @return \ans\schemes\CtMotivoGlosaType[]
     */
    public function getMotivoNegativa()
    {
        return $this->motivoNegativa;
    }

    /**
     * Sets a new motivoNegativa
     *
     * @param \ans\schemes\CtMotivoGlosaType[] $motivoNegativa
     * @return self
     */
    public function setMotivoNegativa(array $motivoNegativa)
    {
        $this->motivoNegativa = $motivoNegativa;
        return $this;
    }


}

