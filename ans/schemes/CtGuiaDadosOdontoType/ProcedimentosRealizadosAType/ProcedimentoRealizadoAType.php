<?php

namespace ans\schemes\CtGuiaDadosOdontoType\ProcedimentosRealizadosAType;

use ans\schemes\CtProcedimentoExecutadoOdontoType;

/**
 * Class representing ProcedimentoRealizadoAType
 */
class ProcedimentoRealizadoAType extends CtProcedimentoExecutadoOdontoType
{

    /**
     * @property
     * \ans\schemes\CtGuiaDadosOdontoType\ProcedimentosRealizadosAType\ProcedimentoRealizadoAType\GlosasProcedimentoAType
     * $glosasProcedimento
     */
    private $glosasProcedimento = null;

    /**
     * Gets as glosasProcedimento
     *
     * @return
     * \ans\schemes\CtGuiaDadosOdontoType\ProcedimentosRealizadosAType\ProcedimentoRealizadoAType\GlosasProcedimentoAType
     */
    public function getGlosasProcedimento()
    {
        return $this->glosasProcedimento;
    }

    /**
     * Sets a new glosasProcedimento
     *
     * @param
     * \ans\schemes\CtGuiaDadosOdontoType\ProcedimentosRealizadosAType\ProcedimentoRealizadoAType\GlosasProcedimentoAType
     * $glosasProcedimento
     * @return self
     */
    public function setGlosasProcedimento(\ans\schemes\CtGuiaDadosOdontoType\ProcedimentosRealizadosAType\ProcedimentoRealizadoAType\GlosasProcedimentoAType $glosasProcedimento)
    {
        $this->glosasProcedimento = $glosasProcedimento;
        return $this;
    }


}

