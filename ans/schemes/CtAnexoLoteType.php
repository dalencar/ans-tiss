<?php

namespace ans\schemes;

/**
 * Class representing CtAnexoLoteType
 *
 * estrutura da resposta da operadora a um lote de anexos
 * XSD Type: ct_anexoLote
 */
class CtAnexoLoteType
{

    /**
     * @property string $numeroLote
     */
    private $numeroLote = null;

    /**
     * @property \ans\schemes\CtAnexoLoteType\AnexosGuiasTISSAType $anexosGuiasTISS
     */
    private $anexosGuiasTISS = null;

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
     * Gets as anexosGuiasTISS
     *
     * @return \ans\schemes\CtAnexoLoteType\AnexosGuiasTISSAType
     */
    public function getAnexosGuiasTISS()
    {
        return $this->anexosGuiasTISS;
    }

    /**
     * Sets a new anexosGuiasTISS
     *
     * @param \ans\schemes\CtAnexoLoteType\AnexosGuiasTISSAType $anexosGuiasTISS
     * @return self
     */
    public function setAnexosGuiasTISS(\ans\schemes\CtAnexoLoteType\AnexosGuiasTISSAType $anexosGuiasTISS)
    {
        $this->anexosGuiasTISS = $anexosGuiasTISS;
        return $this;
    }


}

