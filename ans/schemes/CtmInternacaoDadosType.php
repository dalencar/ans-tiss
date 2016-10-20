<?php

namespace ans\schemes;

/**
 * Class representing CtmInternacaoDadosType
 *
 *
 * XSD Type: ctm_internacaoDados
 */
class CtmInternacaoDadosType
{

    /**
     * @property string $caraterAtendimento
     */
    private $caraterAtendimento = null;

    /**
     * @property string $tipoFaturamento
     */
    private $tipoFaturamento = null;

    /**
     * @property \DateTime $dataInicioFaturamento
     */
    private $dataInicioFaturamento = null;

    /**
     * @property \DateTime $horaInicioFaturamento
     */
    private $horaInicioFaturamento = null;

    /**
     * @property \DateTime $dataFinalFaturamento
     */
    private $dataFinalFaturamento = null;

    /**
     * @property \DateTime $horaFinalFaturamento
     */
    private $horaFinalFaturamento = null;

    /**
     * @property string $tipoInternacao
     */
    private $tipoInternacao = null;

    /**
     * @property string $regimeInternacao
     */
    private $regimeInternacao = null;

    /**
     * @property \ans\schemes\CtmInternacaoDadosType\DeclaracoesAType[] $declaracoes
     */
    private $declaracoes = null;

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
     * Gets as tipoFaturamento
     *
     * @return string
     */
    public function getTipoFaturamento()
    {
        return $this->tipoFaturamento;
    }

    /**
     * Sets a new tipoFaturamento
     *
     * @param string $tipoFaturamento
     * @return self
     */
    public function setTipoFaturamento($tipoFaturamento)
    {
        $this->tipoFaturamento = $tipoFaturamento;
        return $this;
    }

    /**
     * Gets as dataInicioFaturamento
     *
     * @return \DateTime
     */
    public function getDataInicioFaturamento()
    {
        return $this->dataInicioFaturamento;
    }

    /**
     * Sets a new dataInicioFaturamento
     *
     * @param \DateTime $dataInicioFaturamento
     * @return self
     */
    public function setDataInicioFaturamento(\DateTime $dataInicioFaturamento)
    {
        $this->dataInicioFaturamento = $dataInicioFaturamento;
        return $this;
    }

    /**
     * Gets as horaInicioFaturamento
     *
     * @return \DateTime
     */
    public function getHoraInicioFaturamento()
    {
        return $this->horaInicioFaturamento;
    }

    /**
     * Sets a new horaInicioFaturamento
     *
     * @param \DateTime $horaInicioFaturamento
     * @return self
     */
    public function setHoraInicioFaturamento(\DateTime $horaInicioFaturamento)
    {
        $this->horaInicioFaturamento = $horaInicioFaturamento;
        return $this;
    }

    /**
     * Gets as dataFinalFaturamento
     *
     * @return \DateTime
     */
    public function getDataFinalFaturamento()
    {
        return $this->dataFinalFaturamento;
    }

    /**
     * Sets a new dataFinalFaturamento
     *
     * @param \DateTime $dataFinalFaturamento
     * @return self
     */
    public function setDataFinalFaturamento(\DateTime $dataFinalFaturamento)
    {
        $this->dataFinalFaturamento = $dataFinalFaturamento;
        return $this;
    }

    /**
     * Gets as horaFinalFaturamento
     *
     * @return \DateTime
     */
    public function getHoraFinalFaturamento()
    {
        return $this->horaFinalFaturamento;
    }

    /**
     * Sets a new horaFinalFaturamento
     *
     * @param \DateTime $horaFinalFaturamento
     * @return self
     */
    public function setHoraFinalFaturamento(\DateTime $horaFinalFaturamento)
    {
        $this->horaFinalFaturamento = $horaFinalFaturamento;
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
     * Adds as declaracoes
     *
     * @return self
     * @param \ans\schemes\CtmInternacaoDadosType\DeclaracoesAType $declaracoes
     */
    public function addToDeclaracoes(\ans\schemes\CtmInternacaoDadosType\DeclaracoesAType $declaracoes)
    {
        $this->declaracoes[] = $declaracoes;
        return $this;
    }

    /**
     * isset declaracoes
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDeclaracoes($index)
    {
        return isset($this->declaracoes[$index]);
    }

    /**
     * unset declaracoes
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDeclaracoes($index)
    {
        unset($this->declaracoes[$index]);
    }

    /**
     * Gets as declaracoes
     *
     * @return \ans\schemes\CtmInternacaoDadosType\DeclaracoesAType[]
     */
    public function getDeclaracoes()
    {
        return $this->declaracoes;
    }

    /**
     * Sets a new declaracoes
     *
     * @param \ans\schemes\CtmInternacaoDadosType\DeclaracoesAType[] $declaracoes
     * @return self
     */
    public function setDeclaracoes(array $declaracoes)
    {
        $this->declaracoes = $declaracoes;
        return $this;
    }


}

