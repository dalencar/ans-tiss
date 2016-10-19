<?php

namespace anstiss\guias;

class dadosContratadoExecutante {

    /**
     * 
     * @var string $codigonaOperadora
     * @see st_texto14
     * @access public
     */
    public $codigonaOperadora = null;

    /**
     * 
     * @var string $nomeContratadoExecutante
     * @see st_texto70
     * @access public
     */
    public $nomeContratadoExecutante = null;

    /**
     * 
     * @var string $cnesContratadoExecutante
     * @see st_texto7
     * @access public
     */
    public $cnesContratadoExecutante = null;

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
     * @var string $CBO
     * @see dm_CBOS
     * @access public
     */
    public $CBO = null;

    /**
     * 
     * @param string $codigonaOperadora
     * @param string $nomeContratadoExecutante
     * @param string $cnesContratadoExecutante
     * @param string $nomeProfissional
     * @param string $conselhoProfissional
     * @param string $numeroConselhoProfissional
     * @param string $UF
     * @param string $CBO
     * @access public
     */
    public function __construct($codigonaOperadora, $nomeContratadoExecutante, $cnesContratadoExecutante, $nomeProfissional, $conselhoProfissional, $numeroConselhoProfissional, $UF, $CBO) {
        $this->codigonaOperadora = $codigonaOperadora;
        $this->nomeContratadoExecutante = $nomeContratadoExecutante;
        $this->cnesContratadoExecutante = $cnesContratadoExecutante;
        $this->nomeProfissional = $nomeProfissional;
        $this->conselhoProfissional = $conselhoProfissional;
        $this->numeroConselhoProfissional = $numeroConselhoProfissional;
        $this->UF = $UF;
        $this->CBO = $CBO;
    }

}
