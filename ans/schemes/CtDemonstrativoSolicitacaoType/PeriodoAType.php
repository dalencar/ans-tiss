<?php

namespace ans\schemes\CtDemonstrativoSolicitacaoType;

/**
 * Class representing PeriodoAType
 */
class PeriodoAType
{

    /**
     * @property \DateTime $dataInicial
     */
    private $dataInicial = null;

    /**
     * @property \DateTime $dataFinal
     */
    private $dataFinal = null;

    /**
     * Gets as dataInicial
     *
     * @return \DateTime
     */
    public function getDataInicial()
    {
        return $this->dataInicial;
    }

    /**
     * Sets a new dataInicial
     *
     * @param \DateTime $dataInicial
     * @return self
     */
    public function setDataInicial(\DateTime $dataInicial)
    {
        $this->dataInicial = $dataInicial;
        return $this;
    }

    /**
     * Gets as dataFinal
     *
     * @return \DateTime
     */
    public function getDataFinal()
    {
        return $this->dataFinal;
    }

    /**
     * Sets a new dataFinal
     *
     * @param \DateTime $dataFinal
     * @return self
     */
    public function setDataFinal(\DateTime $dataFinal)
    {
        $this->dataFinal = $dataFinal;
        return $this;
    }


}

