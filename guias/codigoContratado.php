<?php

namespace anstiss\guias;

class codigoContratado {

    /**
     * 
     * @var string $codigoNaOperadora
     * @see st_texto14
     * @access public
     */
    public $codigoNaOperadora = null;
    
    /**
     * 
     * @var string $cnpjLocalExecutante
     * @see st_CNPJ
     * @access public
     */
    public $cnpjLocalExecutante = null;

    /**
     * 
     * @param string $cnpjLocalExecutante
     * @param string $codigoNaOperadora
     * @access public
     */
    public function __construct($cnpjLocalExecutante, $codigoNaOperadora) {
        $this->cnpjLocalExecutante = $cnpjLocalExecutante;
        $this->codigoNaOperadora = $codigoNaOperadora;
    }

}
