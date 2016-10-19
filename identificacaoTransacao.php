<?php

namespace anstiss;

class identificacaoTransacao {

    /**
     * 
     * @var string $tipoTransacao
     * @see \anstiss\simpleTypes\dm_tipoTransacao
     * @access public
     */
    public $tipoTransacao = null;

    /**
     * 
     * @var string $sequencialTransacao
     * @see st_texto12
     * @access public
     */
    public $sequencialTransacao = null;

    /**
     * 
     * @var date $dataRegistroTransacao
     * @see st_data
     * @access public
     */
    public $dataRegistroTransacao = null;

    /**
     * 
     * @var time $horaRegistroTransacao
     * @see st_hora
     * @access public
     */
    public $horaRegistroTransacao = null;

    /**
     * 
     * @param dm_tipoTransacao $tipoTransacao
     * @param string $sequencialTransacao
     * @param date $dataRegistroTransacao
     * @param time $horaRegistroTransacao
     * @access public
     */
    public function __construct($tipoTransacao, $sequencialTransacao, $dataRegistroTransacao, $horaRegistroTransacao) {
        $this->tipoTransacao = $tipoTransacao;
        $this->sequencialTransacao = $sequencialTransacao;
        $this->dataRegistroTransacao = $dataRegistroTransacao;
        $this->horaRegistroTransacao = $horaRegistroTransacao;
    }

}
