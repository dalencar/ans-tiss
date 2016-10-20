<?php

namespace ans\schemes;

/**
 * Class representing CtDadosComplementaresBeneficiarioType
 *
 *
 * XSD Type: ct_dadosComplementaresBeneficiario
 */
class CtDadosComplementaresBeneficiarioType
{

    /**
     * @property float $peso
     */
    private $peso = null;

    /**
     * @property float $altura
     */
    private $altura = null;

    /**
     * @property float $superficieCorporal
     */
    private $superficieCorporal = null;

    /**
     * @property integer $idade
     */
    private $idade = null;

    /**
     * @property string $sexo
     */
    private $sexo = null;

    /**
     * Gets as peso
     *
     * @return float
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Sets a new peso
     *
     * @param float $peso
     * @return self
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;
        return $this;
    }

    /**
     * Gets as altura
     *
     * @return float
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Sets a new altura
     *
     * @param float $altura
     * @return self
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
        return $this;
    }

    /**
     * Gets as superficieCorporal
     *
     * @return float
     */
    public function getSuperficieCorporal()
    {
        return $this->superficieCorporal;
    }

    /**
     * Sets a new superficieCorporal
     *
     * @param float $superficieCorporal
     * @return self
     */
    public function setSuperficieCorporal($superficieCorporal)
    {
        $this->superficieCorporal = $superficieCorporal;
        return $this;
    }

    /**
     * Gets as idade
     *
     * @return integer
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Sets a new idade
     *
     * @param integer $idade
     * @return self
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
        return $this;
    }

    /**
     * Gets as sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Sets a new sexo
     *
     * @param string $sexo
     * @return self
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
        return $this;
    }


}

