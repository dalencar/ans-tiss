<?php

namespace anstiss\guias\ctm_spsadtGuia;

class dadosExecutante {

    /**
     * 
     * @var string $codigonaOperadora
     * @see st_texto14
     * @access public
     */
    public $codigonaOperadora = null;
    
    /**
     * 
     * @var string $nomeContratado
     * @see st_texto70
     * @access public
     */
    public $nomeContratado = null;

    /**
     * 
     * @var string $CNES
     * @see st_texto7
     * @access public
     */
    public $CNES = null;

    /**
     * 
     * @param string $codigonaOperadora
     * @param string $nomeContratado
     * @param string $CNES
     * @access public
     */
    public function __construct($codigonaOperadora, $nomeContratado, $CNES) {
        $this->codigonaOperadora = $codigonaOperadora;
        $this->nomeContratado = $nomeContratado;
        $this->CNES = $CNES;
    }

}
