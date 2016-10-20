<?php

namespace ans\schemes\CtmAutorizacaoQuimioType;

/**
 * Class representing DiagnosticoOncologicoQuimioterapiaAType
 */
class DiagnosticoOncologicoQuimioterapiaAType
{

    /**
     * @property \ans\schemes\CtDiagnosticoOncologicoType $diagQuimio
     */
    private $diagQuimio = null;

    /**
     * @property string $tipoQuimioterapia
     */
    private $tipoQuimioterapia = null;

    /**
     * @property string $planoTerapeutico
     */
    private $planoTerapeutico = null;

    /**
     * Gets as diagQuimio
     *
     * @return \ans\schemes\CtDiagnosticoOncologicoType
     */
    public function getDiagQuimio()
    {
        return $this->diagQuimio;
    }

    /**
     * Sets a new diagQuimio
     *
     * @param \ans\schemes\CtDiagnosticoOncologicoType $diagQuimio
     * @return self
     */
    public function setDiagQuimio(\ans\schemes\CtDiagnosticoOncologicoType $diagQuimio)
    {
        $this->diagQuimio = $diagQuimio;
        return $this;
    }

    /**
     * Gets as tipoQuimioterapia
     *
     * @return string
     */
    public function getTipoQuimioterapia()
    {
        return $this->tipoQuimioterapia;
    }

    /**
     * Sets a new tipoQuimioterapia
     *
     * @param string $tipoQuimioterapia
     * @return self
     */
    public function setTipoQuimioterapia($tipoQuimioterapia)
    {
        $this->tipoQuimioterapia = $tipoQuimioterapia;
        return $this;
    }

    /**
     * Gets as planoTerapeutico
     *
     * @return string
     */
    public function getPlanoTerapeutico()
    {
        return $this->planoTerapeutico;
    }

    /**
     * Sets a new planoTerapeutico
     *
     * @param string $planoTerapeutico
     * @return self
     */
    public function setPlanoTerapeutico($planoTerapeutico)
    {
        $this->planoTerapeutico = $planoTerapeutico;
        return $this;
    }


}

