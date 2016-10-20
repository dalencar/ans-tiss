<?php

namespace ans\schemes\CtmRecursoGlosaType\OpcaoRecursoAType\RecursoGuiaAType;

/**
 * Class representing OpcaoRecursoGuiaAType
 */
class OpcaoRecursoGuiaAType
{

    /**
     * @property
     * \ans\schemes\CtmRecursoGlosaType\OpcaoRecursoAType\RecursoGuiaAType\OpcaoRecursoGuiaAType\RecursoGuiaCompletaAType
     * $recursoGuiaCompleta
     */
    private $recursoGuiaCompleta = null;

    /**
     * @property
     * \ans\schemes\CtmRecursoGlosaType\OpcaoRecursoAType\RecursoGuiaAType\OpcaoRecursoGuiaAType\ItensGuiaAType[]
     * $itensGuia
     */
    private $itensGuia = null;

    /**
     * Gets as recursoGuiaCompleta
     *
     * @return
     * \ans\schemes\CtmRecursoGlosaType\OpcaoRecursoAType\RecursoGuiaAType\OpcaoRecursoGuiaAType\RecursoGuiaCompletaAType
     */
    public function getRecursoGuiaCompleta()
    {
        return $this->recursoGuiaCompleta;
    }

    /**
     * Sets a new recursoGuiaCompleta
     *
     * @param
     * \ans\schemes\CtmRecursoGlosaType\OpcaoRecursoAType\RecursoGuiaAType\OpcaoRecursoGuiaAType\RecursoGuiaCompletaAType
     * $recursoGuiaCompleta
     * @return self
     */
    public function setRecursoGuiaCompleta(\ans\schemes\CtmRecursoGlosaType\OpcaoRecursoAType\RecursoGuiaAType\OpcaoRecursoGuiaAType\RecursoGuiaCompletaAType $recursoGuiaCompleta)
    {
        $this->recursoGuiaCompleta = $recursoGuiaCompleta;
        return $this;
    }

    /**
     * Adds as itensGuia
     *
     * @return self
     * @param
     * \ans\schemes\CtmRecursoGlosaType\OpcaoRecursoAType\RecursoGuiaAType\OpcaoRecursoGuiaAType\ItensGuiaAType
     * $itensGuia
     */
    public function addToItensGuia(\ans\schemes\CtmRecursoGlosaType\OpcaoRecursoAType\RecursoGuiaAType\OpcaoRecursoGuiaAType\ItensGuiaAType $itensGuia)
    {
        $this->itensGuia[] = $itensGuia;
        return $this;
    }

    /**
     * isset itensGuia
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItensGuia($index)
    {
        return isset($this->itensGuia[$index]);
    }

    /**
     * unset itensGuia
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItensGuia($index)
    {
        unset($this->itensGuia[$index]);
    }

    /**
     * Gets as itensGuia
     *
     * @return
     * \ans\schemes\CtmRecursoGlosaType\OpcaoRecursoAType\RecursoGuiaAType\OpcaoRecursoGuiaAType\ItensGuiaAType[]
     */
    public function getItensGuia()
    {
        return $this->itensGuia;
    }

    /**
     * Sets a new itensGuia
     *
     * @param
     * \ans\schemes\CtmRecursoGlosaType\OpcaoRecursoAType\RecursoGuiaAType\OpcaoRecursoGuiaAType\ItensGuiaAType[]
     * $itensGuia
     * @return self
     */
    public function setItensGuia(array $itensGuia)
    {
        $this->itensGuia = $itensGuia;
        return $this;
    }


}

