<?php

namespace ans\schemes\CtmSpSadtGuiaType;

/**
 * Class representing DadosExecutanteAType
 */
class DadosExecutanteAType
{

    /**
     * @property string $codigonaOperadora
     */
    private $codigonaOperadora = null;

    /**
     * @property string $nomeContratado
     */
    private $nomeContratado = null;

    /**
     * @property string $cNES
     */
    private $cNES = null;

    /**
     * Gets as codigonaOperadora
     *
     * @return string
     */
    public function getCodigonaOperadora()
    {
        return $this->codigonaOperadora;
    }

    /**
     * Sets a new codigonaOperadora
     *
     * @param string $codigonaOperadora
     * @return self
     */
    public function setCodigonaOperadora($codigonaOperadora)
    {
        $this->codigonaOperadora = $codigonaOperadora;
        return $this;
    }

    /**
     * Gets as nomeContratado
     *
     * @return string
     */
    public function getNomeContratado()
    {
        return $this->nomeContratado;
    }

    /**
     * Sets a new nomeContratado
     *
     * @param string $nomeContratado
     * @return self
     */
    public function setNomeContratado($nomeContratado)
    {
        $this->nomeContratado = $nomeContratado;
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

