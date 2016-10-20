<?php

namespace ans\schemes;

/**
 * Class representing CtLoteStatusType
 *
 * resposta a uma solicitação de situação de protocolo
 * XSD Type: ct_loteStatus
 */
class CtLoteStatusType
{

    /**
     * @property string $statusProtocolo
     */
    private $statusProtocolo = null;

    /**
     * @property string $numeroProtocolo
     */
    private $numeroProtocolo = null;

    /**
     * @property string $numeroLote
     */
    private $numeroLote = null;

    /**
     * @property \DateTime $dataEnvioLote
     */
    private $dataEnvioLote = null;

    /**
     * @property \ans\schemes\CtValorTotalType $valorTotalLote
     */
    private $valorTotalLote = null;

    /**
     * @property \ans\schemes\CtLoteStatusType\GuiasTISSAType $guiasTISS
     */
    private $guiasTISS = null;

    /**
     * Gets as statusProtocolo
     *
     * @return string
     */
    public function getStatusProtocolo()
    {
        return $this->statusProtocolo;
    }

    /**
     * Sets a new statusProtocolo
     *
     * @param string $statusProtocolo
     * @return self
     */
    public function setStatusProtocolo($statusProtocolo)
    {
        $this->statusProtocolo = $statusProtocolo;
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
     * Gets as valorTotalLote
     *
     * @return \ans\schemes\CtValorTotalType
     */
    public function getValorTotalLote()
    {
        return $this->valorTotalLote;
    }

    /**
     * Sets a new valorTotalLote
     *
     * @param \ans\schemes\CtValorTotalType $valorTotalLote
     * @return self
     */
    public function setValorTotalLote(\ans\schemes\CtValorTotalType $valorTotalLote)
    {
        $this->valorTotalLote = $valorTotalLote;
        return $this;
    }

    /**
     * Gets as guiasTISS
     *
     * @return \ans\schemes\CtLoteStatusType\GuiasTISSAType
     */
    public function getGuiasTISS()
    {
        return $this->guiasTISS;
    }

    /**
     * Sets a new guiasTISS
     *
     * @param \ans\schemes\CtLoteStatusType\GuiasTISSAType $guiasTISS
     * @return self
     */
    public function setGuiasTISS(\ans\schemes\CtLoteStatusType\GuiasTISSAType $guiasTISS)
    {
        $this->guiasTISS = $guiasTISS;
        return $this;
    }


}

