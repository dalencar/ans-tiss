<?php

namespace ans\schemes;

/**
 * Class representing CtRespostaGlosaType
 *
 *
 * XSD Type: ct_respostaGlosa
 */
class CtRespostaGlosaType
{

    /**
     * @property \ans\schemes\CtGlosaReciboType $reciboGlosa
     */
    private $reciboGlosa = null;

    /**
     * @property \ans\schemes\CtGlosaReciboOdontoType $reciboGlosaOdonto
     */
    private $reciboGlosaOdonto = null;

    /**
     * @property \ans\schemes\CtRespostaGlosaType\ReciboGlosaStatusAType
     * $reciboGlosaStatus
     */
    private $reciboGlosaStatus = null;

    /**
     * Gets as reciboGlosa
     *
     * @return \ans\schemes\CtGlosaReciboType
     */
    public function getReciboGlosa()
    {
        return $this->reciboGlosa;
    }

    /**
     * Sets a new reciboGlosa
     *
     * @param \ans\schemes\CtGlosaReciboType $reciboGlosa
     * @return self
     */
    public function setReciboGlosa(\ans\schemes\CtGlosaReciboType $reciboGlosa)
    {
        $this->reciboGlosa = $reciboGlosa;
        return $this;
    }

    /**
     * Gets as reciboGlosaOdonto
     *
     * @return \ans\schemes\CtGlosaReciboOdontoType
     */
    public function getReciboGlosaOdonto()
    {
        return $this->reciboGlosaOdonto;
    }

    /**
     * Sets a new reciboGlosaOdonto
     *
     * @param \ans\schemes\CtGlosaReciboOdontoType $reciboGlosaOdonto
     * @return self
     */
    public function setReciboGlosaOdonto(\ans\schemes\CtGlosaReciboOdontoType $reciboGlosaOdonto)
    {
        $this->reciboGlosaOdonto = $reciboGlosaOdonto;
        return $this;
    }

    /**
     * Gets as reciboGlosaStatus
     *
     * @return \ans\schemes\CtRespostaGlosaType\ReciboGlosaStatusAType
     */
    public function getReciboGlosaStatus()
    {
        return $this->reciboGlosaStatus;
    }

    /**
     * Sets a new reciboGlosaStatus
     *
     * @param \ans\schemes\CtRespostaGlosaType\ReciboGlosaStatusAType
     * $reciboGlosaStatus
     * @return self
     */
    public function setReciboGlosaStatus(\ans\schemes\CtRespostaGlosaType\ReciboGlosaStatusAType $reciboGlosaStatus)
    {
        $this->reciboGlosaStatus = $reciboGlosaStatus;
        return $this;
    }


}

