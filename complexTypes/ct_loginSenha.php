<?php

namespace anstiss\complexTypes;

class ct_loginSenha {

    /**
     * 
     * @var string $loginPrestador
     * @see st_texto20
     * @access public
     */
    public $loginPrestador = null;

    /**
     * 
     * @var string $senhaPrestador
     * @see st_texto20
     * @access public
     */
    public $senhaPrestador = null;

    /**
     * 
     * @param string $loginPrestador
     * @param string $senhaPrestador
     * @access public
     */
    public function __construct($loginPrestador, $senhaPrestador) {
        $this->loginPrestador = $loginPrestador;
        $this->senhaPrestador = $senhaPrestador;
    }

}
