<?php

namespace ans\xmldsig;

/**
 * Class representing SignatureMethodType
 *
 *
 * XSD Type: SignatureMethodType
 */
class SignatureMethodType
{

    /**
     * @property string $algorithm
     */
    private $algorithm = null;

    /**
     * @property integer $hMACOutputLength
     */
    private $hMACOutputLength = null;

    /**
     * Gets as algorithm
     *
     * @return string
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * Sets a new algorithm
     *
     * @param string $algorithm
     * @return self
     */
    public function setAlgorithm($algorithm)
    {
        $this->algorithm = $algorithm;
        return $this;
    }

    /**
     * Gets as hMACOutputLength
     *
     * @return integer
     */
    public function getHMACOutputLength()
    {
        return $this->hMACOutputLength;
    }

    /**
     * Sets a new hMACOutputLength
     *
     * @param integer $hMACOutputLength
     * @return self
     */
    public function setHMACOutputLength($hMACOutputLength)
    {
        $this->hMACOutputLength = $hMACOutputLength;
        return $this;
    }


}

