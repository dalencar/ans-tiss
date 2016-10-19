<?php

namespace anstiss\complexTypes;

class ct_prestadorIdentificacao {

    /**
     * 
     * @var string $CPF
     * @see st_CPF
     * @access public
     */
    public $CPF = null;

    /**
     * 
     * @var string $codigoPrestadorNaOperadora
     * @see st_texto14
     * @access public
     */
    public $codigoPrestadorNaOperadora = null;

    /**
     * 
     * @var string $CNPJ
     * @see st_CNPJ
     * @access public
     */
    public $CNPJ = null;

    /**
     * 
     * @param string $CPF
     * @param string $codigoPrestadorNaOperadora
     * @param string $CNPJ
     * @access public
     */
    public function __construct($CPF, $codigoPrestadorNaOperadora, $CNPJ) {
        $this->CPF = $CPF;
        $this->codigoPrestadorNaOperadora = $codigoPrestadorNaOperadora;
        $this->CNPJ = $CNPJ;
    }

}
