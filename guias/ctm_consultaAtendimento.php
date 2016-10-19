<?php

namespace anstiss\guias;

use anstiss\guias\procedimento;

class ctm_consultaAtendimento {

    /**
     * 
     * @var string $dataAtendimento
     * @see st_data
     * @access public
     */
    public $dataAtendimento = null;

    /**
     * 
     * @var string $tipoConsulta
     * @see dm_tipoConsulta
     * @access public
     */
    public $tipoConsulta = null;

    /**
     * 
     * @var procedimento $procedimento
     * @access public
     */
    public $procedimento = null;

    /**
     * 
     * @param string $dataAtendimento
     * @param string $tipoConsulta
     * @param procedimento $procedimento
     * @access public
     */
    public function __construct($dataAtendimento, $tipoConsulta, $procedimento) {
        $this->dataAtendimento = $dataAtendimento;
        $this->tipoConsulta = $tipoConsulta;
        $this->procedimento = $procedimento;
    }

}
