<?php

namespace ans\schemes;

/**
 * Class representing CtProtocoloRecebimentoType
 *
 *
 * XSD Type: ct_protocoloRecebimento
 */
class CtProtocoloRecebimentoType
{

    /**
     * @property string $registroANS
     */
    private $registroANS = null;

    /**
     * @property \ans\schemes\CtContratadoDadosType $dadosPrestador
     */
    private $dadosPrestador = null;

    /**
     * @property string $numeroLote
     */
    private $numeroLote = null;

    /**
     * @property \DateTime $dataEnvioLote
     */
    private $dataEnvioLote = null;

    /**
     * @property \ans\schemes\CtProtocoloDetalheType $detalheProtocolo
     */
    private $detalheProtocolo = null;

    /**
     * Gets as registroANS
     *
     * @return string
     */
    public function getRegistroANS()
    {
        return $this->registroANS;
    }

    /**
     * Sets a new registroANS
     *
     * @param string $registroANS
     * @return self
     */
    public function setRegistroANS($registroANS)
    {
        $this->registroANS = $registroANS;
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
     * @return \DateTime
     */
    public function getDataEnvioLote()
    {
        return $this->dataEnvioLote;
    }

    /**
     * Sets a new dataEnvioLote
     *
     * @param \DateTime $dataEnvioLote
     * @return self
     */
    public function setDataEnvioLote(\DateTime $dataEnvioLote)
    {
        $this->dataEnvioLote = $dataEnvioLote;
        return $this;
    }

    /**
     * Gets as detalheProtocolo
     *
     * @return \ans\schemes\CtProtocoloDetalheType
     */
    public function getDetalheProtocolo()
    {
        return $this->detalheProtocolo;
    }

    /**
     * Sets a new detalheProtocolo
     *
     * @param \ans\schemes\CtProtocoloDetalheType $detalheProtocolo
     * @return self
     */
    public function setDetalheProtocolo(\ans\schemes\CtProtocoloDetalheType $detalheProtocolo)
    {
        $this->detalheProtocolo = $detalheProtocolo;
        return $this;
    }


}

