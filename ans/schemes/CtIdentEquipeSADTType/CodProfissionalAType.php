<?php

namespace ans\schemes\CtIdentEquipeSADTType;

/**
 * Class representing CodProfissionalAType
 */
class CodProfissionalAType
{

    /**
     * @property string $codigoPrestadorNaOperadora
     */
    private $codigoPrestadorNaOperadora = null;

    /**
     * @property string $cpfContratado
     */
    private $cpfContratado = null;

    /**
     * Gets as codigoPrestadorNaOperadora
     *
     * @return string
     */
    public function getCodigoPrestadorNaOperadora()
    {
        return $this->codigoPrestadorNaOperadora;
    }

    /**
     * Sets a new codigoPrestadorNaOperadora
     *
     * @param string $codigoPrestadorNaOperadora
     * @return self
     */
    public function setCodigoPrestadorNaOperadora($codigoPrestadorNaOperadora)
    {
        $this->codigoPrestadorNaOperadora = $codigoPrestadorNaOperadora;
        return $this;
    }

    /**
     * Gets as cpfContratado
     *
     * @return string
     */
    public function getCpfContratado()
    {
        return $this->cpfContratado;
    }

    /**
     * Sets a new cpfContratado
     *
     * @param string $cpfContratado
     * @return self
     */
    public function setCpfContratado($cpfContratado)
    {
        $this->cpfContratado = $cpfContratado;
        return $this;
    }


}

