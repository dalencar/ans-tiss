<?php

namespace anstiss\guias;

use anstiss\complexTypes\ct_contratadoDados;

class contratadoExecutante extends ct_contratadoDados {

    /**
     * 
     * @var string $CNES
     * @see st_texto7
     * @access public
     */
    public $CNES = null;

    /**
     * 
     * @param string $codigoPrestadorNaOperadora
     * @param string $cpfContratado
     * @param string $cnpjContratado
     * @param string $nomeContratado
     * @param string $CNES
     * @access public
     */
    public function __construct($codigoPrestadorNaOperadora, $cpfContratado, $cnpjContratado, $nomeContratado, $CNES) {
        $this->CNES = $CNES;

        parent::__construct($codigoPrestadorNaOperadora, $cpfContratado, $cnpjContratado, $nomeContratado);
    }

}
