<?php

namespace ans\schemes\CtmProrrogacaoSolicitacaoGuiaType;

/**
 * Class representing DadosInternacaoAType
 */
class DadosInternacaoAType
{

    /**
     * @property integer $qtDiariasAdicionais
     */
    private $qtDiariasAdicionais = null;

    /**
     * @property string $tipoAcomodacaoSolicitada
     */
    private $tipoAcomodacaoSolicitada = null;

    /**
     * @property string $indicacaoClinica
     */
    private $indicacaoClinica = null;

    /**
     * Gets as qtDiariasAdicionais
     *
     * @return integer
     */
    public function getQtDiariasAdicionais()
    {
        return $this->qtDiariasAdicionais;
    }

    /**
     * Sets a new qtDiariasAdicionais
     *
     * @param integer $qtDiariasAdicionais
     * @return self
     */
    public function setQtDiariasAdicionais($qtDiariasAdicionais)
    {
        $this->qtDiariasAdicionais = $qtDiariasAdicionais;
        return $this;
    }

    /**
     * Gets as tipoAcomodacaoSolicitada
     *
     * @return string
     */
    public function getTipoAcomodacaoSolicitada()
    {
        return $this->tipoAcomodacaoSolicitada;
    }

    /**
     * Sets a new tipoAcomodacaoSolicitada
     *
     * @param string $tipoAcomodacaoSolicitada
     * @return self
     */
    public function setTipoAcomodacaoSolicitada($tipoAcomodacaoSolicitada)
    {
        $this->tipoAcomodacaoSolicitada = $tipoAcomodacaoSolicitada;
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

