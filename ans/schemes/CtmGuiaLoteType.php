<?php

namespace ans\schemes;

/**
 * Class representing CtmGuiaLoteType
 *
 *
 * XSD Type: ctm_guiaLote
 */
class CtmGuiaLoteType
{

    /**
     * @property string $numeroLote
     */
    private $numeroLote = null;

    /**
     * @property \ans\schemes\CtmGuiaLoteType\GuiasTISSAType $guiasTISS
     */
    private $guiasTISS = null;

    /**
     * Gets as numeroLote
     *
     * @return string
     */
    public function getNumeroLote()
    {
        return $this->numeroLote;
    }

    /**
     * Sets a new numeroLote
     *
     * @param string $numeroLote
     * @return self
     */
    public function setNumeroLote($numeroLote)
    {
        $this->numeroLote = $numeroLote;
        return $this;
    }

    /**
     * Gets as guiasTISS
     *
     * @return \ans\schemes\CtmGuiaLoteType\GuiasTISSAType
     */
    public function getGuiasTISS()
    {
        return $this->guiasTISS;
    }

    /**
     * Sets a new guiasTISS
     *
     * @param \ans\schemes\CtmGuiaLoteType\GuiasTISSAType $guiasTISS
     * @return self
     */
    public function setGuiasTISS(\ans\schemes\CtmGuiaLoteType\GuiasTISSAType $guiasTISS)
    {
        $this->guiasTISS = $guiasTISS;
        return $this;
    }


}

