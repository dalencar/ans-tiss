<?php

namespace ans\schemes\CtmHonorarioIndividualGuiaType;

/**
 * Class representing ProcedimentosRealizadosAType
 */
class ProcedimentosRealizadosAType
{

    /**
     * @property \ans\schemes\CtProcedimentoExecutadoHonorIndivType[]
     * $procedimentoRealizado
     */
    private $procedimentoRealizado = null;

    /**
     * Adds as procedimentoRealizado
     *
     * @return self
     * @param \ans\schemes\CtProcedimentoExecutadoHonorIndivType $procedimentoRealizado
     */
    public function addToProcedimentoRealizado(\ans\schemes\CtProcedimentoExecutadoHonorIndivType $procedimentoRealizado)
    {
        $this->procedimentoRealizado[] = $procedimentoRealizado;
        return $this;
    }

    /**
     * isset procedimentoRealizado
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProcedimentoRealizado($index)
    {
        return isset($this->procedimentoRealizado[$index]);
    }

    /**
     * unset procedimentoRealizado
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProcedimentoRealizado($index)
    {
        unset($this->procedimentoRealizado[$index]);
    }

    /**
     * Gets as procedimentoRealizado
     *
     * @return \ans\schemes\CtProcedimentoExecutadoHonorIndivType[]
     */
    public function getProcedimentoRealizado()
    {
        return $this->procedimentoRealizado;
    }

    /**
     * Sets a new procedimentoRealizado
     *
     * @param \ans\schemes\CtProcedimentoExecutadoHonorIndivType[]
     * $procedimentoRealizado
     * @return self
     */
    public function setProcedimentoRealizado(array $procedimentoRealizado)
    {
        $this->procedimentoRealizado = $procedimentoRealizado;
        return $this;
    }


}

