<?php

namespace ans\schemes\CtmInternacaoSolicitacaoGuiaType;

/**
 * Class representing DadosInternacaoAType
 */
class DadosInternacaoAType
{

    /**
     * @property string $caraterAtendimento
     */
    private $caraterAtendimento = null;

    /**
     * @property string $tipoInternacao
     */
    private $tipoInternacao = null;

    /**
     * @property string $regimeInternacao
     */
    private $regimeInternacao = null;

    /**
     * @property integer $qtDiariasSolicitadas
     */
    private $qtDiariasSolicitadas = null;

    /**
     * @property string $indicadorOPME
     */
    private $indicadorOPME = null;

    /**
     * @property string $indicadorQuimio
     */
    private $indicadorQuimio = null;

    /**
     * @property string $indicacaoClinica
     */
    private $indicacaoClinica = null;

    /**
     * Gets as caraterAtendimento
     *
     * @return string
     */
    public function getCaraterAtendimento()
    {
        return $this->caraterAtendimento;
    }

    /**
     * Sets a new caraterAtendimento
     *
     * @param string $caraterAtendimento
     * @return self
     */
    public function setCaraterAtendimento($caraterAtendimento)
    {
        $this->caraterAtendimento = $caraterAtendimento;
        return $this;
    }

    /**
     * Gets as tipoInternacao
     *
     * @return string
     */
    public function getTipoInternacao()
    {
        return $this->tipoInternacao;
    }

    /**
     * Sets a new tipoInternacao
     *
     * @param string $tipoInternacao
     * @return self
     */
    public function setTipoInternacao($tipoInternacao)
    {
        $this->tipoInternacao = $tipoInternacao;
        return $this;
    }

    /**
     * Gets as regimeInternacao
     *
     * @return string
     */
    public function getRegimeInternacao()
    {
        return $this->regimeInternacao;
    }

    /**
     * Sets a new regimeInternacao
     *
     * @param string $regimeInternacao
     * @return self
     */
    public function setRegimeInternacao($regimeInternacao)
    {
        $this->regimeInternacao = $regimeInternacao;
        return $this;
    }

    /**
     * Gets as qtDiariasSolicitadas
     *
     * @return integer
     */
    public function getQtDiariasSolicitadas()
    {
        return $this->qtDiariasSolicitadas;
    }

    /**
     * Sets a new qtDiariasSolicitadas
     *
     * @param integer $qtDiariasSolicitadas
     * @return self
     */
    public function setQtDiariasSolicitadas($qtDiariasSolicitadas)
    {
        $this->qtDiariasSolicitadas = $qtDiariasSolicitadas;
        return $this;
    }

    /**
     * Gets as indicadorOPME
     *
     * @return string
     */
    public function getIndicadorOPME()
    {
        return $this->indicadorOPME;
    }

    /**
     * Sets a new indicadorOPME
     *
     * @param string $indicadorOPME
     * @return self
     */
    public function setIndicadorOPME($indicadorOPME)
    {
        $this->indicadorOPME = $indicadorOPME;
        return $this;
    }

    /**
     * Gets as indicadorQuimio
     *
     * @return string
     */
    public function getIndicadorQuimio()
    {
        return $this->indicadorQuimio;
    }

    /**
     * Sets a new indicadorQuimio
     *
     * @param string $indicadorQuimio
     * @return self
     */
    public function setIndicadorQuimio($indicadorQuimio)
    {
        $this->indicadorQuimio = $indicadorQuimio;
        return $this;
    }

    /**
     * Gets as indicacaoClinica
     *
     * @return string
     */
    public function getIndicacaoClinica()
    {
        return $this->indicacaoClinica;
    }

    /**
     * Sets a new indicacaoClinica
     *
     * @param string $indicacaoClinica
     * @return self
     */
    public function setIndicacaoClinica($indicacaoClinica)
    {
        $this->indicacaoClinica = $indicacaoClinica;
        return $this;
    }


}

