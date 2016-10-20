<?php

namespace ans\schemes\CtmInternacaoObstetricaType;

/**
 * Class representing TipoPartoAType
 */
class TipoPartoAType
{

    /**
     * @property boolean $aborto
     */
    private $aborto = null;

    /**
     * @property boolean $partoCesareo
     */
    private $partoCesareo = null;

    /**
     * @property boolean $partoNormal
     */
    private $partoNormal = null;

    /**
     * Gets as aborto
     *
     * @return boolean
     */
    public function getAborto()
    {
        return $this->aborto;
    }

    /**
     * Sets a new aborto
     *
     * @param boolean $aborto
     * @return self
     */
    public function setAborto($aborto)
    {
        $this->aborto = $aborto;
        return $this;
    }

    /**
     * Gets as partoCesareo
     *
     * @return boolean
     */
    public function getPartoCesareo()
    {
        return $this->partoCesareo;
    }

    /**
     * Sets a new partoCesareo
     *
     * @param boolean $partoCesareo
     * @return self
     */
    public function setPartoCesareo($partoCesareo)
    {
        $this->partoCesareo = $partoCesareo;
        return $this;
    }

    /**
     * Gets as partoNormal
     *
     * @return boolean
     */
    public function getPartoNormal()
    {
        return $this->partoNormal;
    }

    /**
     * Sets a new partoNormal
     *
     * @param boolean $partoNormal
     * @return self
     */
    public function setPartoNormal($partoNormal)
    {
        $this->partoNormal = $partoNormal;
        return $this;
    }


}

