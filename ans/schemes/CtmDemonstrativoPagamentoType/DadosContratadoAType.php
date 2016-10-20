<?php

namespace ans\schemes\CtmDemonstrativoPagamentoType;

/**
 * Class representing DadosContratadoAType
 */
class DadosContratadoAType
{

    /**
     * @property \ans\schemes\CtContratadoDadosType $dadosPrestador
     */
    private $dadosPrestador = null;

    /**
     * @property string $cNES
     */
    private $cNES = null;

    /**
     * Gets as dadosPrestador
     *
     * @return \ans\schemes\CtContratadoDadosType
     */
    public function getDadosPrestador()
    {
        return $this->dadosPrestador;
    }

    /**
     * Sets a new dadosPrestador
     *
     * @param \ans\schemes\CtContratadoDadosType $dadosPrestador
     * @return self
     */
    public function setDadosPrestador(\ans\schemes\CtContratadoDadosType $dadosPrestador)
    {
        $this->dadosPrestador = $dadosPrestador;
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

