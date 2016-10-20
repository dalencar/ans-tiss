<?php

namespace ans\schemes;

/**
 * Class representing CtIntervaloCiclosType
 *
 *
 * XSD Type: ct_intervaloCiclos
 */
class CtIntervaloCiclosType
{

    /**
     * @property integer $tempo
     */
    private $tempo = null;

    /**
     * @property string $unidade
     */
    private $unidade = null;

    /**
     * Gets as tempo
     *
     * @return integer
     */
    public function getTempo()
    {
        return $this->tempo;
    }

    /**
     * Sets a new tempo
     *
     * @param integer $tempo
     * @return self
     */
    public function setTempo($tempo)
    {
        $this->tempo = $tempo;
        return $this;
    }

    /**
     * Gets as unidade
     *
     * @return string
     */
    public function getUnidade()
    {
        return $this->unidade;
    }

    /**
     * Sets a new unidade
     *
     * @param string $unidade
     * @return self
     */
    public function setUnidade($unidade)
    {
        $this->unidade = $unidade;
        return $this;
    }


}

