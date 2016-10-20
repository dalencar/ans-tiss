<?php

namespace ans\schemes\CtLoteMonitoramentoType;

/**
 * Class representing GuiasMonitoramentoAType
 */
class GuiasMonitoramentoAType
{

    /**
     * @property \ans\schemes\CtMonitoramentoGuiaType[] $guiaMonitoramento
     */
    private $guiaMonitoramento = null;

    /**
     * Adds as guiaMonitoramento
     *
     * @return self
     * @param \ans\schemes\CtMonitoramentoGuiaType $guiaMonitoramento
     */
    public function addToGuiaMonitoramento(\ans\schemes\CtMonitoramentoGuiaType $guiaMonitoramento)
    {
        $this->guiaMonitoramento[] = $guiaMonitoramento;
        return $this;
    }

    /**
     * isset guiaMonitoramento
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuiaMonitoramento($index)
    {
        return isset($this->guiaMonitoramento[$index]);
    }

    /**
     * unset guiaMonitoramento
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuiaMonitoramento($index)
    {
        unset($this->guiaMonitoramento[$index]);
    }

    /**
     * Gets as guiaMonitoramento
     *
     * @return \ans\schemes\CtMonitoramentoGuiaType[]
     */
    public function getGuiaMonitoramento()
    {
        return $this->guiaMonitoramento;
    }

    /**
     * Sets a new guiaMonitoramento
     *
     * @param \ans\schemes\CtMonitoramentoGuiaType[] $guiaMonitoramento
     * @return self
     */
    public function setGuiaMonitoramento(array $guiaMonitoramento)
    {
        $this->guiaMonitoramento = $guiaMonitoramento;
        return $this;
    }


}

