<?php

namespace ans\schemes;

/**
 * Class representing CtRespostaGlosaItemMedicoType
 *
 *
 * XSD Type: ct_respostaGlosaItemMedico
 */
class CtRespostaGlosaItemMedicoType
{

    /**
     * @property string $numeroGuiaPrestador
     */
    private $numeroGuiaPrestador = null;

    /**
     * @property string $senha
     */
    private $senha = null;

    /**
     * @property \DateTime $dataRealizacao
     */
    private $dataRealizacao = null;

    /**
     * @property \DateTime $dataFim
     */
    private $dataFim = null;

    /**
     * @property \ans\schemes\CtProcedimentoDadosType $procRecurso
     */
    private $procRecurso = null;

    /**
     * @property string $codGlosa
     */
    private $codGlosa = null;

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
     * Gets as numeroGuiaPrestador
     *
     * @return string
     */
    public function getNumeroGuiaPrestador()
    {
        return $this->numeroGuiaPrestador;
    }

    /**
     * Sets a new numeroGuiaPrestador
     *
     * @param string $numeroGuiaPrestador
     * @return self
     */
    public function setNumeroGuiaPrestador($numeroGuiaPrestador)
    {
        $this->numeroGuiaPrestador = $numeroGuiaPrestador;
        return $this;
    }

    /**
     * Gets as senha
     *
     * @return string
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Sets a new senha
     *
     * @param string $senha
     * @return self
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
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

    /**
     * Gets as dataFim
     *
     * @return \DateTime
     */
    public function getDataFim()
    {
        return $this->dataFim;
    }

    /**
     * Sets a new dataFim
     *
     * @param \DateTime $dataFim
     * @return self
     */
    public function setDataFim(\DateTime $dataFim)
    {
        $this->dataFim = $dataFim;
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
     * Gets as codGlosa
     *
     * @return string
     */
    public function getCodGlosa()
    {
        return $this->codGlosa;
    }

    /**
     * Sets a new codGlosa
     *
     * @param string $codGlosa
     * @return self
     */
    public function setCodGlosa($codGlosa)
    {
        $this->codGlosa = $codGlosa;
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

