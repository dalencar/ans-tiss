<?php

namespace ans\schemes;

/**
 * Class representing CtmSpSadtAtendimentoType
 *
 *
 * XSD Type: ctm_sp-sadtAtendimento
 */
class CtmSpSadtAtendimentoType
{

    /**
     * @property string $tipoAtendimento
     */
    private $tipoAtendimento = null;

    /**
     * @property string $indicacaoAcidente
     */
    private $indicacaoAcidente = null;

    /**
     * @property string $tipoConsulta
     */
    private $tipoConsulta = null;

    /**
     * @property string $motivoSaida
     */
    private $motivoSaida = null;

    /**
     * Gets as tipoAtendimento
     *
     * @return string
     */
    public function getTipoAtendimento()
    {
        return $this->tipoAtendimento;
    }

    /**
     * Sets a new tipoAtendimento
     *
     * @param string $tipoAtendimento
     * @return self
     */
    public function setTipoAtendimento($tipoAtendimento)
    {
        $this->tipoAtendimento = $tipoAtendimento;
        return $this;
    }

    /**
     * Gets as indicacaoAcidente
     *
     * @return string
     */
    public function getIndicacaoAcidente()
    {
        return $this->indicacaoAcidente;
    }

    /**
     * Sets a new indicacaoAcidente
     *
     * @param string $indicacaoAcidente
     * @return self
     */
    public function setIndicacaoAcidente($indicacaoAcidente)
    {
        $this->indicacaoAcidente = $indicacaoAcidente;
        return $this;
    }

    /**
     * Gets as tipoConsulta
     *
     * @return string
     */
    public function getTipoConsulta()
    {
        return $this->tipoConsulta;
    }

    /**
     * Sets a new tipoConsulta
     *
     * @param string $tipoConsulta
     * @return self
     */
    public function setTipoConsulta($tipoConsulta)
    {
        $this->tipoConsulta = $tipoConsulta;
        return $this;
    }

    /**
     * Gets as motivoSaida
     *
     * @return string
     */
    public function getMotivoSaida()
    {
        return $this->motivoSaida;
    }

    /**
     * Sets a new motivoSaida
     *
     * @param string $motivoSaida
     * @return self
     */
    public function setMotivoSaida($motivoSaida)
    {
        $this->motivoSaida = $motivoSaida;
        return $this;
    }


}

