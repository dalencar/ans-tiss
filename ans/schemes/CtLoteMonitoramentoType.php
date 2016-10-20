<?php

namespace ans\schemes;

/**
 * Class representing CtLoteMonitoramentoType
 *
 *
 * XSD Type: ct_loteMonitoramento
 */
class CtLoteMonitoramentoType
{

    /**
     * @property \ans\schemes\CabecalhoTransacaoType $cabecalho
     */
    private $cabecalho = null;

    /**
     * @property \ans\schemes\CtMonitoramentoGuiaType[] $guiasMonitoramento
     */
    private $guiasMonitoramento = null;

    /**
     * @property \ans\schemes\EpilogoType $epilogo
     */
    private $epilogo = null;

    /**
     * Gets as cabecalho
     *
     * @return \ans\schemes\CabecalhoTransacaoType
     */
    public function getCabecalho()
    {
        return $this->cabecalho;
    }

    /**
     * Sets a new cabecalho
     *
     * @param \ans\schemes\CabecalhoTransacaoType $cabecalho
     * @return self
     */
    public function setCabecalho(\ans\schemes\CabecalhoTransacaoType $cabecalho)
    {
        $this->cabecalho = $cabecalho;
        return $this;
    }

    /**
     * Adds as guiaMonitoramento
     *
     * @return self
     * @param \ans\schemes\CtMonitoramentoGuiaType $guiaMonitoramento
     */
    public function addToGuiasMonitoramento(\ans\schemes\CtMonitoramentoGuiaType $guiaMonitoramento)
    {
        $this->guiasMonitoramento[] = $guiaMonitoramento;
        return $this;
    }

    /**
     * isset guiasMonitoramento
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuiasMonitoramento($index)
    {
        return isset($this->guiasMonitoramento[$index]);
    }

    /**
     * unset guiasMonitoramento
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuiasMonitoramento($index)
    {
        unset($this->guiasMonitoramento[$index]);
    }

    /**
     * Gets as guiasMonitoramento
     *
     * @return \ans\schemes\CtMonitoramentoGuiaType[]
     */
    public function getGuiasMonitoramento()
    {
        return $this->guiasMonitoramento;
    }

    /**
     * Sets a new guiasMonitoramento
     *
     * @param \ans\schemes\CtMonitoramentoGuiaType[] $guiasMonitoramento
     * @return self
     */
    public function setGuiasMonitoramento(array $guiasMonitoramento)
    {
        $this->guiasMonitoramento = $guiasMonitoramento;
        return $this;
    }

    /**
     * Gets as epilogo
     *
     * @return \ans\schemes\EpilogoType
     */
    public function getEpilogo()
    {
        return $this->epilogo;
    }

    /**
     * Sets a new epilogo
     *
     * @param \ans\schemes\EpilogoType $epilogo
     * @return self
     */
    public function setEpilogo(\ans\schemes\EpilogoType $epilogo)
    {
        $this->epilogo = $epilogo;
        return $this;
    }


}

