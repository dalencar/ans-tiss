<?php

namespace ans\schemes;

/**
 * Class representing CtDadosResumoDemonstrativoType
 *
 *
 * XSD Type: ct_dadosResumoDemonstrativo
 */
class CtDadosResumoDemonstrativoType
{

    /**
     * @property \DateTime $dataProtocolo
     */
    private $dataProtocolo = null;

    /**
     * @property string $numeroProtocolo
     */
    private $numeroProtocolo = null;

    /**
     * @property string $numeroLote
     */
    private $numeroLote = null;

    /**
     * @property float $valorInformado
     */
    private $valorInformado = null;

    /**
     * @property float $valorProcessado
     */
    private $valorProcessado = null;

    /**
     * @property float $valorLiberado
     */
    private $valorLiberado = null;

    /**
     * @property float $valorGlosa
     */
    private $valorGlosa = null;

    /**
     * Gets as dataProtocolo
     *
     * @return \DateTime
     */
    public function getDataProtocolo()
    {
        return $this->dataProtocolo;
    }

    /**
     * Sets a new dataProtocolo
     *
     * @param \DateTime $dataProtocolo
     * @return self
     */
    public function setDataProtocolo(\DateTime $dataProtocolo)
    {
        $this->dataProtocolo = $dataProtocolo;
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
     * Gets as valorInformado
     *
     * @return float
     */
    public function getValorInformado()
    {
        return $this->valorInformado;
    }

    /**
     * Sets a new valorInformado
     *
     * @param float $valorInformado
     * @return self
     */
    public function setValorInformado($valorInformado)
    {
        $this->valorInformado = $valorInformado;
        return $this;
    }

    /**
     * Gets as valorProcessado
     *
     * @return float
     */
    public function getValorProcessado()
    {
        return $this->valorProcessado;
    }

    /**
     * Sets a new valorProcessado
     *
     * @param float $valorProcessado
     * @return self
     */
    public function setValorProcessado($valorProcessado)
    {
        $this->valorProcessado = $valorProcessado;
        return $this;
    }

    /**
     * Gets as valorLiberado
     *
     * @return float
     */
    public function getValorLiberado()
    {
        return $this->valorLiberado;
    }

    /**
     * Sets a new valorLiberado
     *
     * @param float $valorLiberado
     * @return self
     */
    public function setValorLiberado($valorLiberado)
    {
        $this->valorLiberado = $valorLiberado;
        return $this;
    }

    /**
     * Gets as valorGlosa
     *
     * @return float
     */
    public function getValorGlosa()
    {
        return $this->valorGlosa;
    }

    /**
     * Sets a new valorGlosa
     *
     * @param float $valorGlosa
     * @return self
     */
    public function setValorGlosa($valorGlosa)
    {
        $this->valorGlosa = $valorGlosa;
        return $this;
    }


}

