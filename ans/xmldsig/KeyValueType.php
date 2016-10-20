<?php

namespace ans\xmldsig;

/**
 * Class representing KeyValueType
 *
 *
 * XSD Type: KeyValueType
 */
class KeyValueType
{

    /**
     * @property \ans\xmldsig\DSAKeyValue $dSAKeyValue
     */
    private $dSAKeyValue = null;

    /**
     * @property \ans\xmldsig\RSAKeyValue $rSAKeyValue
     */
    private $rSAKeyValue = null;

    /**
     * Gets as dSAKeyValue
     *
     * @return \ans\xmldsig\DSAKeyValue
     */
    public function getDSAKeyValue()
    {
        return $this->dSAKeyValue;
    }

    /**
     * Sets a new dSAKeyValue
     *
     * @param \ans\xmldsig\DSAKeyValue $dSAKeyValue
     * @return self
     */
    public function setDSAKeyValue(\ans\xmldsig\DSAKeyValue $dSAKeyValue)
    {
        $this->dSAKeyValue = $dSAKeyValue;
        return $this;
    }

    /**
     * Gets as rSAKeyValue
     *
     * @return \ans\xmldsig\RSAKeyValue
     */
    public function getRSAKeyValue()
    {
        return $this->rSAKeyValue;
    }

    /**
     * Sets a new rSAKeyValue
     *
     * @param \ans\xmldsig\RSAKeyValue $rSAKeyValue
     * @return self
     */
    public function setRSAKeyValue(\ans\xmldsig\RSAKeyValue $rSAKeyValue)
    {
        $this->rSAKeyValue = $rSAKeyValue;
        return $this;
    }


}

