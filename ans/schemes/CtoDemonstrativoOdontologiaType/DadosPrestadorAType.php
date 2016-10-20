<?php

namespace ans\schemes\CtoDemonstrativoOdontologiaType;

/**
 * Class representing DadosPrestadorAType
 */
class DadosPrestadorAType
{

    /**
     * @property string $codigoPrestador
     */
    private $codigoPrestador = null;

    /**
     * @property string $nomePrestador
     */
    private $nomePrestador = null;

    /**
     * @property string $cnpjCPFPrestador
     */
    private $cnpjCPFPrestador = null;

    /**
     * Gets as codigoPrestador
     *
     * @return string
     */
    public function getCodigoPrestador()
    {
        return $this->codigoPrestador;
    }

    /**
     * Sets a new codigoPrestador
     *
     * @param string $codigoPrestador
     * @return self
     */
    public function setCodigoPrestador($codigoPrestador)
    {
        $this->codigoPrestador = $codigoPrestador;
        return $this;
    }

    /**
     * Gets as nomePrestador
     *
     * @return string
     */
    public function getNomePrestador()
    {
        return $this->nomePrestador;
    }

    /**
     * Sets a new nomePrestador
     *
     * @param string $nomePrestador
     * @return self
     */
    public function setNomePrestador($nomePrestador)
    {
        $this->nomePrestador = $nomePrestador;
        return $this;
    }

    /**
     * Gets as cnpjCPFPrestador
     *
     * @return string
     */
    public function getCnpjCPFPrestador()
    {
        return $this->cnpjCPFPrestador;
    }

    /**
     * Sets a new cnpjCPFPrestador
     *
     * @param string $cnpjCPFPrestador
     * @return self
     */
    public function setCnpjCPFPrestador($cnpjCPFPrestador)
    {
        $this->cnpjCPFPrestador = $cnpjCPFPrestador;
        return $this;
    }


}

