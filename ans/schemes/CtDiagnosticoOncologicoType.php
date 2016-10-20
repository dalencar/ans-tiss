<?php

namespace ans\schemes;

/**
 * Class representing CtDiagnosticoOncologicoType
 *
 *
 * XSD Type: ct_diagnosticoOncologico
 */
class CtDiagnosticoOncologicoType
{

    /**
     * @property \DateTime $dataDiagnostico
     */
    private $dataDiagnostico = null;

    /**
     * @property string[] $diagnosticoCID
     */
    private $diagnosticoCID = null;

    /**
     * @property string $estadiamento
     */
    private $estadiamento = null;

    /**
     * @property string $finalidade
     */
    private $finalidade = null;

    /**
     * @property string $ecog
     */
    private $ecog = null;

    /**
     * @property string $diagnosticoHispatologico
     */
    private $diagnosticoHispatologico = null;

    /**
     * @property string $infoRelevantes
     */
    private $infoRelevantes = null;

    /**
     * Gets as dataDiagnostico
     *
     * @return \DateTime
     */
    public function getDataDiagnostico()
    {
        return $this->dataDiagnostico;
    }

    /**
     * Sets a new dataDiagnostico
     *
     * @param \DateTime $dataDiagnostico
     * @return self
     */
    public function setDataDiagnostico(\DateTime $dataDiagnostico)
    {
        $this->dataDiagnostico = $dataDiagnostico;
        return $this;
    }

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
     * Gets as estadiamento
     *
     * @return string
     */
    public function getEstadiamento()
    {
        return $this->estadiamento;
    }

    /**
     * Sets a new estadiamento
     *
     * @param string $estadiamento
     * @return self
     */
    public function setEstadiamento($estadiamento)
    {
        $this->estadiamento = $estadiamento;
        return $this;
    }

    /**
     * Gets as finalidade
     *
     * @return string
     */
    public function getFinalidade()
    {
        return $this->finalidade;
    }

    /**
     * Sets a new finalidade
     *
     * @param string $finalidade
     * @return self
     */
    public function setFinalidade($finalidade)
    {
        $this->finalidade = $finalidade;
        return $this;
    }

    /**
     * Gets as ecog
     *
     * @return string
     */
    public function getEcog()
    {
        return $this->ecog;
    }

    /**
     * Sets a new ecog
     *
     * @param string $ecog
     * @return self
     */
    public function setEcog($ecog)
    {
        $this->ecog = $ecog;
        return $this;
    }

    /**
     * Gets as diagnosticoHispatologico
     *
     * @return string
     */
    public function getDiagnosticoHispatologico()
    {
        return $this->diagnosticoHispatologico;
    }

    /**
     * Sets a new diagnosticoHispatologico
     *
     * @param string $diagnosticoHispatologico
     * @return self
     */
    public function setDiagnosticoHispatologico($diagnosticoHispatologico)
    {
        $this->diagnosticoHispatologico = $diagnosticoHispatologico;
        return $this;
    }

    /**
     * Gets as infoRelevantes
     *
     * @return string
     */
    public function getInfoRelevantes()
    {
        return $this->infoRelevantes;
    }

    /**
     * Sets a new infoRelevantes
     *
     * @param string $infoRelevantes
     * @return self
     */
    public function setInfoRelevantes($infoRelevantes)
    {
        $this->infoRelevantes = $infoRelevantes;
        return $this;
    }


}

