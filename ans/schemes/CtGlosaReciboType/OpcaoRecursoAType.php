<?php

namespace ans\schemes\CtGlosaReciboType;

/**
 * Class representing OpcaoRecursoAType
 */
class OpcaoRecursoAType
{

    /**
     * @property \ans\schemes\CtGlosaReciboType\OpcaoRecursoAType\RecursoProtocoloAType
     * $recursoProtocolo
     */
    private $recursoProtocolo = null;

    /**
     * @property \ans\schemes\CtGlosaReciboType\OpcaoRecursoAType\RecursoGuiaAType[]
     * $recursoGuia
     */
    private $recursoGuia = null;

    /**
     * Gets as recursoProtocolo
     *
     * @return \ans\schemes\CtGlosaReciboType\OpcaoRecursoAType\RecursoProtocoloAType
     */
    public function getRecursoProtocolo()
    {
        return $this->recursoProtocolo;
    }

    /**
     * Sets a new recursoProtocolo
     *
     * @param \ans\schemes\CtGlosaReciboType\OpcaoRecursoAType\RecursoProtocoloAType
     * $recursoProtocolo
     * @return self
     */
    public function setRecursoProtocolo(\ans\schemes\CtGlosaReciboType\OpcaoRecursoAType\RecursoProtocoloAType $recursoProtocolo)
    {
        $this->recursoProtocolo = $recursoProtocolo;
        return $this;
    }

    /**
     * Adds as recursoGuia
     *
     * @return self
     * @param \ans\schemes\CtGlosaReciboType\OpcaoRecursoAType\RecursoGuiaAType
     * $recursoGuia
     */
    public function addToRecursoGuia(\ans\schemes\CtGlosaReciboType\OpcaoRecursoAType\RecursoGuiaAType $recursoGuia)
    {
        $this->recursoGuia[] = $recursoGuia;
        return $this;
    }

    /**
     * isset recursoGuia
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRecursoGuia($index)
    {
        return isset($this->recursoGuia[$index]);
    }

    /**
     * unset recursoGuia
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRecursoGuia($index)
    {
        unset($this->recursoGuia[$index]);
    }

    /**
     * Gets as recursoGuia
     *
     * @return \ans\schemes\CtGlosaReciboType\OpcaoRecursoAType\RecursoGuiaAType[]
     */
    public function getRecursoGuia()
    {
        return $this->recursoGuia;
    }

    /**
     * Sets a new recursoGuia
     *
     * @param \ans\schemes\CtGlosaReciboType\OpcaoRecursoAType\RecursoGuiaAType[]
     * $recursoGuia
     * @return self
     */
    public function setRecursoGuia(array $recursoGuia)
    {
        $this->recursoGuia = $recursoGuia;
        return $this;
    }


}

