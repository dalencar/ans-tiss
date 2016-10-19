<?php

namespace anstiss\complexTypes;

class denteRegiao {

    /**
     * 
     * @var string $codRegiao
     * @see dm_regiao
     * @access public
     */
    public $codRegiao = null;

    /**
     * 
     * @var string $codDente
     * @see dm_dente
     * @access public
     */
    public $codDente = null;

    /**
     * 
     * @param string $codRegiao
     * @param string $codDente 
     * @access public
     */
    public function __construct($codRegiao, $codDente) {
        $this->codRegiao = $codRegiao;
        $this->codDente = $codDente;
    }

}
