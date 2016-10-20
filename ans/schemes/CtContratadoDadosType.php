<?php

namespace ans\schemes;

/**
 * Class representing CtContratadoDadosType
 *
 *
 * XSD Type: ct_contratadoDados
 */
class CtContratadoDadosType
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
     * @property string $cnpjContratado
     */
    private $cnpjContratado = null;

    /**
     * @property string $nomeContratado
     */
    private $nomeContratado = null;

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

    /**
     * Gets as cnpjContratado
     *
     * @return string
     */
    public function getCnpjContratado()
    {
        return $this->cnpjContratado;
    }

    /**
     * Sets a new cnpjContratado
     *
     * @param string $cnpjContratado
     * @return self
     */
    public function setCnpjContratado($cnpjContratado)
    {
        $this->cnpjContratado = $cnpjContratado;
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


}

