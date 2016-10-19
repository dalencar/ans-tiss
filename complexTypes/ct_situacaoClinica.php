<?php

namespace anstiss\complexTypes;

use anstiss\complexTypes\dentes;

class ct_situacaoClinica {

    /**
     * 
     * @var dentes $dentes
     * @access public
     */
    public $dentes = null;

    /**
     * 
     * @param dentes $dentes
     * @access public
     */
    public function __construct($dentes) {
        $this->dentes = $dentes;
    }

}
