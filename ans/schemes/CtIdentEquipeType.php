<?php

namespace ans\schemes;

/**
 * Class representing CtIdentEquipeType
 *
 *
 * XSD Type: ct_identEquipe
 */
class CtIdentEquipeType
{

    /**
     * @property string $grauPart
     */
    private $grauPart = null;

    /**
     * @property \ans\schemes\CtIdentEquipeType\CodProfissionalAType $codProfissional
     */
    private $codProfissional = null;

    /**
     * @property string $nomeProf
     */
    private $nomeProf = null;

    /**
     * @property string $conselho
     */
    private $conselho = null;

    /**
     * @property string $numeroConselhoProfissional
     */
    private $numeroConselhoProfissional = null;

    /**
     * @property string $uF
     */
    private $uF = null;

    /**
     * @property string $cBOS
     */
    private $cBOS = null;

    /**
     * Gets as grauPart
     *
     * @return string
     */
    public function getGrauPart()
    {
        return $this->grauPart;
    }

    /**
     * Sets a new grauPart
     *
     * @param string $grauPart
     * @return self
     */
    public function setGrauPart($grauPart)
    {
        $this->grauPart = $grauPart;
        return $this;
    }

    /**
     * Gets as codProfissional
     *
     * @return \ans\schemes\CtIdentEquipeType\CodProfissionalAType
     */
    public function getCodProfissional()
    {
        return $this->codProfissional;
    }

    /**
     * Sets a new codProfissional
     *
     * @param \ans\schemes\CtIdentEquipeType\CodProfissionalAType $codProfissional
     * @return self
     */
    public function setCodProfissional(\ans\schemes\CtIdentEquipeType\CodProfissionalAType $codProfissional)
    {
        $this->codProfissional = $codProfissional;
        return $this;
    }

    /**
     * Gets as nomeProf
     *
     * @return string
     */
    public function getNomeProf()
    {
        return $this->nomeProf;
    }

    /**
     * Sets a new nomeProf
     *
     * @param string $nomeProf
     * @return self
     */
    public function setNomeProf($nomeProf)
    {
        $this->nomeProf = $nomeProf;
        return $this;
    }

    /**
     * Gets as conselho
     *
     * @return string
     */
    public function getConselho()
    {
        return $this->conselho;
    }

    /**
     * Sets a new conselho
     *
     * @param string $conselho
     * @return self
     */
    public function setConselho($conselho)
    {
        $this->conselho = $conselho;
        return $this;
    }

    /**
     * Gets as numeroConselhoProfissional
     *
     * @return string
     */
    public function getNumeroConselhoProfissional()
    {
        return $this->numeroConselhoProfissional;
    }

    /**
     * Sets a new numeroConselhoProfissional
     *
     * @param string $numeroConselhoProfissional
     * @return self
     */
    public function setNumeroConselhoProfissional($numeroConselhoProfissional)
    {
        $this->numeroConselhoProfissional = $numeroConselhoProfissional;
        return $this;
    }

    /**
     * Gets as uF
     *
     * @return string
     */
    public function getUF()
    {
        return $this->uF;
    }

    /**
     * Sets a new uF
     *
     * @param string $uF
     * @return self
     */
    public function setUF($uF)
    {
        $this->uF = $uF;
        return $this;
    }

    /**
     * Gets as cBOS
     *
     * @return string
     */
    public function getCBOS()
    {
        return $this->cBOS;
    }

    /**
     * Sets a new cBOS
     *
     * @param string $cBOS
     * @return self
     */
    public function setCBOS($cBOS)
    {
        $this->cBOS = $cBOS;
        return $this;
    }


}

