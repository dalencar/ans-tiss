<?php

namespace ans\schemes\CtGuiaCancelamentoReciboType\GuiasCanceladasAType;

/**
 * Class representing DadosGuiaAType
 */
class DadosGuiaAType
{

    /**
     * @property string $numeroGuiaPrestador
     */
    private $numeroGuiaPrestador = null;

    /**
     * @property string $tipoGuia
     */
    private $tipoGuia = null;

    /**
     * @property string $statusCancelamento
     */
    private $statusCancelamento = null;

    /**
     * Gets as numeroGuiaPrestador
     *
     * @return string
     */
    public function getNumeroGuiaPrestador()
    {
        return $this->numeroGuiaPrestador;
    }

    /**
     * Sets a new numeroGuiaPrestador
     *
     * @param string $numeroGuiaPrestador
     * @return self
     */
    public function setNumeroGuiaPrestador($numeroGuiaPrestador)
    {
        $this->numeroGuiaPrestador = $numeroGuiaPrestador;
        return $this;
    }

    /**
     * Gets as tipoGuia
     *
     * @return string
     */
    public function getTipoGuia()
    {
        return $this->tipoGuia;
    }

    /**
     * Sets a new tipoGuia
     *
     * @param string $tipoGuia
     * @return self
     */
    public function setTipoGuia($tipoGuia)
    {
        $this->tipoGuia = $tipoGuia;
        return $this;
    }

    /**
     * Gets as statusCancelamento
     *
     * @return string
     */
    public function getStatusCancelamento()
    {
        return $this->statusCancelamento;
    }

    /**
     * Sets a new statusCancelamento
     *
     * @param string $statusCancelamento
     * @return self
     */
    public function setStatusCancelamento($statusCancelamento)
    {
        $this->statusCancelamento = $statusCancelamento;
        return $this;
    }


}

