<?php

namespace ans\xmldsig;

/**
 * Class representing SPKIDataType
 *
 *
 * XSD Type: SPKIDataType
 */
class SPKIDataType
{

    /**
     * @property mixed[] $sPKISexp
     */
    private $sPKISexp = null;

    /**
     * Adds as sPKISexp
     *
     * @return self
     * @param mixed $sPKISexp
     */
    public function addToSPKISexp($sPKISexp)
    {
        $this->sPKISexp[] = $sPKISexp;
        return $this;
    }

    /**
     * isset sPKISexp
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSPKISexp($index)
    {
        return isset($this->sPKISexp[$index]);
    }

    /**
     * unset sPKISexp
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSPKISexp($index)
    {
        unset($this->sPKISexp[$index]);
    }

    /**
     * Gets as sPKISexp
     *
     * @return mixed[]
     */
    public function getSPKISexp()
    {
        return $this->sPKISexp;
    }

    /**
     * Sets a new sPKISexp
     *
     * @param mixed $sPKISexp
     * @return self
     */
    public function setSPKISexp(array $sPKISexp)
    {
        $this->sPKISexp = $sPKISexp;
        return $this;
    }


}

