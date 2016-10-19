<?php

if (!class_exists("contratadoExecutante", false)) {

    class contratadoExecutante extends ct_contratadoDados {

        /**
         * 
         * @var string $CNES
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

}
