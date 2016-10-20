<?php

namespace ans\schemes\CtProtocoloDetalheType;

/**
 * Class representing GlosaProtocoloAType
 */
class GlosaProtocoloAType
{

    /**
     * @property \ans\schemes\CtMotivoGlosaType[] $motivosGlosa
     */
    private $motivosGlosa = null;

    /**
     * @property float $vlGlosaProtocolo
     */
    private $vlGlosaProtocolo = null;

    /**
     * Adds as motivoGlosa
     *
     * @return self
     * @param \ans\schemes\CtMotivoGlosaType $motivoGlosa
     */
    public function addToMotivosGlosa(\ans\schemes\CtMotivoGlosaType $motivoGlosa)
    {
        $this->motivosGlosa[] = $motivoGlosa;
        return $this;
    }

    /**
     * isset motivosGlosa
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMotivosGlosa($index)
    {
        return isset($this->motivosGlosa[$index]);
    }

    /**
     * unset motivosGlosa
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMotivosGlosa($index)
    {
        unset($this->motivosGlosa[$index]);
    }

    /**
     * Gets as motivosGlosa
     *
     * @return \ans\schemes\CtMotivoGlosaType[]
     */
    public function getMotivosGlosa()
    {
        return $this->motivosGlosa;
    }

    /**
     * Sets a new motivosGlosa
     *
     * @param \ans\schemes\CtMotivoGlosaType[] $motivosGlosa
     * @return self
     */
    public function setMotivosGlosa(array $motivosGlosa)
    {
        $this->motivosGlosa = $motivosGlosa;
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


}

