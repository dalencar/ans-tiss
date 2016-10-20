<?php

namespace ans\schemes\CtmConsultaGuiaType;

use ans\schemes\CtContratadoDadosType;

/**
 * Class representing ContratadoExecutanteAType
 */
class ContratadoExecutanteAType extends CtContratadoDadosType
{

    /**
     * @property string $cNES
     */
    private $cNES = null;

    /**
     * Gets as cNES
     *
     * @return string
     */
    public function getCNES()
    {
        return $this->cNES;
    }

    /**
     * Sets a new cNES
     *
     * @param string $cNES
     * @return self
     */
    public function setCNES($cNES)
    {
        $this->cNES = $cNES;
        return $this;
    }


}

