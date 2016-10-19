<?php

namespace anstiss\complexTypes;

use anstiss\core\base64Binary;

class ct_beneficiarioDados {

    /**
     * 
     * @var string $numeroCarteira
     * @see st_texto20
     * @access public
     */
    public $numeroCarteira = null;

    /**
     * 
     * @var string $atendimentoRN
     * @see dm_simNao
     * @access public
     */
    public $atendimentoRN = null;

    /**
     * 
     * @var string $nomeBeneficiario
     * @see st_texto70
     * @access public
     */
    public $nomeBeneficiario = null;

    /**
     * 
     * @var string $numeroCNS
     * @see st_texto15
     * @access public
     */
    public $numeroCNS = null;

    /**
     * 
     * @var base64Binary $identificadorBeneficiario
     * @access public
     */
    public $identificadorBeneficiario = null;

    /**
     * 
     * @param string $numeroCarteira
     * @param dm_simNao $atendimentoRN
     * @param string $nomeBeneficiario
     * @param string $numeroCNS
     * @param base64Binary $identificadorBeneficiario
     * @access public
     */
    public function __construct($numeroCarteira, $atendimentoRN, $nomeBeneficiario, $numeroCNS, $identificadorBeneficiario) {
        $this->numeroCarteira = $numeroCarteira;
        $this->atendimentoRN = $atendimentoRN;
        $this->nomeBeneficiario = $nomeBeneficiario;
        $this->numeroCNS = $numeroCNS;
        $this->identificadorBeneficiario = $identificadorBeneficiario;
    }

}
