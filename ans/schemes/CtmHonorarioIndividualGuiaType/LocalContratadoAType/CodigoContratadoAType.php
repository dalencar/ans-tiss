<?php

namespace ans\schemes\CtmHonorarioIndividualGuiaType\LocalContratadoAType;

/**
 * Class representing CodigoContratadoAType
 */
class CodigoContratadoAType
{

    /**
     * @property string $codigoNaOperadora
     */
    private $codigoNaOperadora = null;

    /**
     * @property string $cnpjLocalExecutante
     */
    private $cnpjLocalExecutante = null;

    /**
     * Gets as codigoNaOperadora
     *
     * @return string
     */
    public function getCodigoNaOperadora()
    {
        return $this->codigoNaOperadora;
    }

    /**
     * Sets a new codigoNaOperadora
     *
     * @param string $codigoNaOperadora
     * @return self
     */
    public function setCodigoNaOperadora($codigoNaOperadora)
    {
        $this->codigoNaOperadora = $codigoNaOperadora;
        return $this;
    }

    /**
     * Gets as cnpjLocalExecutante
     *
     * @return string
     */
    public function getCnpjLocalExecutante()
    {
        return $this->cnpjLocalExecutante;
    }

    /**
     * Sets a new cnpjLocalExecutante
     *
     * @param string $cnpjLocalExecutante
     * @return self
     */
    public function setCnpjLocalExecutante($cnpjLocalExecutante)
    {
        $this->cnpjLocalExecutante = $cnpjLocalExecutante;
        return $this;
    }


}

