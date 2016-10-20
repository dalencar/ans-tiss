<?php

namespace ans\schemes\CtmHonorarioIndividualGuiaType;

/**
 * Class representing DadosInternacaoAType
 */
class DadosInternacaoAType
{

    /**
     * @property \DateTime $dataInicioFaturamento
     */
    private $dataInicioFaturamento = null;

    /**
     * @property \DateTime $dataFimFaturamento
     */
    private $dataFimFaturamento = null;

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
     * Gets as dataFimFaturamento
     *
     * @return \DateTime
     */
    public function getDataFimFaturamento()
    {
        return $this->dataFimFaturamento;
    }

    /**
     * Sets a new dataFimFaturamento
     *
     * @param \DateTime $dataFimFaturamento
     * @return self
     */
    public function setDataFimFaturamento(\DateTime $dataFimFaturamento)
    {
        $this->dataFimFaturamento = $dataFimFaturamento;
        return $this;
    }


}

