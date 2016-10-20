<?php

namespace ans\schemes\CtmSpSadtGuiaType;

/**
 * Class representing DadosSolicitacaoAType
 */
class DadosSolicitacaoAType
{

    /**
     * @property \DateTime $dataSolicitacao
     */
    private $dataSolicitacao = null;

    /**
     * @property string $caraterAtendimento
     */
    private $caraterAtendimento = null;

    /**
     * @property string $indicacaoClinica
     */
    private $indicacaoClinica = null;

    /**
     * Gets as dataSolicitacao
     *
     * @return \DateTime
     */
    public function getDataSolicitacao()
    {
        return $this->dataSolicitacao;
    }

    /**
     * Sets a new dataSolicitacao
     *
     * @param \DateTime $dataSolicitacao
     * @return self
     */
    public function setDataSolicitacao(\DateTime $dataSolicitacao)
    {
        $this->dataSolicitacao = $dataSolicitacao;
        return $this;
    }

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

