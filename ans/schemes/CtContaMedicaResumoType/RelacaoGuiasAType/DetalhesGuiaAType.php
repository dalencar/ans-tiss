<?php

namespace ans\schemes\CtContaMedicaResumoType\RelacaoGuiasAType;

/**
 * Class representing DetalhesGuiaAType
 */
class DetalhesGuiaAType
{

    /**
     * @property \DateTime $dataRealizacao
     */
    private $dataRealizacao = null;

    /**
     * @property \ans\schemes\CtProcedimentoDadosType $procedimento
     */
    private $procedimento = null;

    /**
     * @property string $grauParticipacao
     */
    private $grauParticipacao = null;

    /**
     * @property float $valorInformado
     */
    private $valorInformado = null;

    /**
     * @property float $qtdExecutada
     */
    private $qtdExecutada = null;

    /**
     * @property float $valorProcessado
     */
    private $valorProcessado = null;

    /**
     * @property float $valorLiberado
     */
    private $valorLiberado = null;

    /**
     * @property
     * \ans\schemes\CtContaMedicaResumoType\RelacaoGuiasAType\DetalhesGuiaAType\RelacaoGlosaAType[]
     * $relacaoGlosa
     */
    private $relacaoGlosa = null;

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
     * Gets as grauParticipacao
     *
     * @return string
     */
    public function getGrauParticipacao()
    {
        return $this->grauParticipacao;
    }

    /**
     * Sets a new grauParticipacao
     *
     * @param string $grauParticipacao
     * @return self
     */
    public function setGrauParticipacao($grauParticipacao)
    {
        $this->grauParticipacao = $grauParticipacao;
        return $this;
    }

    /**
     * Gets as valorInformado
     *
     * @return float
     */
    public function getValorInformado()
    {
        return $this->valorInformado;
    }

    /**
     * Sets a new valorInformado
     *
     * @param float $valorInformado
     * @return self
     */
    public function setValorInformado($valorInformado)
    {
        $this->valorInformado = $valorInformado;
        return $this;
    }

    /**
     * Gets as qtdExecutada
     *
     * @return float
     */
    public function getQtdExecutada()
    {
        return $this->qtdExecutada;
    }

    /**
     * Sets a new qtdExecutada
     *
     * @param float $qtdExecutada
     * @return self
     */
    public function setQtdExecutada($qtdExecutada)
    {
        $this->qtdExecutada = $qtdExecutada;
        return $this;
    }

    /**
     * Gets as valorProcessado
     *
     * @return float
     */
    public function getValorProcessado()
    {
        return $this->valorProcessado;
    }

    /**
     * Sets a new valorProcessado
     *
     * @param float $valorProcessado
     * @return self
     */
    public function setValorProcessado($valorProcessado)
    {
        $this->valorProcessado = $valorProcessado;
        return $this;
    }

    /**
     * Gets as valorLiberado
     *
     * @return float
     */
    public function getValorLiberado()
    {
        return $this->valorLiberado;
    }

    /**
     * Sets a new valorLiberado
     *
     * @param float $valorLiberado
     * @return self
     */
    public function setValorLiberado($valorLiberado)
    {
        $this->valorLiberado = $valorLiberado;
        return $this;
    }

    /**
     * Adds as relacaoGlosa
     *
     * @return self
     * @param
     * \ans\schemes\CtContaMedicaResumoType\RelacaoGuiasAType\DetalhesGuiaAType\RelacaoGlosaAType
     * $relacaoGlosa
     */
    public function addToRelacaoGlosa(\ans\schemes\CtContaMedicaResumoType\RelacaoGuiasAType\DetalhesGuiaAType\RelacaoGlosaAType $relacaoGlosa)
    {
        $this->relacaoGlosa[] = $relacaoGlosa;
        return $this;
    }

    /**
     * isset relacaoGlosa
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRelacaoGlosa($index)
    {
        return isset($this->relacaoGlosa[$index]);
    }

    /**
     * unset relacaoGlosa
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRelacaoGlosa($index)
    {
        unset($this->relacaoGlosa[$index]);
    }

    /**
     * Gets as relacaoGlosa
     *
     * @return
     * \ans\schemes\CtContaMedicaResumoType\RelacaoGuiasAType\DetalhesGuiaAType\RelacaoGlosaAType[]
     */
    public function getRelacaoGlosa()
    {
        return $this->relacaoGlosa;
    }

    /**
     * Sets a new relacaoGlosa
     *
     * @param
     * \ans\schemes\CtContaMedicaResumoType\RelacaoGuiasAType\DetalhesGuiaAType\RelacaoGlosaAType[]
     * $relacaoGlosa
     * @return self
     */
    public function setRelacaoGlosa(array $relacaoGlosa)
    {
        $this->relacaoGlosa = $relacaoGlosa;
        return $this;
    }


}

