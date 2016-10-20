<?php

namespace ans\schemes;

/**
 * Class representing CtDiagnosticoType
 *
 *
 * XSD Type: ct_diagnostico
 */
class CtDiagnosticoType
{

    /**
     * @property string $tabelaDiagnostico
     */
    private $tabelaDiagnostico = null;

    /**
     * @property string $codigoDiagnostico
     */
    private $codigoDiagnostico = null;

    /**
     * @property string $descricaoDiagnostico
     */
    private $descricaoDiagnostico = null;

    /**
     * Gets as tabelaDiagnostico
     *
     * @return string
     */
    public function getTabelaDiagnostico()
    {
        return $this->tabelaDiagnostico;
    }

    /**
     * Sets a new tabelaDiagnostico
     *
     * @param string $tabelaDiagnostico
     * @return self
     */
    public function setTabelaDiagnostico($tabelaDiagnostico)
    {
        $this->tabelaDiagnostico = $tabelaDiagnostico;
        return $this;
    }

    /**
     * Gets as codigoDiagnostico
     *
     * @return string
     */
    public function getCodigoDiagnostico()
    {
        return $this->codigoDiagnostico;
    }

    /**
     * Sets a new codigoDiagnostico
     *
     * @param string $codigoDiagnostico
     * @return self
     */
    public function setCodigoDiagnostico($codigoDiagnostico)
    {
        $this->codigoDiagnostico = $codigoDiagnostico;
        return $this;
    }

    /**
     * Gets as descricaoDiagnostico
     *
     * @return string
     */
    public function getDescricaoDiagnostico()
    {
        return $this->descricaoDiagnostico;
    }

    /**
     * Sets a new descricaoDiagnostico
     *
     * @param string $descricaoDiagnostico
     * @return self
     */
    public function setDescricaoDiagnostico($descricaoDiagnostico)
    {
        $this->descricaoDiagnostico = $descricaoDiagnostico;
        return $this;
    }


}

