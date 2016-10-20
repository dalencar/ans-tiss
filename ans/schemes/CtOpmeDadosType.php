<?php

namespace ans\schemes;

/**
 * Class representing CtOpmeDadosType
 *
 *
 * XSD Type: ct_opmeDados
 */
class CtOpmeDadosType
{

    /**
     * @property \ans\schemes\CtProcedimentoDadosType $identificacaoOPME
     */
    private $identificacaoOPME = null;

    /**
     * @property string $nomeFabricante
     */
    private $nomeFabricante = null;

    /**
     * Gets as identificacaoOPME
     *
     * @return \ans\schemes\CtProcedimentoDadosType
     */
    public function getIdentificacaoOPME()
    {
        return $this->identificacaoOPME;
    }

    /**
     * Sets a new identificacaoOPME
     *
     * @param \ans\schemes\CtProcedimentoDadosType $identificacaoOPME
     * @return self
     */
    public function setIdentificacaoOPME(\ans\schemes\CtProcedimentoDadosType $identificacaoOPME)
    {
        $this->identificacaoOPME = $identificacaoOPME;
        return $this;
    }

    /**
     * Gets as nomeFabricante
     *
     * @return string
     */
    public function getNomeFabricante()
    {
        return $this->nomeFabricante;
    }

    /**
     * Sets a new nomeFabricante
     *
     * @param string $nomeFabricante
     * @return self
     */
    public function setNomeFabricante($nomeFabricante)
    {
        $this->nomeFabricante = $nomeFabricante;
        return $this;
    }


}

