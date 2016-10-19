<?php

if (!class_exists("dadosContratado", false)) {

    class dadosContratado {

        /**
         * 
         * @var string $codigoPrestador
         * @access public
         */
        public $codigoPrestador = null;

        /**
         * 
         * @var string $nomePrestador
         * @access public
         */
        public $nomePrestador = null;

        /**
         * 
         * @param string $codigoPrestador
         * @param string $nomePrestador
         * @access public
         */
        public function __construct($codigoPrestador, $nomePrestador) {
            $this->codigoPrestador = $codigoPrestador;
            $this->nomePrestador = $nomePrestador;
        }

    }

}
