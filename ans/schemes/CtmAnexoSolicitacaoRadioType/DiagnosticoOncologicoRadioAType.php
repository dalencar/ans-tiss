<?php

namespace ans\schemes\CtmAnexoSolicitacaoRadioType;

/**
 * Class representing DiagnosticoOncologicoRadioAType
 */
class DiagnosticoOncologicoRadioAType
{

    /**
     * @property \ans\schemes\CtDiagnosticoOncologicoType $diagRadio
     */
    private $diagRadio = null;

    /**
     * @property string $diagnosticoImagem
     */
    private $diagnosticoImagem = null;

    /**
     * Gets as diagRadio
     *
     * @return \ans\schemes\CtDiagnosticoOncologicoType
     */
    public function getDiagRadio()
    {
        return $this->diagRadio;
    }

    /**
     * Sets a new diagRadio
     *
     * @param \ans\schemes\CtDiagnosticoOncologicoType $diagRadio
     * @return self
     */
    public function setDiagRadio(\ans\schemes\CtDiagnosticoOncologicoType $diagRadio)
    {
        $this->diagRadio = $diagRadio;
        return $this;
    }

    /**
     * Gets as diagnosticoImagem
     *
     * @return string
     */
    public function getDiagnosticoImagem()
    {
        return $this->diagnosticoImagem;
    }

    /**
     * Sets a new diagnosticoImagem
     *
     * @param string $diagnosticoImagem
     * @return self
     */
    public function setDiagnosticoImagem($diagnosticoImagem)
    {
        $this->diagnosticoImagem = $diagnosticoImagem;
        return $this;
    }


}

