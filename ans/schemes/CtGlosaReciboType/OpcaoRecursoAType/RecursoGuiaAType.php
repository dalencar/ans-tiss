<?php

namespace ans\schemes\CtGlosaReciboType\OpcaoRecursoAType;

/**
 * Class representing RecursoGuiaAType
 */
class RecursoGuiaAType
{

    /**
     * @property \ans\schemes\CtRespostaGlosaGuiaMedicaType $respostaGuia
     */
    private $respostaGuia = null;

    /**
     * @property \ans\schemes\CtRespostaGlosaItemMedicoType $respostaGuiaItens
     */
    private $respostaGuiaItens = null;

    /**
     * Gets as respostaGuia
     *
     * @return \ans\schemes\CtRespostaGlosaGuiaMedicaType
     */
    public function getRespostaGuia()
    {
        return $this->respostaGuia;
    }

    /**
     * Sets a new respostaGuia
     *
     * @param \ans\schemes\CtRespostaGlosaGuiaMedicaType $respostaGuia
     * @return self
     */
    public function setRespostaGuia(\ans\schemes\CtRespostaGlosaGuiaMedicaType $respostaGuia)
    {
        $this->respostaGuia = $respostaGuia;
        return $this;
    }

    /**
     * Gets as respostaGuiaItens
     *
     * @return \ans\schemes\CtRespostaGlosaItemMedicoType
     */
    public function getRespostaGuiaItens()
    {
        return $this->respostaGuiaItens;
    }

    /**
     * Sets a new respostaGuiaItens
     *
     * @param \ans\schemes\CtRespostaGlosaItemMedicoType $respostaGuiaItens
     * @return self
     */
    public function setRespostaGuiaItens(\ans\schemes\CtRespostaGlosaItemMedicoType $respostaGuiaItens)
    {
        $this->respostaGuiaItens = $respostaGuiaItens;
        return $this;
    }


}

