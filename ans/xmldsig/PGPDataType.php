<?php

namespace ans\xmldsig;

/**
 * Class representing PGPDataType
 *
 *
 * XSD Type: PGPDataType
 */
class PGPDataType
{

    /**
     * @property mixed $pGPKeyID
     */
    private $pGPKeyID = null;

    /**
     * @property mixed $pGPKeyPacket
     */
    private $pGPKeyPacket = null;

    /**
     * Gets as pGPKeyID
     *
     * @return mixed
     */
    public function getPGPKeyID()
    {
        return $this->pGPKeyID;
    }

    /**
     * Sets a new pGPKeyID
     *
     * @param mixed $pGPKeyID
     * @return self
     */
    public function setPGPKeyID($pGPKeyID)
    {
        $this->pGPKeyID = $pGPKeyID;
        return $this;
    }

    /**
     * Gets as pGPKeyPacket
     *
     * @return mixed
     */
    public function getPGPKeyPacket()
    {
        return $this->pGPKeyPacket;
    }

    /**
     * Sets a new pGPKeyPacket
     *
     * @param mixed $pGPKeyPacket
     * @return self
     */
    public function setPGPKeyPacket($pGPKeyPacket)
    {
        $this->pGPKeyPacket = $pGPKeyPacket;
        return $this;
    }


}

