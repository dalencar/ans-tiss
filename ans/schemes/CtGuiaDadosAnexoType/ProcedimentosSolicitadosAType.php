<?php

namespace ans\schemes\CtGuiaDadosAnexoType;

/**
 * Class representing ProcedimentosSolicitadosAType
 */
class ProcedimentosSolicitadosAType
{

    /**
     * @property
     * \ans\schemes\CtGuiaDadosAnexoType\ProcedimentosSolicitadosAType\ProcedimentoSolicitadoAType[]
     * $procedimentoSolicitado
     */
    private $procedimentoSolicitado = null;

    /**
     * Adds as procedimentoSolicitado
     *
     * @return self
     * @param
     * \ans\schemes\CtGuiaDadosAnexoType\ProcedimentosSolicitadosAType\ProcedimentoSolicitadoAType
     * $procedimentoSolicitado
     */
    public function addToProcedimentoSolicitado(\ans\schemes\CtGuiaDadosAnexoType\ProcedimentosSolicitadosAType\ProcedimentoSolicitadoAType $procedimentoSolicitado)
    {
        $this->procedimentoSolicitado[] = $procedimentoSolicitado;
        return $this;
    }

    /**
     * isset procedimentoSolicitado
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProcedimentoSolicitado($index)
    {
        return isset($this->procedimentoSolicitado[$index]);
    }

    /**
     * unset procedimentoSolicitado
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProcedimentoSolicitado($index)
    {
        unset($this->procedimentoSolicitado[$index]);
    }

    /**
     * Gets as procedimentoSolicitado
     *
     * @return
     * \ans\schemes\CtGuiaDadosAnexoType\ProcedimentosSolicitadosAType\ProcedimentoSolicitadoAType[]
     */
    public function getProcedimentoSolicitado()
    {
        return $this->procedimentoSolicitado;
    }

    /**
     * Sets a new procedimentoSolicitado
     *
     * @param
     * \ans\schemes\CtGuiaDadosAnexoType\ProcedimentosSolicitadosAType\ProcedimentoSolicitadoAType[]
     * $procedimentoSolicitado
     * @return self
     */
    public function setProcedimentoSolicitado(array $procedimentoSolicitado)
    {
        $this->procedimentoSolicitado = $procedimentoSolicitado;
        return $this;
    }


}

