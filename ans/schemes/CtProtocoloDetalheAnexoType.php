<?php

namespace ans\schemes;

/**
 * Class representing CtProtocoloDetalheAnexoType
 *
 *
 * XSD Type: ct_protocoloDetalheAnexo
 */
class CtProtocoloDetalheAnexoType
{

    /**
     * @property string $numeroProtocolo
     */
    private $numeroProtocolo = null;

    /**
     * @property float $valorTotalProtocolo
     */
    private $valorTotalProtocolo = null;

    /**
     * @property \ans\schemes\CtMotivoGlosaType[] $glosasProtocolo
     */
    private $glosasProtocolo = null;

    /**
     * @property float $vlGlosaProtocolo
     */
    private $vlGlosaProtocolo = null;

    /**
     * @property \ans\schemes\CtGuiaDadosAnexoType[] $dadosGuias
     */
    private $dadosGuias = null;

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
     * Gets as valorTotalProtocolo
     *
     * @return float
     */
    public function getValorTotalProtocolo()
    {
        return $this->valorTotalProtocolo;
    }

    /**
     * Sets a new valorTotalProtocolo
     *
     * @param float $valorTotalProtocolo
     * @return self
     */
    public function setValorTotalProtocolo($valorTotalProtocolo)
    {
        $this->valorTotalProtocolo = $valorTotalProtocolo;
        return $this;
    }

    /**
     * Adds as glosasProtocolo
     *
     * @return self
     * @param \ans\schemes\CtMotivoGlosaType $glosasProtocolo
     */
    public function addToGlosasProtocolo(\ans\schemes\CtMotivoGlosaType $glosasProtocolo)
    {
        $this->glosasProtocolo[] = $glosasProtocolo;
        return $this;
    }

    /**
     * isset glosasProtocolo
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGlosasProtocolo($index)
    {
        return isset($this->glosasProtocolo[$index]);
    }

    /**
     * unset glosasProtocolo
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGlosasProtocolo($index)
    {
        unset($this->glosasProtocolo[$index]);
    }

    /**
     * Gets as glosasProtocolo
     *
     * @return \ans\schemes\CtMotivoGlosaType[]
     */
    public function getGlosasProtocolo()
    {
        return $this->glosasProtocolo;
    }

    /**
     * Sets a new glosasProtocolo
     *
     * @param \ans\schemes\CtMotivoGlosaType[] $glosasProtocolo
     * @return self
     */
    public function setGlosasProtocolo(array $glosasProtocolo)
    {
        $this->glosasProtocolo = $glosasProtocolo;
        return $this;
    }

    /**
     * Gets as vlGlosaProtocolo
     *
     * @return float
     */
    public function getVlGlosaProtocolo()
    {
        return $this->vlGlosaProtocolo;
    }

    /**
     * Sets a new vlGlosaProtocolo
     *
     * @param float $vlGlosaProtocolo
     * @return self
     */
    public function setVlGlosaProtocolo($vlGlosaProtocolo)
    {
        $this->vlGlosaProtocolo = $vlGlosaProtocolo;
        return $this;
    }

    /**
     * Adds as dadosGuias
     *
     * @return self
     * @param \ans\schemes\CtGuiaDadosAnexoType $dadosGuias
     */
    public function addToDadosGuias(\ans\schemes\CtGuiaDadosAnexoType $dadosGuias)
    {
        $this->dadosGuias[] = $dadosGuias;
        return $this;
    }

    /**
     * isset dadosGuias
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDadosGuias($index)
    {
        return isset($this->dadosGuias[$index]);
    }

    /**
     * unset dadosGuias
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDadosGuias($index)
    {
        unset($this->dadosGuias[$index]);
    }

    /**
     * Gets as dadosGuias
     *
     * @return \ans\schemes\CtGuiaDadosAnexoType[]
     */
    public function getDadosGuias()
    {
        return $this->dadosGuias;
    }

    /**
     * Sets a new dadosGuias
     *
     * @param \ans\schemes\CtGuiaDadosAnexoType[] $dadosGuias
     * @return self
     */
    public function setDadosGuias(array $dadosGuias)
    {
        $this->dadosGuias = $dadosGuias;
        return $this;
    }


}

