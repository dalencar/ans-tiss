<?php

namespace anstiss\complexTypes;

class ct_contratadoDados {

    /**
     * 
     * @var string $codigoPrestadorNaOperadora
     * @see st_texto14
     * @access public
     */
    public $codigoPrestadorNaOperadora = null;

    /**
     * 
     * @var string $cpfContratado
     * @see st_CPF
     * @access public
     */
    public $cpfContratado = null;

    /**
     * 
     * @var string $cnpjContratado
     * @see st_CNPJ
     * @access public
     */
    public $cnpjContratado = null;

    /**
     * 
     * @var string $nomeContratado
     * @see st_texto70
     * @access public
     */
    public $nomeContratado = null;

    /**
     * 
     * @param string $codigoPrestadorNaOperadora
     * @param string $cpfContratado
     * @param string $cnpjContratado
     * @param string $nomeContratado
     * @access public
     */
    public function __construct($codigoPrestadorNaOperadora, $cpfContratado, $cnpjContratado, $nomeContratado) {
        $this->codigoPrestadorNaOperadora = $codigoPrestadorNaOperadora;
        $this->cpfContratado = $cpfContratado;
        $this->cnpjContratado = $cnpjContratado;
        $this->nomeContratado = $nomeContratado;
    }

}
