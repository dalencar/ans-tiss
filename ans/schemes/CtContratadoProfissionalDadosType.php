<?php

namespace ans\schemes;

/**
 * Class representing CtContratadoProfissionalDadosType
 *
 *
 * XSD Type: ct_contratadoProfissionalDados
 */
class CtContratadoProfissionalDadosType
{

    /**
     * @property string $nomeProfissional
     */
    private $nomeProfissional = null;

    /**
     * @property string $conselhoProfissional
     */
    private $conselhoProfissional = null;

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
     * Gets as nomeProfissional
     *
     * @return string
     */
    public function getNomeProfissional()
    {
        return $this->nomeProfissional;
    }

    /**
     * Sets a new nomeProfissional
     *
     * @param string $nomeProfissional
     * @return self
     */
    public function setNomeProfissional($nomeProfissional)
    {
        $this->nomeProfissional = $nomeProfissional;
        return $this;
    }

    /**
     * Gets as conselhoProfissional
     *
     * @return string
     */
    public function getConselhoProfissional()
    {
        return $this->conselhoProfissional;
    }

    /**
     * Sets a new conselhoProfissional
     *
     * @param string $conselhoProfissional
     * @return self
     */
    public function setConselhoProfissional($conselhoProfissional)
    {
        $this->conselhoProfissional = $conselhoProfissional;
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

