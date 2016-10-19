<?php

namespace anstiss\guias\cto_guiaOdontologia;

use anstiss\complexTypes\ct_procedimentoDados;
use anstiss\complexTypes\denteRegiao;

class procedimentosExecutados {

    /**
     * 
     * @var ct_procedimentoDados $procSolic
     * @access public
     */
    public $procSolic = null;

    /**
     * 
     * @var denteRegiao $denteRegiao
     * @access public
     */
    public $denteRegiao = null;

    /**
     * 
     * @var string $denteFace
     * @see st_texto5
     * @access public
     */
    public $denteFace = null;

    /**
     * 
     * @var int $qtdProc
     * @see st_numerico2
     * @access public
     */
    public $qtdProc = null;

    /**
     * 
     * @var float $qtdUS
     * @see st_decimal8-2
     * @access public
     */
    public $qtdUS = null;

    /**
     * 
     * @var float $valorProc
     * @see st_decimal8-2
     * @access public
     */
    public $valorProc = null;

    /**
     * 
     * @var float $valorFranquia
     * @see st_decimal8-2
     * @access public
     */
    public $valorFranquia = null;

    /**
     * 
     * @var string $autorizado
     * @see st_logico
     * @access public
     */
    public $autorizado = null;

    /**
     * 
     * @var string $dataRealizacao
     * @see st_data
     * @access public
     */
    public $dataRealizacao = null;

    /**
     * 
     * @param ct_procedimentoDados $procSolic
     * @param denteRegiao $denteRegiao
     * @param string $denteFace
     * @param int $qtdProc
     * @param float $qtdUS
     * @param float $valorProc
     * @param float $valorFranquia
     * @param string $autorizado
     * @param string $dataRealizacao
     * @access public
     */
    public function __construct($procSolic, $denteRegiao, $denteFace, $qtdProc, $qtdUS, $valorProc, $valorFranquia, $autorizado, $dataRealizacao) {
        $this->procSolic = $procSolic;
        $this->denteRegiao = $denteRegiao;
        $this->denteFace = $denteFace;
        $this->qtdProc = $qtdProc;
        $this->qtdUS = $qtdUS;
        $this->valorProc = $valorProc;
        $this->valorFranquia = $valorFranquia;
        $this->autorizado = $autorizado;
        $this->dataRealizacao = $dataRealizacao;
    }

}
