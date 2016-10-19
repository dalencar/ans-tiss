<?php

namespace anstiss\guias;

class procedimento {

    /**
     * 
     * @var string $codigoTabela
     * @see dm_tabela
     * @access public
     */
    public $codigoTabela = null;

    /**
     * 
     * @var string $codigoProcedimento
     * @see st_texto10
     * @access public
     */
    public $codigoProcedimento = null;

    /**
     * 
     * @var string $valorProcedimento
     * @see st_decimal8-2
     * @access public
     */
    public $valorProcedimento = null;

    /**
     * 
     * @param string $codigoTabela
     * @param string $codigoProcedimento
     * @param string $valorProcedimento
     * @access public
     */
    public function __construct($codigoTabela, $codigoProcedimento, $valorProcedimento) {
        $this->codigoTabela = $codigoTabela;
        $this->codigoProcedimento = $codigoProcedimento;
        $this->valorProcedimento = $valorProcedimento;
    }

}
