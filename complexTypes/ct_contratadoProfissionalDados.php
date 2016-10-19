<?php

namespace anstiss\complexTypes;

class ct_contratadoProfissionalDados {

    /**
     * 
     * @var string $nomeProfissional
     * @see st_texto70
     * @access public
     */
    public $nomeProfissional = null;

    /**
     * 
     * @var string $conselhoProfissional
     * @see dm_conselhoProfissional
     * @access public
     */
    public $conselhoProfissional = null;

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
     * @param string $nomeProfissional
     * @param string $conselhoProfissional
     * @param string $numeroConselhoProfissional
     * @param string $UF
     * @param string $CBOS
     * @access public
     */
    public function __construct($nomeProfissional, $conselhoProfissional, $numeroConselhoProfissional, $UF, $CBOS) {
        $this->nomeProfissional = $nomeProfissional;
        $this->conselhoProfissional = $conselhoProfissional;
        $this->numeroConselhoProfissional = $numeroConselhoProfissional;
        $this->UF = $UF;
        $this->CBOS = $CBOS;
    }

}
