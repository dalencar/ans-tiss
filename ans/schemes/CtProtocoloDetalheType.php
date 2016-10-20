<?php

namespace ans\schemes;

/**
 * Class representing CtProtocoloDetalheType
 *
 *
 * XSD Type: ct_protocoloDetalhe
 */
class CtProtocoloDetalheType
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
     * @property \ans\schemes\CtProtocoloDetalheType\GlosaProtocoloAType
     * $glosaProtocolo
     */
    private $glosaProtocolo = null;

    /**
     * @property \ans\schemes\CtProtocoloDetalheType\DadosGuiasProtocoloAType
     * $dadosGuiasProtocolo
     */
    private $dadosGuiasProtocolo = null;

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
     * Gets as glosaProtocolo
     *
     * @return \ans\schemes\CtProtocoloDetalheType\GlosaProtocoloAType
     */
    public function getGlosaProtocolo()
    {
        return $this->glosaProtocolo;
    }

    /**
     * Sets a new glosaProtocolo
     *
     * @param \ans\schemes\CtProtocoloDetalheType\GlosaProtocoloAType $glosaProtocolo
     * @return self
     */
    public function setGlosaProtocolo(\ans\schemes\CtProtocoloDetalheType\GlosaProtocoloAType $glosaProtocolo)
    {
        $this->glosaProtocolo = $glosaProtocolo;
        return $this;
    }

    /**
     * Gets as dadosGuiasProtocolo
     *
     * @return \ans\schemes\CtProtocoloDetalheType\DadosGuiasProtocoloAType
     */
    public function getDadosGuiasProtocolo()
    {
        return $this->dadosGuiasProtocolo;
    }

    /**
     * Sets a new dadosGuiasProtocolo
     *
     * @param \ans\schemes\CtProtocoloDetalheType\DadosGuiasProtocoloAType
     * $dadosGuiasProtocolo
     * @return self
     */
    public function setDadosGuiasProtocolo(\ans\schemes\CtProtocoloDetalheType\DadosGuiasProtocoloAType $dadosGuiasProtocolo)
    {
        $this->dadosGuiasProtocolo = $dadosGuiasProtocolo;
        return $this;
    }


}

