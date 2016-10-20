<?php

namespace ans\schemes\CtRespostaRecursoItemOdontoType;

/**
 * Class representing RecursoProcedimentoAType
 */
class RecursoProcedimentoAType
{

    /**
     * @property \DateTime $dataRealizacao
     */
    private $dataRealizacao = null;

    /**
     * @property string $denteRegiao
     */
    private $denteRegiao = null;

    /**
     * @property string $denteFace
     */
    private $denteFace = null;

    /**
     * @property integer $quantidade
     */
    private $quantidade = null;

    /**
     * @property \ans\schemes\CtProcedimentoDadosType $procRecurso
     */
    private $procRecurso = null;

    /**
     * @property string $codGlosaProc
     */
    private $codGlosaProc = null;

    /**
     * @property float $valorRecursado
     */
    private $valorRecursado = null;

    /**
     * @property string $justificativaPrestador
     */
    private $justificativaPrestador = null;

    /**
     * @property float $valorAcatadado
     */
    private $valorAcatadado = null;

    /**
     * @property string $justificativaOperadora
     */
    private $justificativaOperadora = null;

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

    /**
     * Gets as denteRegiao
     *
     * @return string
     */
    public function getDenteRegiao()
    {
        return $this->denteRegiao;
    }

    /**
     * Sets a new denteRegiao
     *
     * @param string $denteRegiao
     * @return self
     */
    public function setDenteRegiao($denteRegiao)
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
     * Gets as quantidade
     *
     * @return integer
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Sets a new quantidade
     *
     * @param integer $quantidade
     * @return self
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
        return $this;
    }

    /**
     * Gets as procRecurso
     *
     * @return \ans\schemes\CtProcedimentoDadosType
     */
    public function getProcRecurso()
    {
        return $this->procRecurso;
    }

    /**
     * Sets a new procRecurso
     *
     * @param \ans\schemes\CtProcedimentoDadosType $procRecurso
     * @return self
     */
    public function setProcRecurso(\ans\schemes\CtProcedimentoDadosType $procRecurso)
    {
        $this->procRecurso = $procRecurso;
        return $this;
    }

    /**
     * Gets as codGlosaProc
     *
     * @return string
     */
    public function getCodGlosaProc()
    {
        return $this->codGlosaProc;
    }

    /**
     * Sets a new codGlosaProc
     *
     * @param string $codGlosaProc
     * @return self
     */
    public function setCodGlosaProc($codGlosaProc)
    {
        $this->codGlosaProc = $codGlosaProc;
        return $this;
    }

    /**
     * Gets as valorRecursado
     *
     * @return float
     */
    public function getValorRecursado()
    {
        return $this->valorRecursado;
    }

    /**
     * Sets a new valorRecursado
     *
     * @param float $valorRecursado
     * @return self
     */
    public function setValorRecursado($valorRecursado)
    {
        $this->valorRecursado = $valorRecursado;
        return $this;
    }

    /**
     * Gets as justificativaPrestador
     *
     * @return string
     */
    public function getJustificativaPrestador()
    {
        return $this->justificativaPrestador;
    }

    /**
     * Sets a new justificativaPrestador
     *
     * @param string $justificativaPrestador
     * @return self
     */
    public function setJustificativaPrestador($justificativaPrestador)
    {
        $this->justificativaPrestador = $justificativaPrestador;
        return $this;
    }

    /**
     * Gets as valorAcatadado
     *
     * @return float
     */
    public function getValorAcatadado()
    {
        return $this->valorAcatadado;
    }

    /**
     * Sets a new valorAcatadado
     *
     * @param float $valorAcatadado
     * @return self
     */
    public function setValorAcatadado($valorAcatadado)
    {
        $this->valorAcatadado = $valorAcatadado;
        return $this;
    }

    /**
     * Gets as justificativaOperadora
     *
     * @return string
     */
    public function getJustificativaOperadora()
    {
        return $this->justificativaOperadora;
    }

    /**
     * Sets a new justificativaOperadora
     *
     * @param string $justificativaOperadora
     * @return self
     */
    public function setJustificativaOperadora($justificativaOperadora)
    {
        $this->justificativaOperadora = $justificativaOperadora;
        return $this;
    }


}

