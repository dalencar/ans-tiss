<?php

namespace ans\schemes\CtmInternacaoSolicitacaoGuiaType;

/**
 * Class representing HipotesesDiagnosticasAType
 */
class HipotesesDiagnosticasAType
{

    /**
     * @property string[] $diagnosticoCID
     */
    private $diagnosticoCID = null;

    /**
     * @property string $indicadorAcidente
     */
    private $indicadorAcidente = null;

    /**
     * Adds as diagnosticoCID
     *
     * @return self
     * @param string $diagnosticoCID
     */
    public function addToDiagnosticoCID($diagnosticoCID)
    {
        $this->diagnosticoCID[] = $diagnosticoCID;
        return $this;
    }

    /**
     * isset diagnosticoCID
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDiagnosticoCID($index)
    {
        return isset($this->diagnosticoCID[$index]);
    }

    /**
     * unset diagnosticoCID
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDiagnosticoCID($index)
    {
        unset($this->diagnosticoCID[$index]);
    }

    /**
     * Gets as diagnosticoCID
     *
     * @return string[]
     */
    public function getDiagnosticoCID()
    {
        return $this->diagnosticoCID;
    }

    /**
     * Sets a new diagnosticoCID
     *
     * @param string $diagnosticoCID
     * @return self
     */
    public function setDiagnosticoCID(array $diagnosticoCID)
    {
        $this->diagnosticoCID = $diagnosticoCID;
        return $this;
    }

    /**
     * Gets as indicadorAcidente
     *
     * @return string
     */
    public function getIndicadorAcidente()
    {
        return $this->indicadorAcidente;
    }

    /**
     * Sets a new indicadorAcidente
     *
     * @param string $indicadorAcidente
     * @return self
     */
    public function setIndicadorAcidente($indicadorAcidente)
    {
        $this->indicadorAcidente = $indicadorAcidente;
        return $this;
    }


}

