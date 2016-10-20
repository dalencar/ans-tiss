<?php

namespace ans\schemes;

/**
 * Class representing CtmAnexoLoteType
 *
 *
 * XSD Type: ctm_anexoLote
 */
class CtmAnexoLoteType
{

    /**
     * @property string $numeroLote
     */
    private $numeroLote = null;

    /**
     * @property \ans\schemes\CtmAnexoLoteType\AnexosClinicosAType $anexosClinicos
     */
    private $anexosClinicos = null;

    /**
     * Gets as numeroLote
     *
     * @return string
     */
    public function getNumeroLote()
    {
        return $this->numeroLote;
    }

    /**
     * Sets a new numeroLote
     *
     * @param string $numeroLote
     * @return self
     */
    public function setNumeroLote($numeroLote)
    {
        $this->numeroLote = $numeroLote;
        return $this;
    }

    /**
     * Gets as anexosClinicos
     *
     * @return \ans\schemes\CtmAnexoLoteType\AnexosClinicosAType
     */
    public function getAnexosClinicos()
    {
        return $this->anexosClinicos;
    }

    /**
     * Sets a new anexosClinicos
     *
     * @param \ans\schemes\CtmAnexoLoteType\AnexosClinicosAType $anexosClinicos
     * @return self
     */
    public function setAnexosClinicos(\ans\schemes\CtmAnexoLoteType\AnexosClinicosAType $anexosClinicos)
    {
        $this->anexosClinicos = $anexosClinicos;
        return $this;
    }


}

