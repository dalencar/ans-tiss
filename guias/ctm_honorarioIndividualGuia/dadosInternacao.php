<?php

namespace anstiss\guias\ctm_honorarioIndividualGuia;

class dadosInternacao {

    /**
     * 
     * @var string $dataInicioFaturamento
     * @see st_data
     * @access public
     */
    public $dataInicioFaturamento = null;

    /**
     * 
     * @var string $dataFimFaturamento
     * @see st_data
     * @access public
     */
    public $dataFimFaturamento = null;

    /**
     * 
     * @param date $dataInicioFaturamento
     * @param date $dataFimFaturamento
     * @access public
     */
    public function __construct($dataInicioFaturamento, $dataFimFaturamento) {
        $this->dataInicioFaturamento = $dataInicioFaturamento;
        $this->dataFimFaturamento = $dataFimFaturamento;
    }

}
