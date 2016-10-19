<?php

namespace anstiss;

use anstiss\complexTypes\ct_prestadorIdentificacao;

/**
 * Ou identificacaoPrestador ou registroANS
 */
class origem {

    /**
     * 
     * @var ct_prestadorIdentificacao $identificacaoPrestador
     * @access public
     */
    public $identificacaoPrestador = null;

    /**
     * 
     * @var string $registroANS
     * @see st_registroANS
     * @access public
     */
    public $registroANS = null;

    /**
     * 
     * @param ct_prestadorIdentificacao $identificacaoPrestador
     * @param string $registroANS
     * @access public
     */
    public function __construct($identificacaoPrestador, $registroANS) {
        $this->identificacaoPrestador = $identificacaoPrestador;
        $this->registroANS = $registroANS;
    }

}
