<?php

namespace ans\schemes;

/**
 * Class representing CtmInternacaoDadosSaidaType
 *
 *
 * XSD Type: ctm_internacaoDadosSaida
 */
class CtmInternacaoDadosSaidaType
{

    /**
     * @property string[] $diagnostico
     */
    private $diagnostico = null;

    /**
     * @property string $indicadorAcidente
     */
    private $indicadorAcidente = null;

    /**
     * @property string $motivoSaidaInternacao
     */
    private $motivoSaidaInternacao = null;

    /**
     * Adds as diagnostico
     *
     * @return self
     * @param string $diagnostico
     */
    public function addToDiagnostico($diagnostico)
    {
        $this->diagnostico[] = $diagnostico;
        return $this;
    }

    /**
     * isset diagnostico
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDiagnostico($index)
    {
        return isset($this->diagnostico[$index]);
    }

    /**
     * unset diagnostico
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDiagnostico($index)
    {
        unset($this->diagnostico[$index]);
    }

    /**
     * Gets as diagnostico
     *
     * @return string[]
     */
    public function getDiagnostico()
    {
        return $this->diagnostico;
    }

    /**
     * Sets a new diagnostico
     *
     * @param string $diagnostico
     * @return self
     */
    public function setDiagnostico(array $diagnostico)
    {
        $this->diagnostico = $diagnostico;
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

    /**
     * Gets as motivoSaidaInternacao
     *
     * @return string
     */
    public function getMotivoSaidaInternacao()
    {
        return $this->motivoSaidaInternacao;
    }

    /**
     * Sets a new motivoSaidaInternacao
     *
     * @param string $motivoSaidaInternacao
     * @return self
     */
    public function setMotivoSaidaInternacao($motivoSaidaInternacao)
    {
        $this->motivoSaidaInternacao = $motivoSaidaInternacao;
        return $this;
    }


}

