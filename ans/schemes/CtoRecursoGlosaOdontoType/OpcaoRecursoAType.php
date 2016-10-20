<?php

namespace ans\schemes\CtoRecursoGlosaOdontoType;

/**
 * Class representing OpcaoRecursoAType
 */
class OpcaoRecursoAType
{

    /**
     * @property
     * \ans\schemes\CtoRecursoGlosaOdontoType\OpcaoRecursoAType\RecursoProtocoloAType
     * $recursoProtocolo
     */
    private $recursoProtocolo = null;

    /**
     * @property
     * \ans\schemes\CtoRecursoGlosaOdontoType\OpcaoRecursoAType\RecursoGuiaAType[]
     * $recursoGuia
     */
    private $recursoGuia = null;

    /**
     * Gets as recursoProtocolo
     *
     * @return
     * \ans\schemes\CtoRecursoGlosaOdontoType\OpcaoRecursoAType\RecursoProtocoloAType
     */
    public function getRecursoProtocolo()
    {
        return $this->recursoProtocolo;
    }

    /**
     * Sets a new recursoProtocolo
     *
     * @param
     * \ans\schemes\CtoRecursoGlosaOdontoType\OpcaoRecursoAType\RecursoProtocoloAType
     * $recursoProtocolo
     * @return self
     */
    public function setRecursoProtocolo(\ans\schemes\CtoRecursoGlosaOdontoType\OpcaoRecursoAType\RecursoProtocoloAType $recursoProtocolo)
    {
        $this->recursoProtocolo = $recursoProtocolo;
        return $this;
    }

    /**
     * Adds as recursoGuia
     *
     * @return self
     * @param \ans\schemes\CtoRecursoGlosaOdontoType\OpcaoRecursoAType\RecursoGuiaAType
     * $recursoGuia
     */
    public function addToRecursoGuia(\ans\schemes\CtoRecursoGlosaOdontoType\OpcaoRecursoAType\RecursoGuiaAType $recursoGuia)
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
     * @return
     * \ans\schemes\CtoRecursoGlosaOdontoType\OpcaoRecursoAType\RecursoGuiaAType[]
     */
    public function getRecursoGuia()
    {
        return $this->recursoGuia;
    }

    /**
     * Sets a new recursoGuia
     *
     * @param
     * \ans\schemes\CtoRecursoGlosaOdontoType\OpcaoRecursoAType\RecursoGuiaAType[]
     * $recursoGuia
     * @return self
     */
    public function setRecursoGuia(array $recursoGuia)
    {
        $this->recursoGuia = $recursoGuia;
        return $this;
    }


}

