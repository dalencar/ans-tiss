<?php

namespace ans\schemes;

/**
 * Class representing TissFaultWS
 */
class TissFaultWS
{

    /**
     * @property string $tissFault
     */
    private $tissFault = null;

    /**
     * Gets as tissFault
     *
     * @return string
     */
    public function getTissFault()
    {
        return $this->tissFault;
    }

    /**
     * Sets a new tissFault
     *
     * @param string $tissFault
     * @return self
     */
    public function setTissFault($tissFault)
    {
        $this->tissFault = $tissFault;
        return $this;
    }


}

