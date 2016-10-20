<?php

namespace ans\schemes\CtGuiaDadosType\ProcedimentosRealizadosAType;

use ans\schemes\CtProcedimentoExecutadoType;

/**
 * Class representing ProcedimentoRealizadoAType
 */
class ProcedimentoRealizadoAType extends CtProcedimentoExecutadoType
{

    /**
     * @property
     * \ans\schemes\CtGuiaDadosType\ProcedimentosRealizadosAType\ProcedimentoRealizadoAType\GlosasProcedimentoAType
     * $glosasProcedimento
     */
    private $glosasProcedimento = null;

    /**
     * Gets as glosasProcedimento
     *
     * @return
     * \ans\schemes\CtGuiaDadosType\ProcedimentosRealizadosAType\ProcedimentoRealizadoAType\GlosasProcedimentoAType
     */
    public function getGlosasProcedimento()
    {
        return $this->glosasProcedimento;
    }

    /**
     * Sets a new glosasProcedimento
     *
     * @param
     * \ans\schemes\CtGuiaDadosType\ProcedimentosRealizadosAType\ProcedimentoRealizadoAType\GlosasProcedimentoAType
     * $glosasProcedimento
     * @return self
     */
    public function setGlosasProcedimento(\ans\schemes\CtGuiaDadosType\ProcedimentosRealizadosAType\ProcedimentoRealizadoAType\GlosasProcedimentoAType $glosasProcedimento)
    {
        $this->glosasProcedimento = $glosasProcedimento;
        return $this;
    }


}

