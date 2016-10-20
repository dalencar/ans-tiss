<?php

namespace ans\schemes\CtmAutorizacaoRadioType;

/**
 * Class representing ProcedimentosComplementaresAType
 */
class ProcedimentosComplementaresAType
{

    /**
     * @property \ans\schemes\CtProcedimentosComplementaresType[]
     * $procedimentoComplementar
     */
    private $procedimentoComplementar = null;

    /**
     * Adds as procedimentoComplementar
     *
     * @return self
     * @param \ans\schemes\CtProcedimentosComplementaresType $procedimentoComplementar
     */
    public function addToProcedimentoComplementar(\ans\schemes\CtProcedimentosComplementaresType $procedimentoComplementar)
    {
        $this->procedimentoComplementar[] = $procedimentoComplementar;
        return $this;
    }

    /**
     * isset procedimentoComplementar
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProcedimentoComplementar($index)
    {
        return isset($this->procedimentoComplementar[$index]);
    }

    /**
     * unset procedimentoComplementar
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProcedimentoComplementar($index)
    {
        unset($this->procedimentoComplementar[$index]);
    }

    /**
     * Gets as procedimentoComplementar
     *
     * @return \ans\schemes\CtProcedimentosComplementaresType[]
     */
    public function getProcedimentoComplementar()
    {
        return $this->procedimentoComplementar;
    }

    /**
     * Sets a new procedimentoComplementar
     *
     * @param \ans\schemes\CtProcedimentosComplementaresType[]
     * $procedimentoComplementar
     * @return self
     */
    public function setProcedimentoComplementar(array $procedimentoComplementar)
    {
        $this->procedimentoComplementar = $procedimentoComplementar;
        return $this;
    }


}

