<?php

namespace ans\schemes\CtMonitoramentoGuiaType\ProcedimentosAType\IdentProcedimentoAType;

/**
 * Class representing ProcedimentoAType
 */
class ProcedimentoAType
{

    /**
     * @property string $grupoProcedimento
     */
    private $grupoProcedimento = null;

    /**
     * @property string $codigoProcedimento
     */
    private $codigoProcedimento = null;

    /**
     * Gets as grupoProcedimento
     *
     * @return string
     */
    public function getGrupoProcedimento()
    {
        return $this->grupoProcedimento;
    }

    /**
     * Sets a new grupoProcedimento
     *
     * @param string $grupoProcedimento
     * @return self
     */
    public function setGrupoProcedimento($grupoProcedimento)
    {
        $this->grupoProcedimento = $grupoProcedimento;
        return $this;
    }

    /**
     * Gets as codigoProcedimento
     *
     * @return string
     */
    public function getCodigoProcedimento()
    {
        return $this->codigoProcedimento;
    }

    /**
     * Sets a new codigoProcedimento
     *
     * @param string $codigoProcedimento
     * @return self
     */
    public function setCodigoProcedimento($codigoProcedimento)
    {
        $this->codigoProcedimento = $codigoProcedimento;
        return $this;
    }


}

