<?php

namespace ans\schemes\CtoGuiaOdontologiaType;

/**
 * Class representing ProcedimentosExecutadosAType
 */
class ProcedimentosExecutadosAType
{

    /**
     * @property \ans\schemes\CtProcedimentoDadosType $procSolic
     */
    private $procSolic = null;

    /**
     * @property
     * \ans\schemes\CtoGuiaOdontologiaType\ProcedimentosExecutadosAType\DenteRegiaoAType
     * $denteRegiao
     */
    private $denteRegiao = null;

    /**
     * @property string $denteFace
     */
    private $denteFace = null;

    /**
     * @property integer $qtdProc
     */
    private $qtdProc = null;

    /**
     * @property float $qtdUS
     */
    private $qtdUS = null;

    /**
     * @property float $valorProc
     */
    private $valorProc = null;

    /**
     * @property float $valorFranquia
     */
    private $valorFranquia = null;

    /**
     * @property boolean $autorizado
     */
    private $autorizado = null;

    /**
     * @property \DateTime $dataRealizacao
     */
    private $dataRealizacao = null;

    /**
     * Gets as procSolic
     *
     * @return \ans\schemes\CtProcedimentoDadosType
     */
    public function getProcSolic()
    {
        return $this->procSolic;
    }

    /**
     * Sets a new procSolic
     *
     * @param \ans\schemes\CtProcedimentoDadosType $procSolic
     * @return self
     */
    public function setProcSolic(\ans\schemes\CtProcedimentoDadosType $procSolic)
    {
        $this->procSolic = $procSolic;
        return $this;
    }

    /**
     * Gets as denteRegiao
     *
     * @return
     * \ans\schemes\CtoGuiaOdontologiaType\ProcedimentosExecutadosAType\DenteRegiaoAType
     */
    public function getDenteRegiao()
    {
        return $this->denteRegiao;
    }

    /**
     * Sets a new denteRegiao
     *
     * @param
     * \ans\schemes\CtoGuiaOdontologiaType\ProcedimentosExecutadosAType\DenteRegiaoAType
     * $denteRegiao
     * @return self
     */
    public function setDenteRegiao(\ans\schemes\CtoGuiaOdontologiaType\ProcedimentosExecutadosAType\DenteRegiaoAType $denteRegiao)
    {
        $this->denteRegiao = $denteRegiao;
        return $this;
    }

    /**
     * Gets as denteFace
     *
     * @return string
     */
    public function getDenteFace()
    {
        return $this->denteFace;
    }

    /**
     * Sets a new denteFace
     *
     * @param string $denteFace
     * @return self
     */
    public function setDenteFace($denteFace)
    {
        $this->denteFace = $denteFace;
        return $this;
    }

    /**
     * Gets as qtdProc
     *
     * @return integer
     */
    public function getQtdProc()
    {
        return $this->qtdProc;
    }

    /**
     * Sets a new qtdProc
     *
     * @param integer $qtdProc
     * @return self
     */
    public function setQtdProc($qtdProc)
    {
        $this->qtdProc = $qtdProc;
        return $this;
    }

    /**
     * Gets as qtdUS
     *
     * @return float
     */
    public function getQtdUS()
    {
        return $this->qtdUS;
    }

    /**
     * Sets a new qtdUS
     *
     * @param float $qtdUS
     * @return self
     */
    public function setQtdUS($qtdUS)
    {
        $this->qtdUS = $qtdUS;
        return $this;
    }

    /**
     * Gets as valorProc
     *
     * @return float
     */
    public function getValorProc()
    {
        return $this->valorProc;
    }

    /**
     * Sets a new valorProc
     *
     * @param float $valorProc
     * @return self
     */
    public function setValorProc($valorProc)
    {
        $this->valorProc = $valorProc;
        return $this;
    }

    /**
     * Gets as valorFranquia
     *
     * @return float
     */
    public function getValorFranquia()
    {
        return $this->valorFranquia;
    }

    /**
     * Sets a new valorFranquia
     *
     * @param float $valorFranquia
     * @return self
     */
    public function setValorFranquia($valorFranquia)
    {
        $this->valorFranquia = $valorFranquia;
        return $this;
    }

    /**
     * Gets as autorizado
     *
     * @return boolean
     */
    public function getAutorizado()
    {
        return $this->autorizado;
    }

    /**
     * Sets a new autorizado
     *
     * @param boolean $autorizado
     * @return self
     */
    public function setAutorizado($autorizado)
    {
        $this->autorizado = $autorizado;
        return $this;
    }

    /**
     * Gets as dataRealizacao
     *
     * @return \DateTime
     */
    public function getDataRealizacao()
    {
        return $this->dataRealizacao;
    }

    /**
     * Sets a new dataRealizacao
     *
     * @param \DateTime $dataRealizacao
     * @return self
     */
    public function setDataRealizacao(\DateTime $dataRealizacao)
    {
        $this->dataRealizacao = $dataRealizacao;
        return $this;
    }


}

