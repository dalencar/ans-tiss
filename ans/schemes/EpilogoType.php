<?php

namespace ans\schemes;

/**
 * Class representing EpilogoType
 *
 *
 * XSD Type: epilogo
 */
class EpilogoType
{

    /**
     * @property string $hash
     */
    private $hash = null;

    /**
     * Gets as hash
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Sets a new hash
     *
     * @param string $hash
     * @return self
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
        return $this;
    }


}

