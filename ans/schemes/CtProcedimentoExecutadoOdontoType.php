<?php

namespace ans\schemes;

/**
 * Class representing CtProcedimentoExecutadoOdontoType
 *
 *
 * XSD Type: ct_procedimentoExecutadoOdonto
 */
class CtProcedimentoExecutadoOdontoType
{

    /**
     * @property \ans\schemes\CtProcedimentoDadosType $procedimento
     */
    private $procedimento = null;

    /**
     * @property \ans\schemes\CtProcedimentoExecutadoOdontoType\DenteRegiaoAType
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
     * @property string $autorizado
     */
    private $autorizado = null;

    /**
     * @property \DateTime $dataRealizacao
     */
    private $dataRealizacao = null;

    /**
     * Gets as procedimento
     *
     * @return \ans\schemes\CtProcedimentoDadosType
     */
    public function getProcedimento()
    {
        return $this->procedimento;
    }

    /**
     * Sets a new procedimento
     *
     * @param \ans\schemes\CtProcedimentoDadosType $procedimento
     * @return self
     */
    public function setProcedimento(\ans\schemes\CtProcedimentoDadosType $procedimento)
    {
        $this->procedimento = $procedimento;
        return $this;
    }

    /**
     * Gets as denteRegiao
     *
     * @return \ans\schemes\CtProcedimentoExecutadoOdontoType\DenteRegiaoAType
     */
    public function getDenteRegiao()
    {
        return $this->denteRegiao;
    }

    /**
     * Sets a new denteRegiao
     *
     * @param \ans\schemes\CtProcedimentoExecutadoOdontoType\DenteRegiaoAType
     * $denteRegiao
     * @return self
     */
    public function setDenteRegiao(\ans\schemes\CtProcedimentoExecutadoOdontoType\DenteRegiaoAType $denteRegiao)
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
     * @return string
     */
    public function getAutorizado()
    {
        return $this->autorizado;
    }

    /**
     * Sets a new autorizado
     *
     * @param string $autorizado
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

