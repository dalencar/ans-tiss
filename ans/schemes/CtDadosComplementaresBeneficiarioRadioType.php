<?php

namespace ans\schemes;

/**
 * Class representing CtDadosComplementaresBeneficiarioRadioType
 *
 *
 * XSD Type: ct_dadosComplementaresBeneficiarioRadio
 */
class CtDadosComplementaresBeneficiarioRadioType
{

    /**
     * @property integer $idade
     */
    private $idade = null;

    /**
     * @property string $sexo
     */
    private $sexo = null;

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

