<?php

namespace anstiss\guias;

use anstiss\complexTypes\ct_situacaoInicial;

class cto_anexoSituacaoInicialnaGTO {

    /**
     * 
     * @var string $numeroGuiaAnexo
     * @see st_texto20
     * @access public
     */
    public $numeroGuiaAnexo = null;

    /**
     * 
     * @var string $numeroGuiaReferenciada
     * @see st_texto20
     * @access public
     */
    public $numeroGuiaReferenciada = null;

    /**
     * 
     * @var string $numeroGuiaOperadora
     * @see st_texto20
     * @access public
     */
    public $numeroGuiaOperadora = null;

    /**
     * 
     * @var ct_situacaoInicial $ct_situacaoInicial
     * @access public
     */
    public $ct_situacaoInicial = null;

    /**
     * 
     * @param string $numeroGuiaAnexo
     * @param string $numeroGuiaReferenciada
     * @param string $numeroGuiaOperadora
     * @param ct_situacaoInicial $ct_situacaoInicial
     * @access public
     */
    public function __construct($numeroGuiaAnexo, $numeroGuiaReferenciada, $numeroGuiaOperadora, $ct_situacaoInicial) {
        $this->numeroGuiaAnexo = $numeroGuiaAnexo;
        $this->numeroGuiaReferenciada = $numeroGuiaReferenciada;
        $this->numeroGuiaOperadora = $numeroGuiaOperadora;
        $this->ct_situacaoInicial = $ct_situacaoInicial;
    }

}
