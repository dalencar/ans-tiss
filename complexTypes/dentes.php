<?php

namespace anstiss\complexTypes;

class dentes {

    /**
     * 
     * @var string $elementoDentario
     * @see dm_dente
     * @access public
     */
    public $elementoDentario = null;

    /**
     * 
     * @var string $condicaoClinica
     * @see dm_condicaoClinica
     * @access public
     */
    public $condicaoClinica = null;

    /**
     * 
     * @param string $elementoDentario
     * @param string $condicaoClinica
     * @access public
     */
    public function __construct($elementoDentario, $condicaoClinica) {
        $this->elementoDentario = $elementoDentario;
        $this->condicaoClinica = $condicaoClinica;
    }

}
