<?php

namespace ans\schemes;

/**
 * Class representing CtProtocoloRecebimentoAnexoType
 *
 *
 * XSD Type: ct_protocoloRecebimentoAnexo
 */
class CtProtocoloRecebimentoAnexoType
{

    /**
     * @property string $numeroProtocolo
     */
    private $numeroProtocolo = null;

    /**
     * @property \ans\schemes\CtFontePagadoraType $identificacaoOperadora
     */
    private $identificacaoOperadora = null;

    /**
     * @property \ans\schemes\CtContratadoDadosType $dadosPrestador
     */
    private $dadosPrestador = null;

    /**
     * @property string $numeroLote
     */
    private $numeroLote = null;

    /**
     * @property string $dataEnvioLote
     */
    private $dataEnvioLote = null;

    /**
     * @property \ans\schemes\CtProtocoloDetalheAnexoType $detalheProtocolo
     */
    private $detalheProtocolo = null;

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
     * Gets as identificacaoOperadora
     *
     * @return \ans\schemes\CtFontePagadoraType
     */
    public function getIdentificacaoOperadora()
    {
        return $this->identificacaoOperadora;
    }

    /**
     * Sets a new identificacaoOperadora
     *
     * @param \ans\schemes\CtFontePagadoraType $identificacaoOperadora
     * @return self
     */
    public function setIdentificacaoOperadora(\ans\schemes\CtFontePagadoraType $identificacaoOperadora)
    {
        $this->identificacaoOperadora = $identificacaoOperadora;
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
     * Gets as numeroLote
     *
     * @return string
     */
    public function getNumeroLote()
    {
        return $this->numeroLote;
    }

    /**
     * Sets a new numeroLote
     *
     * @param string $numeroLote
     * @return self
     */
    public function setNumeroLote($numeroLote)
    {
        $this->numeroLote = $numeroLote;
        return $this;
    }

    /**
     * Gets as dataEnvioLote
     *
     * @return string
     */
    public function getDataEnvioLote()
    {
        return $this->dataEnvioLote;
    }

    /**
     * Sets a new dataEnvioLote
     *
     * @param string $dataEnvioLote
     * @return self
     */
    public function setDataEnvioLote($dataEnvioLote)
    {
        $this->dataEnvioLote = $dataEnvioLote;
        return $this;
    }

    /**
     * Gets as detalheProtocolo
     *
     * @return \ans\schemes\CtProtocoloDetalheAnexoType
     */
    public function getDetalheProtocolo()
    {
        return $this->detalheProtocolo;
    }

    /**
     * Sets a new detalheProtocolo
     *
     * @param \ans\schemes\CtProtocoloDetalheAnexoType $detalheProtocolo
     * @return self
     */
    public function setDetalheProtocolo(\ans\schemes\CtProtocoloDetalheAnexoType $detalheProtocolo)
    {
        $this->detalheProtocolo = $detalheProtocolo;
        return $this;
    }


}

