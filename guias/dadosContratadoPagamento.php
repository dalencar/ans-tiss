<?php

if (!class_exists("dadosContratadoPagamento", false)) {

    class dadosContratadoPagamento {

        /**
         * 
         * @var ct_contratadoDados $dadosPrestador
         * @access public
         */
        public $dadosPrestador = null;

        /**
         * 
         * @var string $CNES
         * @access public
         */
        public $CNES = null;

        /**
         * 
         * @param ct_contratadoDados $dadosPrestador
         * @param string $CNES
         * @access public
         */
        public function __construct($dadosPrestador, $CNES) {
            $this->dadosPrestador = $dadosPrestador;
            $this->CNES = $CNES;
        }

    }

}
