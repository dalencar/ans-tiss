<?php

namespace ans\schemes\CtMonitoramentoGuiaType;

/**
 * Class representing DadosContratadoExecutanteAType
 */
class DadosContratadoExecutanteAType
{

    /**
     * @property string $cNES
     */
    private $cNES = null;

    /**
     * @property string $identificadorExecutante
     */
    private $identificadorExecutante = null;

    /**
     * @property string $codigoCNPJCPF
     */
    private $codigoCNPJCPF = null;

    /**
     * @property string $municipioExecutante
     */
    private $municipioExecutante = null;

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

    /**
     * Gets as identificadorExecutante
     *
     * @return string
     */
    public function getIdentificadorExecutante()
    {
        return $this->identificadorExecutante;
    }

    /**
     * Sets a new identificadorExecutante
     *
     * @param string $identificadorExecutante
     * @return self
     */
    public function setIdentificadorExecutante($identificadorExecutante)
    {
        $this->identificadorExecutante = $identificadorExecutante;
        return $this;
    }

    /**
     * Gets as codigoCNPJCPF
     *
     * @return string
     */
    public function getCodigoCNPJCPF()
    {
        return $this->codigoCNPJCPF;
    }

    /**
     * Sets a new codigoCNPJCPF
     *
     * @param string $codigoCNPJCPF
     * @return self
     */
    public function setCodigoCNPJCPF($codigoCNPJCPF)
    {
        $this->codigoCNPJCPF = $codigoCNPJCPF;
        return $this;
    }

    /**
     * Gets as municipioExecutante
     *
     * @return string
     */
    public function getMunicipioExecutante()
    {
        return $this->municipioExecutante;
    }

    /**
     * Sets a new municipioExecutante
     *
     * @param string $municipioExecutante
     * @return self
     */
    public function setMunicipioExecutante($municipioExecutante)
    {
        $this->municipioExecutante = $municipioExecutante;
        return $this;
    }


}

