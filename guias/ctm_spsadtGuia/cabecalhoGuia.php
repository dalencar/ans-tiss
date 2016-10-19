<?php

namespace anstiss\guias\ctm_spsadtGuia;

class cabecalhoGuia extends \anstiss\complexTypes\ct_guiaCabecalho {

    /**
     * 
     * @var string $guiaPrincipal
     * @see st_texto20
     * @access public
     */
    public $guiaPrincipal = null;

    /**
     * 
     * @param string $registroANS
     * @param string $numeroGuiaPrestador
     * @param string $guiaPrincipal
     * @access public
     */
    public function __construct($registroANS, $numeroGuiaPrestador, $guiaPrincipal) {
        $this->guiaPrincipal = $guiaPrincipal;
        parent::__construct($registroANS, $numeroGuiaPrestador);
    }
    
}
