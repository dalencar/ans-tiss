<?php

namespace ans\schemes\CtmInternacaoResumoGuiaType;

/**
 * Class representing DadosExecutanteAType
 */
class DadosExecutanteAType
{

    /**
     * @property \ans\schemes\CtContratadoDadosType $contratadoExecutante
     */
    private $contratadoExecutante = null;

    /**
     * @property string $cNES
     */
    private $cNES = null;

    /**
     * Gets as contratadoExecutante
     *
     * @return \ans\schemes\CtContratadoDadosType
     */
    public function getContratadoExecutante()
    {
        return $this->contratadoExecutante;
    }

    /**
     * Sets a new contratadoExecutante
     *
     * @param \ans\schemes\CtContratadoDadosType $contratadoExecutante
     * @return self
     */
    public function setContratadoExecutante(\ans\schemes\CtContratadoDadosType $contratadoExecutante)
    {
        $this->contratadoExecutante = $contratadoExecutante;
        return $this;
    }

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

