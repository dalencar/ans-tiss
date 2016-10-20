<?php

namespace ans\schemes\CtOutrasDespesasType;

/**
 * Class representing DespesaAType
 */
class DespesaAType
{

    /**
     * @property string $codigoDespesa
     */
    private $codigoDespesa = null;

    /**
     * @property \ans\schemes\CtProcedimentoExecutadoOutrasType $servicosExecutados
     */
    private $servicosExecutados = null;

    /**
     * Gets as codigoDespesa
     *
     * @return string
     */
    public function getCodigoDespesa()
    {
        return $this->codigoDespesa;
    }

    /**
     * Sets a new codigoDespesa
     *
     * @param string $codigoDespesa
     * @return self
     */
    public function setCodigoDespesa($codigoDespesa)
    {
        $this->codigoDespesa = $codigoDespesa;
        return $this;
    }

    /**
     * Gets as servicosExecutados
     *
     * @return \ans\schemes\CtProcedimentoExecutadoOutrasType
     */
    public function getServicosExecutados()
    {
        return $this->servicosExecutados;
    }

    /**
     * Sets a new servicosExecutados
     *
     * @param \ans\schemes\CtProcedimentoExecutadoOutrasType $servicosExecutados
     * @return self
     */
    public function setServicosExecutados(\ans\schemes\CtProcedimentoExecutadoOutrasType $servicosExecutados)
    {
        $this->servicosExecutados = $servicosExecutados;
        return $this;
    }


}

