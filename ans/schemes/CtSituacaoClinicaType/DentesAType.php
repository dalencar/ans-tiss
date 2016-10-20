<?php

namespace ans\schemes\CtSituacaoClinicaType;

/**
 * Class representing DentesAType
 */
class DentesAType
{

    /**
     * @property string $elementoDentario
     */
    private $elementoDentario = null;

    /**
     * @property string $condicaoClinica
     */
    private $condicaoClinica = null;

    /**
     * Gets as elementoDentario
     *
     * @return string
     */
    public function getElementoDentario()
    {
        return $this->elementoDentario;
    }

    /**
     * Sets a new elementoDentario
     *
     * @param string $elementoDentario
     * @return self
     */
    public function setElementoDentario($elementoDentario)
    {
        $this->elementoDentario = $elementoDentario;
        return $this;
    }

    /**
     * Gets as condicaoClinica
     *
     * @return string
     */
    public function getCondicaoClinica()
    {
        return $this->condicaoClinica;
    }

    /**
     * Sets a new condicaoClinica
     *
     * @param string $condicaoClinica
     * @return self
     */
    public function setCondicaoClinica($condicaoClinica)
    {
        $this->condicaoClinica = $condicaoClinica;
        return $this;
    }


}

