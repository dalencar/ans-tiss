<?php

namespace anstiss\guias\cto_odontoSolicitacaoGuia;

class dadosProfissionaisResponsaveis {

    /**
     * 
     * @var string $nomeProfSolic
     * @see st_texto70
     * @access public
     */
    public $nomeProfSolic = null;

    /**
     * 
     * @var string $croSolic
     * @see st_texto20
     * @access public
     */
    public $croSolic = null;

    /**
     * 
     * @var string $ufSolic
     * @see dm_UF
     * @access public
     */
    public $ufSolic = null;

    /**
     * 
     * @var string $cbosSolic
     * @see st_texto6
     * @access public
     */
    public $cbosSolic = null;

    /**
     * 
     * @var string $codigoProfExec
     * @see st_texto14
     * @access public
     */
    public $codigoProfExec = null;

    /**
     * 
     * @var string $nomeProfExec
     * @see st_texto70
     * @access public
     */
    public $nomeProfExec = null;

    /**
     * 
     * @var string $croExec
     * @see st_texto20
     * @access public
     */
    public $croExec = null;

    /**
     * 
     * @var string $ufExec
     * @see dm_UF
     * @access public
     */
    public $ufExec = null;

    /**
     * 
     * @var string $cnesExec
     * @see st_texto7
     * @access public
     */
    public $cnesExec = null;

    /**
     * 
     * @var string $nomeProfExec2
     * @see st_texto70
     * @access public
     */
    public $nomeProfExec2 = null;

    /**
     * 
     * @var string $croExec2
     * @see st_texto20
     * @access public
     */
    public $croExec2 = null;

    /**
     * 
     * @var string $ufExec2
     * @see dm_UF
     * @access public
     */
    public $ufExec2 = null;

    /**
     * 
     * @var string $cbosExec2
     * @see st_texto7
     * @access public
     */
    public $cbosExec2 = null;

    /**
     * 
     * @param string $nomeProfSolic
     * @param string $croSolic
     * @param string $ufSolic
     * @param string $cbosSolic
     * @param string $codigoProfExec
     * @param string $nomeProfExec
     * @param string $croExec
     * @param string $ufExec
     * @param string $cnesExec
     * @param string $nomeProfExec2
     * @param string $croExec2
     * @param string $ufExec2
     * @param string $cbosExec2
     * @access public
     */
    public function __construct($nomeProfSolic, $croSolic, $ufSolic, $cbosSolic, $codigoProfExec, $nomeProfExec, $croExec, $ufExec, $cnesExec, $nomeProfExec2, $croExec2, $ufExec2, $cbosExec2) {
        $this->nomeProfSolic = $nomeProfSolic;
        $this->croSolic = $croSolic;
        $this->ufSolic = $ufSolic;
        $this->cbosSolic = $cbosSolic;
        $this->codigoProfExec = $codigoProfExec;
        $this->nomeProfExec = $nomeProfExec;
        $this->croExec = $croExec;
        $this->ufExec = $ufExec;
        $this->cnesExec = $cnesExec;
        $this->nomeProfExec2 = $nomeProfExec2;
        $this->croExec2 = $croExec2;
        $this->ufExec2 = $ufExec2;
        $this->cbosExec2 = $cbosExec2;
    }

}
