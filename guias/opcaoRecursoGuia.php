<?php

if (!class_exists("opcaoRecursoGuia", false)) {

    class opcaoRecursoGuia {

        /**
         * 
         * @var itensGuia $itensGuia
         * @access public
         */
        public $itensGuia = null;

        /**
         * 
         * @var recursoGuiaCompleta $recursoGuiaCompleta
         * @access public
         */
        public $recursoGuiaCompleta = null;

        /**
         * 
         * @param itensGuia $itensGuia
         * @param recursoGuia $recursoGuia
         * @access public
         */
        public function __construct($itensGuia, $recursoGuiaCompleta) {
            $this->itensGuia = $itensGuia;
            $this->recursoGuiaCompleta = $recursoGuiaCompleta;
        }

    }

}
