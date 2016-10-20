<?php

namespace ans\schemes;

/**
 * Class representing CtLoteAnexoStatusType
 *
 * resposta a uma solicitação de situação de protocolo
 * XSD Type: ct_loteAnexoStatus
 */
class CtLoteAnexoStatusType
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
     * @property \ans\schemes\CtLoteAnexoStatusType\AnexosClinicosAType[]
     * $anexosClinicos
     */
    private $anexosClinicos = null;

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
     * Adds as anexosClinicos
     *
     * @return self
     * @param \ans\schemes\CtLoteAnexoStatusType\AnexosClinicosAType $anexosClinicos
     */
    public function addToAnexosClinicos(\ans\schemes\CtLoteAnexoStatusType\AnexosClinicosAType $anexosClinicos)
    {
        $this->anexosClinicos[] = $anexosClinicos;
        return $this;
    }

    /**
     * isset anexosClinicos
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAnexosClinicos($index)
    {
        return isset($this->anexosClinicos[$index]);
    }

    /**
     * unset anexosClinicos
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAnexosClinicos($index)
    {
        unset($this->anexosClinicos[$index]);
    }

    /**
     * Gets as anexosClinicos
     *
     * @return \ans\schemes\CtLoteAnexoStatusType\AnexosClinicosAType[]
     */
    public function getAnexosClinicos()
    {
        return $this->anexosClinicos;
    }

    /**
     * Sets a new anexosClinicos
     *
     * @param \ans\schemes\CtLoteAnexoStatusType\AnexosClinicosAType[] $anexosClinicos
     * @return self
     */
    public function setAnexosClinicos(array $anexosClinicos)
    {
        $this->anexosClinicos = $anexosClinicos;
        return $this;
    }


}

