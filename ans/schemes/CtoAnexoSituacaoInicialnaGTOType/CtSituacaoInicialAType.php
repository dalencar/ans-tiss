<?php

namespace ans\schemes\CtoAnexoSituacaoInicialnaGTOType;

/**
 * Class representing CtSituacaoInicialAType
 */
class CtSituacaoInicialAType
{

    /**
     * @property \ans\schemes\CtSituacaoClinicaType\DentesAType[] $situacaoClinica
     */
    private $situacaoClinica = null;

    /**
     * @property boolean $doencaPeriodontal
     */
    private $doencaPeriodontal = null;

    /**
     * @property boolean $alteracaoTecidoMole
     */
    private $alteracaoTecidoMole = null;

    /**
     * @property string $observacao
     */
    private $observacao = null;

    /**
     * Adds as dentes
     *
     * @return self
     * @param \ans\schemes\CtSituacaoClinicaType\DentesAType $dentes
     */
    public function addToSituacaoClinica(\ans\schemes\CtSituacaoClinicaType\DentesAType $dentes)
    {
        $this->situacaoClinica[] = $dentes;
        return $this;
    }

    /**
     * isset situacaoClinica
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSituacaoClinica($index)
    {
        return isset($this->situacaoClinica[$index]);
    }

    /**
     * unset situacaoClinica
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSituacaoClinica($index)
    {
        unset($this->situacaoClinica[$index]);
    }

    /**
     * Gets as situacaoClinica
     *
     * @return \ans\schemes\CtSituacaoClinicaType\DentesAType[]
     */
    public function getSituacaoClinica()
    {
        return $this->situacaoClinica;
    }

    /**
     * Sets a new situacaoClinica
     *
     * @param \ans\schemes\CtSituacaoClinicaType\DentesAType[] $situacaoClinica
     * @return self
     */
    public function setSituacaoClinica(array $situacaoClinica)
    {
        $this->situacaoClinica = $situacaoClinica;
        return $this;
    }

    /**
     * Gets as doencaPeriodontal
     *
     * @return boolean
     */
    public function getDoencaPeriodontal()
    {
        return $this->doencaPeriodontal;
    }

    /**
     * Sets a new doencaPeriodontal
     *
     * @param boolean $doencaPeriodontal
     * @return self
     */
    public function setDoencaPeriodontal($doencaPeriodontal)
    {
        $this->doencaPeriodontal = $doencaPeriodontal;
        return $this;
    }

    /**
     * Gets as alteracaoTecidoMole
     *
     * @return boolean
     */
    public function getAlteracaoTecidoMole()
    {
        return $this->alteracaoTecidoMole;
    }

    /**
     * Sets a new alteracaoTecidoMole
     *
     * @param boolean $alteracaoTecidoMole
     * @return self
     */
    public function setAlteracaoTecidoMole($alteracaoTecidoMole)
    {
        $this->alteracaoTecidoMole = $alteracaoTecidoMole;
        return $this;
    }

    /**
     * Gets as observacao
     *
     * @return string
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * Sets a new observacao
     *
     * @param string $observacao
     * @return self
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;
        return $this;
    }


}

