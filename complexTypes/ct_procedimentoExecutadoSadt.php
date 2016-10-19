<?php

namespace anstiss\complexTypes;

use anstiss\complexTypes\ct_procedimentoDados;
use anstiss\complexTypes\ct_identEquipeSADT;

class ct_procedimentoExecutadoSadt {

    /**
     * 
     * @var string $dataExecucao
     * @see st_data
     * @access public
     */
    public $dataExecucao = null;

    /**
     * 
     * @var string $horaInicial
     * @see st_hora
     * @access public
     */
    public $horaInicial = null;

    /**
     * 
     * @var string $horaFinal
     * @see st_hora
     * @access public
     */
    public $horaFinal = null;

    /**
     * 
     * @var ct_procedimentoDados $procedimento
     * @access public
     */
    public $procedimento = null;

    /**
     * 
     * @var int $quantidadeExecutada
     * @see st_numerico3
     * @access public
     */
    public $quantidadeExecutada = null;

    /**
     * 
     * @var string $viaAcesso
     * @see dm_viaDeAcesso
     * @access public
     */
    public $viaAcesso = null;

    /**
     * 
     * @var string $tecnicaUtilizada
     * @see dm_tecnicaUtilizada
     * @access public
     */
    public $tecnicaUtilizada = null;

    /**
     * 
     * @var float $reducaoAcrescimo
     * @see st_decimal5-2
     * @access public
     */
    public $reducaoAcrescimo = null;

    /**
     * 
     * @var float $valorUnitario
     * @see st_decimal8-2
     * @access public
     */
    public $valorUnitario = null;

    /**
     * 
     * @var float $valorTotal
     * @see st_decimal8-2
     * @access public
     */
    public $valorTotal = null;

    /**
     * 
     * @var ct_identEquipeSADT $equipeSadt
     * @access public
     */
    public $equipeSadt = null;

    /**
     * 
     * @param string $dataExecucao
     * @param string $horaInicial
     * @param string $horaFinal
     * @param ct_procedimentoDados $procedimento
     * @param int $quantidadeExecutada
     * @param string $viaAcesso
     * @param string $tecnicaUtilizada
     * @param float $reducaoAcrescimo
     * @param float $valorUnitario
     * @param float $valorTotal
     * @param ct_identEquipeSADT $equipeSadt
     * @access public
     */
    public function __construct($dataExecucao, $horaInicial, $horaFinal, $procedimento, $quantidadeExecutada, $viaAcesso, $tecnicaUtilizada, $reducaoAcrescimo, $valorUnitario, $valorTotal, $equipeSadt) {
        $this->dataExecucao = $dataExecucao;
        $this->horaInicial = $horaInicial;
        $this->horaFinal = $horaFinal;
        $this->procedimento = $procedimento;
        $this->quantidadeExecutada = $quantidadeExecutada;
        $this->viaAcesso = $viaAcesso;
        $this->tecnicaUtilizada = $tecnicaUtilizada;
        $this->reducaoAcrescimo = $reducaoAcrescimo;
        $this->valorUnitario = $valorUnitario;
        $this->valorTotal = $valorTotal;
        $this->equipeSadt = $equipeSadt;
    }

}
