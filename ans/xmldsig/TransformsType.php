<?php

namespace ans\xmldsig;

/**
 * Class representing TransformsType
 *
 *
 * XSD Type: TransformsType
 */
class TransformsType
{

    /**
     * @property \ans\xmldsig\Transform[] $transform
     */
    private $transform = null;

    /**
     * Adds as transform
     *
     * @return self
     * @param \ans\xmldsig\Transform $transform
     */
    public function addToTransform(\ans\xmldsig\Transform $transform)
    {
        $this->transform[] = $transform;
        return $this;
    }

    /**
     * isset transform
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTransform($index)
    {
        return isset($this->transform[$index]);
    }

    /**
     * unset transform
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTransform($index)
    {
        unset($this->transform[$index]);
    }

    /**
     * Gets as transform
     *
     * @return \ans\xmldsig\Transform[]
     */
    public function getTransform()
    {
        return $this->transform;
    }

    /**
     * Sets a new transform
     *
     * @param \ans\xmldsig\Transform[] $transform
     * @return self
     */
    public function setTransform(array $transform)
    {
        $this->transform = $transform;
        return $this;
    }


}

