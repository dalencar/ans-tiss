<?php

namespace anstiss\complexTypes;

use anstiss\complexTypes\codProfissional;

class ct_identEquipeSADT {

    /**
     * 
     * @var string $grauPart
     * @see dm_grauPart
     * @access public
     */
    public $grauPart = null;

    /**
     * 
     * @var codProfissional $codProfissional
     * @access public
     */
    public $codProfissional = null;

    /**
     * 
     * @var string $nomeProf
     * @see st_texto70
     * @access public
     */
    public $nomeProf = null;

    /**
     * 
     * @var string $conselho
     * @see dm_conselhoProfissional
     * @access public
     */
    public $conselho = null;

    /**
     * 
     * @var string $numeroConselhoProfissional
     * @see st_texto15
     * @access public
     */
    public $numeroConselhoProfissional = null;

    /**
     * 
     * @var string $UF
     * @see dm_UF
     * @access public
     */
    public $UF = null;

    /**
     * 
     * @var string $CBOS
     * @see dm_CBOS
     * @access public
     */
    public $CBOS = null;

    /**
     * 
     * @param string $grauPart
     * @param codProfissional $codProfissional
     * @param string $nomeProf
     * @param string $conselho
     * @param string $numeroConselhoProfissional
     * @param string $UF
     * @param string $CBOS
     * @access public
     */
    public function __construct($grauPart, $codProfissional, $nomeProf, $conselho, $numeroConselhoProfissional, $UF, $CBOS) {
        $this->grauPart = $grauPart;
        $this->codProfissional = $codProfissional;
        $this->nomeProf = $nomeProf;
        $this->conselho = $conselho;
        $this->numeroConselhoProfissional = $numeroConselhoProfissional;
        $this->UF = $UF;
        $this->CBOS = $CBOS;
    }

}
