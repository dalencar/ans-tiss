<?php

namespace ans\schemes\CtmInternacaoResumoGuiaType;

/**
 * Class representing ProcedimentosExecutadosAType
 */
class ProcedimentosExecutadosAType
{

    /**
     * @property \ans\schemes\CtProcedimentoExecutadoIntType[] $procedimentoExecutado
     */
    private $procedimentoExecutado = null;

    /**
     * Adds as procedimentoExecutado
     *
     * @return self
     * @param \ans\schemes\CtProcedimentoExecutadoIntType $procedimentoExecutado
     */
    public function addToProcedimentoExecutado(\ans\schemes\CtProcedimentoExecutadoIntType $procedimentoExecutado)
    {
        $this->procedimentoExecutado[] = $procedimentoExecutado;
        return $this;
    }

    /**
     * isset procedimentoExecutado
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProcedimentoExecutado($index)
    {
        return isset($this->procedimentoExecutado[$index]);
    }

    /**
     * unset procedimentoExecutado
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProcedimentoExecutado($index)
    {
        unset($this->procedimentoExecutado[$index]);
    }

    /**
     * Gets as procedimentoExecutado
     *
     * @return \ans\schemes\CtProcedimentoExecutadoIntType[]
     */
    public function getProcedimentoExecutado()
    {
        return $this->procedimentoExecutado;
    }

    /**
     * Sets a new procedimentoExecutado
     *
     * @param \ans\schemes\CtProcedimentoExecutadoIntType[] $procedimentoExecutado
     * @return self
     */
    public function setProcedimentoExecutado(array $procedimentoExecutado)
    {
        $this->procedimentoExecutado = $procedimentoExecutado;
        return $this;
    }


}

