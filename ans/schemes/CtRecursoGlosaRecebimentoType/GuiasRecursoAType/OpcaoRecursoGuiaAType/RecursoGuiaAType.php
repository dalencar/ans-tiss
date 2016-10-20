<?php

namespace ans\schemes\CtRecursoGlosaRecebimentoType\GuiasRecursoAType\OpcaoRecursoGuiaAType;

/**
 * Class representing RecursoGuiaAType
 */
class RecursoGuiaAType
{

    /**
     * @property string $codGlosaGuia
     */
    private $codGlosaGuia = null;

    /**
     * @property string $justificativaGuia
     */
    private $justificativaGuia = null;

    /**
     * Gets as codGlosaGuia
     *
     * @return string
     */
    public function getCodGlosaGuia()
    {
        return $this->codGlosaGuia;
    }

    /**
     * Sets a new codGlosaGuia
     *
     * @param string $codGlosaGuia
     * @return self
     */
    public function setCodGlosaGuia($codGlosaGuia)
    {
        $this->codGlosaGuia = $codGlosaGuia;
        return $this;
    }

    /**
     * Gets as justificativaGuia
     *
     * @return string
     */
    public function getJustificativaGuia()
    {
        return $this->justificativaGuia;
    }

    /**
     * Sets a new justificativaGuia
     *
     * @param string $justificativaGuia
     * @return self
     */
    public function setJustificativaGuia($justificativaGuia)
    {
        $this->justificativaGuia = $justificativaGuia;
        return $this;
    }


}

