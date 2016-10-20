<?php

namespace ans\schemes;

/**
 * Class representing CtHipoteseDiagnosticaType
 *
 *
 * XSD Type: ct_hipoteseDiagnostica
 */
class CtHipoteseDiagnosticaType
{

    /**
     * @property \ans\schemes\CtDiagnosticoType $diagnostico
     */
    private $diagnostico = null;

    /**
     * @property string $indicacaoAcidente
     */
    private $indicacaoAcidente = null;

    /**
     * Gets as diagnostico
     *
     * @return \ans\schemes\CtDiagnosticoType
     */
    public function getDiagnostico()
    {
        return $this->diagnostico;
    }

    /**
     * Sets a new diagnostico
     *
     * @param \ans\schemes\CtDiagnosticoType $diagnostico
     * @return self
     */
    public function setDiagnostico(\ans\schemes\CtDiagnosticoType $diagnostico)
    {
        $this->diagnostico = $diagnostico;
        return $this;
    }

    /**
     * Gets as indicacaoAcidente
     *
     * @return string
     */
    public function getIndicacaoAcidente()
    {
        return $this->indicacaoAcidente;
    }

    /**
     * Sets a new indicacaoAcidente
     *
     * @param string $indicacaoAcidente
     * @return self
     */
    public function setIndicacaoAcidente($indicacaoAcidente)
    {
        $this->indicacaoAcidente = $indicacaoAcidente;
        return $this;
    }


}

