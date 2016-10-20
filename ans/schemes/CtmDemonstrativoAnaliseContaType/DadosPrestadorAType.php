<?php

namespace ans\schemes\CtmDemonstrativoAnaliseContaType;

/**
 * Class representing DadosPrestadorAType
 */
class DadosPrestadorAType
{

    /**
     * @property \ans\schemes\CtContratadoDadosType $dadosContratado
     */
    private $dadosContratado = null;

    /**
     * @property string $cNES
     */
    private $cNES = null;

    /**
     * Gets as dadosContratado
     *
     * @return \ans\schemes\CtContratadoDadosType
     */
    public function getDadosContratado()
    {
        return $this->dadosContratado;
    }

    /**
     * Sets a new dadosContratado
     *
     * @param \ans\schemes\CtContratadoDadosType $dadosContratado
     * @return self
     */
    public function setDadosContratado(\ans\schemes\CtContratadoDadosType $dadosContratado)
    {
        $this->dadosContratado = $dadosContratado;
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

