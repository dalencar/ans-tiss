<?php

namespace ans\schemes;

/**
 * Class representing CtFontePagadoraType
 *
 *
 * XSD Type: ct_fontePagadora
 */
class CtFontePagadoraType
{

    /**
     * @property string $registroANS
     */
    private $registroANS = null;

    /**
     * @property string $identificacaoUnidadePagadora
     */
    private $identificacaoUnidadePagadora = null;

    /**
     * Gets as registroANS
     *
     * @return string
     */
    public function getRegistroANS()
    {
        return $this->registroANS;
    }

    /**
     * Sets a new registroANS
     *
     * @param string $registroANS
     * @return self
     */
    public function setRegistroANS($registroANS)
    {
        $this->registroANS = $registroANS;
        return $this;
    }

    /**
     * Gets as identificacaoUnidadePagadora
     *
     * @return string
     */
    public function getIdentificacaoUnidadePagadora()
    {
        return $this->identificacaoUnidadePagadora;
    }

    /**
     * Sets a new identificacaoUnidadePagadora
     *
     * @param string $identificacaoUnidadePagadora
     * @return self
     */
    public function setIdentificacaoUnidadePagadora($identificacaoUnidadePagadora)
    {
        $this->identificacaoUnidadePagadora = $identificacaoUnidadePagadora;
        return $this;
    }


}

