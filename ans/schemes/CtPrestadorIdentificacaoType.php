<?php

namespace ans\schemes;

/**
 * Class representing CtPrestadorIdentificacaoType
 *
 *
 * XSD Type: ct_prestadorIdentificacao
 */
class CtPrestadorIdentificacaoType
{

    /**
     * @property string $cNPJ
     */
    private $cNPJ = null;

    /**
     * @property string $cPF
     */
    private $cPF = null;

    /**
     * @property string $codigoPrestadorNaOperadora
     */
    private $codigoPrestadorNaOperadora = null;

    /**
     * Gets as cNPJ
     *
     * @return string
     */
    public function getCNPJ()
    {
        return $this->cNPJ;
    }

    /**
     * Sets a new cNPJ
     *
     * @param string $cNPJ
     * @return self
     */
    public function setCNPJ($cNPJ)
    {
        $this->cNPJ = $cNPJ;
        return $this;
    }

    /**
     * Gets as cPF
     *
     * @return string
     */
    public function getCPF()
    {
        return $this->cPF;
    }

    /**
     * Sets a new cPF
     *
     * @param string $cPF
     * @return self
     */
    public function setCPF($cPF)
    {
        $this->cPF = $cPF;
        return $this;
    }

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


}

