<?php

namespace ans\schemes;

/**
 * Class representing CtmConsultaAtendimentoType
 *
 *
 * XSD Type: ctm_consultaAtendimento
 */
class CtmConsultaAtendimentoType
{

    /**
     * @property \DateTime $dataAtendimento
     */
    private $dataAtendimento = null;

    /**
     * @property string $tipoConsulta
     */
    private $tipoConsulta = null;

    /**
     * @property \ans\schemes\CtmConsultaAtendimentoType\ProcedimentoAType
     * $procedimento
     */
    private $procedimento = null;

    /**
     * Gets as dataAtendimento
     *
     * @return \DateTime
     */
    public function getDataAtendimento()
    {
        return $this->dataAtendimento;
    }

    /**
     * Sets a new dataAtendimento
     *
     * @param \DateTime $dataAtendimento
     * @return self
     */
    public function setDataAtendimento(\DateTime $dataAtendimento)
    {
        $this->dataAtendimento = $dataAtendimento;
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
     * Gets as procedimento
     *
     * @return \ans\schemes\CtmConsultaAtendimentoType\ProcedimentoAType
     */
    public function getProcedimento()
    {
        return $this->procedimento;
    }

    /**
     * Sets a new procedimento
     *
     * @param \ans\schemes\CtmConsultaAtendimentoType\ProcedimentoAType $procedimento
     * @return self
     */
    public function setProcedimento(\ans\schemes\CtmConsultaAtendimentoType\ProcedimentoAType $procedimento)
    {
        $this->procedimento = $procedimento;
        return $this;
    }


}

