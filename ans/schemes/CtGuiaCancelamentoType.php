<?php

namespace ans\schemes;

/**
 * Class representing CtGuiaCancelamentoType
 *
 *
 * XSD Type: ct_guiaCancelamento
 */
class CtGuiaCancelamentoType
{

    /**
     * @property string $tipoGuia
     */
    private $tipoGuia = null;

    /**
     * @property \ans\schemes\CtContratadoDadosType $dadosPrestador
     */
    private $dadosPrestador = null;

    /**
     * @property string $numeroProtocolo
     */
    private $numeroProtocolo = null;

    /**
     * @property string[] $numeroGuiaPrestador
     */
    private $numeroGuiaPrestador = null;

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
     * Gets as dadosPrestador
     *
     * @return \ans\schemes\CtContratadoDadosType
     */
    public function getDadosPrestador()
    {
        return $this->dadosPrestador;
    }

    /**
     * Sets a new dadosPrestador
     *
     * @param \ans\schemes\CtContratadoDadosType $dadosPrestador
     * @return self
     */
    public function setDadosPrestador(\ans\schemes\CtContratadoDadosType $dadosPrestador)
    {
        $this->dadosPrestador = $dadosPrestador;
        return $this;
    }

    /**
     * Gets as numeroProtocolo
     *
     * @return string
     */
    public function getNumeroProtocolo()
    {
        return $this->numeroProtocolo;
    }

    /**
     * Sets a new numeroProtocolo
     *
     * @param string $numeroProtocolo
     * @return self
     */
    public function setNumeroProtocolo($numeroProtocolo)
    {
        $this->numeroProtocolo = $numeroProtocolo;
        return $this;
    }

    /**
     * Adds as numeroGuiaPrestador
     *
     * @return self
     * @param string $numeroGuiaPrestador
     */
    public function addToNumeroGuiaPrestador($numeroGuiaPrestador)
    {
        $this->numeroGuiaPrestador[] = $numeroGuiaPrestador;
        return $this;
    }

    /**
     * isset numeroGuiaPrestador
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetNumeroGuiaPrestador($index)
    {
        return isset($this->numeroGuiaPrestador[$index]);
    }

    /**
     * unset numeroGuiaPrestador
     *
     * @param scalar $index
     * @return void
     */
    public function unsetNumeroGuiaPrestador($index)
    {
        unset($this->numeroGuiaPrestador[$index]);
    }

    /**
     * Gets as numeroGuiaPrestador
     *
     * @return string[]
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
    public function setNumeroGuiaPrestador(array $numeroGuiaPrestador)
    {
        $this->numeroGuiaPrestador = $numeroGuiaPrestador;
        return $this;
    }


}

