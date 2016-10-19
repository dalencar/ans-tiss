<?php

namespace anstiss\complexTypes;

class ct_procedimentoDados {

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
     * @var string $descricaoProcedimento
     * @see st_texto150
     * @access public
     */
    public $descricaoProcedimento = null;

    /**
     * 
     * @param string $codigoTabela
     * @param string $codigoProcedimento
     * @param string $descricaoProcedimento
     * @access public
     */
    public function __construct($codigoTabela, $codigoProcedimento, $descricaoProcedimento) {
        $this->codigoTabela = $codigoTabela;
        $this->codigoProcedimento = $codigoProcedimento;
        $this->descricaoProcedimento = $descricaoProcedimento;
    }

}
