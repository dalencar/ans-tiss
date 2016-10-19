<?php

namespace anstiss\guias;

use anstiss\complexTypes\ct_contratadoDados;
use anstiss\complexTypes\ct_contratadoProfissionalDados;

class dadosSolicitante {

    /**
     * 
     * @var ct_contratadoDados $contratadoSolicitante
     * @access public
     */
    public $contratadoSolicitante = null;

    /**
     * 
     * @var ct_contratadoProfissionalDados $profissionalSolicitante
     * @access public
     */
    public $profissionalSolicitante = null;

    /**
     * 
     * @param ct_contratadoDados $contratadoSolicitante
     * @param ct_contratadoProfissionalDados $profissionalSolicitante
     * @access public
     */
    public function __construct($contratadoSolicitante, $profissionalSolicitante) {
        $this->contratadoSolicitante = $contratadoSolicitante;
        $this->profissionalSolicitante = $profissionalSolicitante;
    }

}
