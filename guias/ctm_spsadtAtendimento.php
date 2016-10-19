<?php

namespace anstiss\guias;

class ctm_spsadtAtendimento {

    /**
     * 
     * @var string $tipoAtendimento
     * @see dm_tipoAtendimento
     * @access public
     */
    public $tipoAtendimento = null;

    /**
     * 
     * @var string $indicacaoAcidente
     * @see dm_indicadorAcidente
     * @access public
     */
    public $indicacaoAcidente = null;

    /**
     * 
     * @var string $tipoConsulta
     * @see dm_tipoConsulta
     * @access public
     */
    public $tipoConsulta = null;

    /**
     * 
     * @var string $motivoSaida
     * @see dm_motivoSaidaObito
     * @access public
     */
    public $motivoSaida = null;

    /**
     * 
     * @param string $tipoAtendimento
     * @param string $indicacaoAcidente
     * @param string $tipoConsulta
     * @param string $motivoSaida
     * @access public
     */
    public function __construct($tipoAtendimento, $indicacaoAcidente, $tipoConsulta, $motivoSaida) {
        $this->tipoAtendimento = $tipoAtendimento;
        $this->indicacaoAcidente = $indicacaoAcidente;
        $this->tipoConsulta = $tipoConsulta;
        $this->motivoSaida = $motivoSaida;
    }

}
