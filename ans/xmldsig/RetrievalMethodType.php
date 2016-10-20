<?php

namespace ans\xmldsig;

/**
 * Class representing RetrievalMethodType
 *
 *
 * XSD Type: RetrievalMethodType
 */
class RetrievalMethodType
{

    /**
     * @property string $uRI
     */
    private $uRI = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property \ans\xmldsig\Transform[] $transforms
     */
    private $transforms = null;

    /**
     * Gets as uRI
     *
     * @return string
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * @param string $uRI
     * @return self
     */
    public function setURI($uRI)
    {
        $this->uRI = $uRI;
        return $this;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as transform
     *
     * @return self
     * @param \ans\xmldsig\Transform $transform
     */
    public function addToTransforms(\ans\xmldsig\Transform $transform)
    {
        $this->transforms[] = $transform;
        return $this;
    }

    /**
     * isset transforms
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTransforms($index)
    {
        return isset($this->transforms[$index]);
    }

    /**
     * unset transforms
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTransforms($index)
    {
        unset($this->transforms[$index]);
    }

    /**
     * Gets as transforms
     *
     * @return \ans\xmldsig\Transform[]
     */
    public function getTransforms()
    {
        return $this->transforms;
    }

    /**
     * Sets a new transforms
     *
     * @param \ans\xmldsig\Transform[] $transforms
     * @return self
     */
    public function setTransforms(array $transforms)
    {
        $this->transforms = $transforms;
        return $this;
    }


}

