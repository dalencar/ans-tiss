<?php

namespace ans\schemes\CtmSpSadtGuiaType;

use ans\schemes\CtGuiaCabecalhoType;

/**
 * Class representing CabecalhoGuiaAType
 */
class CabecalhoGuiaAType extends CtGuiaCabecalhoType
{

    /**
     * @property string $guiaPrincipal
     */
    private $guiaPrincipal = null;

    /**
     * Gets as guiaPrincipal
     *
     * @return string
     */
    public function getGuiaPrincipal()
    {
        return $this->guiaPrincipal;
    }

    /**
     * Sets a new guiaPrincipal
     *
     * @param string $guiaPrincipal
     * @return self
     */
    public function setGuiaPrincipal($guiaPrincipal)
    {
        $this->guiaPrincipal = $guiaPrincipal;
        return $this;
    }


}

