<?php

namespace anstiss;

use anstiss\complexTypes\ct_prestadorIdentificacao;

class destino {

    /**
     * 
     * @var string $registroANS
     * @see st_registroANS
     * @access public 
     */
    public $registroANS = null;

    /**
     * 
     * @var ct_prestadorIdentificacao $identificacaoPrestador
     * @access public
     */
    public $identificacaoPrestador = null;

    /**
     * 
     * @param string $registroANS
     * @param ct_prestadorIdentificacao $identificacaoPrestador
     * @access public
     */
    public function __construct($registroANS, $identificacaoPrestador) {
        $this->registroANS = $registroANS;
        $this->identificacaoPrestador = $identificacaoPrestador;
    }

}
