<?php

namespace ans\schemes\CtmAutorizacaoQuimioType;

/**
 * Class representing DrogasSolicitadasAType
 */
class DrogasSolicitadasAType
{

    /**
     * @property \ans\schemes\CtDrogasSolicitadasType[] $drogaSolicitada
     */
    private $drogaSolicitada = null;

    /**
     * Adds as drogaSolicitada
     *
     * @return self
     * @param \ans\schemes\CtDrogasSolicitadasType $drogaSolicitada
     */
    public function addToDrogaSolicitada(\ans\schemes\CtDrogasSolicitadasType $drogaSolicitada)
    {
        $this->drogaSolicitada[] = $drogaSolicitada;
        return $this;
    }

    /**
     * isset drogaSolicitada
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDrogaSolicitada($index)
    {
        return isset($this->drogaSolicitada[$index]);
    }

    /**
     * unset drogaSolicitada
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDrogaSolicitada($index)
    {
        unset($this->drogaSolicitada[$index]);
    }

    /**
     * Gets as drogaSolicitada
     *
     * @return \ans\schemes\CtDrogasSolicitadasType[]
     */
    public function getDrogaSolicitada()
    {
        return $this->drogaSolicitada;
    }

    /**
     * Sets a new drogaSolicitada
     *
     * @param \ans\schemes\CtDrogasSolicitadasType[] $drogaSolicitada
     * @return self
     */
    public function setDrogaSolicitada(array $drogaSolicitada)
    {
        $this->drogaSolicitada = $drogaSolicitada;
        return $this;
    }


}

