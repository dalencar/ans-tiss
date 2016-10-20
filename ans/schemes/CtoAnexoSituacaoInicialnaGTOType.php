<?php

namespace ans\schemes;

/**
 * Class representing CtoAnexoSituacaoInicialnaGTOType
 *
 *
 * XSD Type: cto_anexoSituacaoInicialnaGTO
 */
class CtoAnexoSituacaoInicialnaGTOType
{

    /**
     * @property string $numeroGuiaAnexo
     */
    private $numeroGuiaAnexo = null;

    /**
     * @property string $numeroGuiaReferenciada
     */
    private $numeroGuiaReferenciada = null;

    /**
     * @property string $numeroGuiaOperadora
     */
    private $numeroGuiaOperadora = null;

    /**
     * @property \ans\schemes\CtoAnexoSituacaoInicialnaGTOType\CtSituacaoInicialAType
     * $ctSituacaoInicial
     */
    private $ctSituacaoInicial = null;

    /**
     * Gets as numeroGuiaAnexo
     *
     * @return string
     */
    public function getNumeroGuiaAnexo()
    {
        return $this->numeroGuiaAnexo;
    }

    /**
     * Sets a new numeroGuiaAnexo
     *
     * @param string $numeroGuiaAnexo
     * @return self
     */
    public function setNumeroGuiaAnexo($numeroGuiaAnexo)
    {
        $this->numeroGuiaAnexo = $numeroGuiaAnexo;
        return $this;
    }

    /**
     * Gets as numeroGuiaReferenciada
     *
     * @return string
     */
    public function getNumeroGuiaReferenciada()
    {
        return $this->numeroGuiaReferenciada;
    }

    /**
     * Sets a new numeroGuiaReferenciada
     *
     * @param string $numeroGuiaReferenciada
     * @return self
     */
    public function setNumeroGuiaReferenciada($numeroGuiaReferenciada)
    {
        $this->numeroGuiaReferenciada = $numeroGuiaReferenciada;
        return $this;
    }

    /**
     * Gets as numeroGuiaOperadora
     *
     * @return string
     */
    public function getNumeroGuiaOperadora()
    {
        return $this->numeroGuiaOperadora;
    }

    /**
     * Sets a new numeroGuiaOperadora
     *
     * @param string $numeroGuiaOperadora
     * @return self
     */
    public function setNumeroGuiaOperadora($numeroGuiaOperadora)
    {
        $this->numeroGuiaOperadora = $numeroGuiaOperadora;
        return $this;
    }

    /**
     * Gets as ctSituacaoInicial
     *
     * @return \ans\schemes\CtoAnexoSituacaoInicialnaGTOType\CtSituacaoInicialAType
     */
    public function getCtSituacaoInicial()
    {
        return $this->ctSituacaoInicial;
    }

    /**
     * Sets a new ctSituacaoInicial
     *
     * @param \ans\schemes\CtoAnexoSituacaoInicialnaGTOType\CtSituacaoInicialAType
     * $ctSituacaoInicial
     * @return self
     */
    public function setCtSituacaoInicial(\ans\schemes\CtoAnexoSituacaoInicialnaGTOType\CtSituacaoInicialAType $ctSituacaoInicial)
    {
        $this->ctSituacaoInicial = $ctSituacaoInicial;
        return $this;
    }


}

