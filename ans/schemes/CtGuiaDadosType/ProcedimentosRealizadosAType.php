<?php

namespace ans\schemes\CtGuiaDadosType;

/**
 * Class representing ProcedimentosRealizadosAType
 */
class ProcedimentosRealizadosAType
{

    /**
     * @property
     * \ans\schemes\CtGuiaDadosType\ProcedimentosRealizadosAType\ProcedimentoRealizadoAType[]
     * $procedimentoRealizado
     */
    private $procedimentoRealizado = null;

    /**
     * Adds as procedimentoRealizado
     *
     * @return self
     * @param
     * \ans\schemes\CtGuiaDadosType\ProcedimentosRealizadosAType\ProcedimentoRealizadoAType
     * $procedimentoRealizado
     */
    public function addToProcedimentoRealizado(\ans\schemes\CtGuiaDadosType\ProcedimentosRealizadosAType\ProcedimentoRealizadoAType $procedimentoRealizado)
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
     * @return
     * \ans\schemes\CtGuiaDadosType\ProcedimentosRealizadosAType\ProcedimentoRealizadoAType[]
     */
    public function getProcedimentoRealizado()
    {
        return $this->procedimentoRealizado;
    }

    /**
     * Sets a new procedimentoRealizado
     *
     * @param
     * \ans\schemes\CtGuiaDadosType\ProcedimentosRealizadosAType\ProcedimentoRealizadoAType[]
     * $procedimentoRealizado
     * @return self
     */
    public function setProcedimentoRealizado(array $procedimentoRealizado)
    {
        $this->procedimentoRealizado = $procedimentoRealizado;
        return $this;
    }


}

