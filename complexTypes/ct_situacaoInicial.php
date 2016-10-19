<?php

namespace anstiss\complexTypes;

use anstiss\complexTypes\ct_situacaoClinica;

class ct_situacaoInicial {

    /**
     * 
     * @var ct_situacaoClinica $situacaoClinica
     * @access public
     */
    public $situacaoClinica = null;

    /**
     * 
     * @var string $doencaPeriodontal
     * @see st_logico
     * @access public
     */
    public $doencaPeriodontal = null;

    /**
     * 
     * @var string $alteracaoTecidoMole
     * @see st_logico
     * @access public
     */
    public $alteracaoTecidoMole = null;

    /**
     * 
     * @var string $observacao
     * @see st_texto500
     * @access public
     */
    public $observacao = null;

    /**
     * 
     * @param ct_situacaoClinica $situacaoClinica
     * @param string $doencaPeriodontal
     * @param string $alteracaoTecidoMole
     * @param string $observacao
     * @access public
     */
    public function __construct($situacaoClinica, $doencaPeriodontal, $alteracaoTecidoMole, $observacao) {
        $this->situacaoClinica = $situacaoClinica;
        $this->doencaPeriodontal = $doencaPeriodontal;
        $this->alteracaoTecidoMole = $alteracaoTecidoMole;
        $this->observacao = $observacao;
    }

}
