<?php

namespace anstiss\complexTypes;

class ct_guiaCabecalho {

    /**
     * 
     * @var string $registroANS
     * @see st_registroANS
     * @access public
     */
    public $registroANS = null;

    /**
     * 
     * @var string $numeroGuiaPrestador
     * @see st_texto20
     * @access public
     */
    public $numeroGuiaPrestador = null;

    /**
     * 
     * @param string $registroANS
     * @param string $numeroGuiaPrestador
     * @access public
     */
    public function __construct($registroANS, $numeroGuiaPrestador) {
        $this->registroANS = $registroANS;
        $this->numeroGuiaPrestador = $numeroGuiaPrestador;
    }

}
