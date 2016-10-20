<?php

namespace ans\schemes\CtRecursoGlosaRecebimentoType\GuiasRecursoAType;

/**
 * Class representing OpcaoRecursoGuiaAType
 */
class OpcaoRecursoGuiaAType
{

    /**
     * @property
     * \ans\schemes\CtRecursoGlosaRecebimentoType\GuiasRecursoAType\OpcaoRecursoGuiaAType\RecursoGuiaAType
     * $recursoGuia
     */
    private $recursoGuia = null;

    /**
     * @property
     * \ans\schemes\CtRecursoGlosaRecebimentoType\GuiasRecursoAType\OpcaoRecursoGuiaAType\ItensGuiaAType[]
     * $itensGuia
     */
    private $itensGuia = null;

    /**
     * Gets as recursoGuia
     *
     * @return
     * \ans\schemes\CtRecursoGlosaRecebimentoType\GuiasRecursoAType\OpcaoRecursoGuiaAType\RecursoGuiaAType
     */
    public function getRecursoGuia()
    {
        return $this->recursoGuia;
    }

    /**
     * Sets a new recursoGuia
     *
     * @param
     * \ans\schemes\CtRecursoGlosaRecebimentoType\GuiasRecursoAType\OpcaoRecursoGuiaAType\RecursoGuiaAType
     * $recursoGuia
     * @return self
     */
    public function setRecursoGuia(\ans\schemes\CtRecursoGlosaRecebimentoType\GuiasRecursoAType\OpcaoRecursoGuiaAType\RecursoGuiaAType $recursoGuia)
    {
        $this->recursoGuia = $recursoGuia;
        return $this;
    }

    /**
     * Adds as itensGuia
     *
     * @return self
     * @param
     * \ans\schemes\CtRecursoGlosaRecebimentoType\GuiasRecursoAType\OpcaoRecursoGuiaAType\ItensGuiaAType
     * $itensGuia
     */
    public function addToItensGuia(\ans\schemes\CtRecursoGlosaRecebimentoType\GuiasRecursoAType\OpcaoRecursoGuiaAType\ItensGuiaAType $itensGuia)
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
     * \ans\schemes\CtRecursoGlosaRecebimentoType\GuiasRecursoAType\OpcaoRecursoGuiaAType\ItensGuiaAType[]
     */
    public function getItensGuia()
    {
        return $this->itensGuia;
    }

    /**
     * Sets a new itensGuia
     *
     * @param
     * \ans\schemes\CtRecursoGlosaRecebimentoType\GuiasRecursoAType\OpcaoRecursoGuiaAType\ItensGuiaAType[]
     * $itensGuia
     * @return self
     */
    public function setItensGuia(array $itensGuia)
    {
        $this->itensGuia = $itensGuia;
        return $this;
    }


}

