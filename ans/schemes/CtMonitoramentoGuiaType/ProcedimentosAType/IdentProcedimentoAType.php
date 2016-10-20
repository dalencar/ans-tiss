<?php

namespace ans\schemes\CtMonitoramentoGuiaType\ProcedimentosAType;

/**
 * Class representing IdentProcedimentoAType
 */
class IdentProcedimentoAType
{

    /**
     * @property string $codigoTabela
     */
    private $codigoTabela = null;

    /**
     * @property
     * \ans\schemes\CtMonitoramentoGuiaType\ProcedimentosAType\IdentProcedimentoAType\ProcedimentoAType
     * $procedimento
     */
    private $procedimento = null;

    /**
     * Gets as codigoTabela
     *
     * @return string
     */
    public function getCodigoTabela()
    {
        return $this->codigoTabela;
    }

    /**
     * Sets a new codigoTabela
     *
     * @param string $codigoTabela
     * @return self
     */
    public function setCodigoTabela($codigoTabela)
    {
        $this->codigoTabela = $codigoTabela;
        return $this;
    }

    /**
     * Gets as procedimento
     *
     * @return
     * \ans\schemes\CtMonitoramentoGuiaType\ProcedimentosAType\IdentProcedimentoAType\ProcedimentoAType
     */
    public function getProcedimento()
    {
        return $this->procedimento;
    }

    /**
     * Sets a new procedimento
     *
     * @param
     * \ans\schemes\CtMonitoramentoGuiaType\ProcedimentosAType\IdentProcedimentoAType\ProcedimentoAType
     * $procedimento
     * @return self
     */
    public function setProcedimento(\ans\schemes\CtMonitoramentoGuiaType\ProcedimentosAType\IdentProcedimentoAType\ProcedimentoAType $procedimento)
    {
        $this->procedimento = $procedimento;
        return $this;
    }


}

