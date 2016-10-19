<?php

namespace anstiss\guias;

use anstiss\guias\codigoContratado;

class localContratado {

    /**
     * 
     * @var codigoContratado $codigoContratado
     * @access public
     */
    public $codigoContratado = null;

    /**
     * 
     * @var string $nomeContratado
     * @see st_texto70
     * @access public
     */
    public $nomeContratado = null;

    /**
     * 
     * @var string $cnes
     * @see st_texto7
     * @access public
     */
    public $cnes = null;

    /**
     * 
     * @param codigoContratado $codigoContratado
     * @param string $nomeContratado
     * @param string $cnes
     * @access public
     */
    public function __construct($codigoContratado, $nomeContratado, $cnes) {
        $this->codigoContratado = $codigoContratado;
        $this->nomeContratado = $nomeContratado;
        $this->cnes = $cnes;
    }

}
