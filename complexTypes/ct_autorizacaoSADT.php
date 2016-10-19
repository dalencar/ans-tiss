<?php

namespace anstiss\complexTypes;

class ct_autorizacaoSADT {

    /**
     * 
     * @var string $numeroGuiaOperadora
     * @see st_texto20
     * @access public
     */
    public $numeroGuiaOperadora = null;

    /**
     * 
     * @var string $dataAutorizacao
     * @see st_data
     * @access public
     */
    public $dataAutorizacao = null;

    /**
     * 
     * @var string $senha
     * @see st_texto20
     * @access public
     */
    public $senha = null;

    /**
     * 
     * @var string $dataValidadeSenha
     * @see st_data
     * @access public
     */
    public $dataValidadeSenha = null;

    /**
     * 
     * @param string $numeroGuiaOperadora
     * @param string $dataAutorizacao
     * @param string $senha
     * @param string $dataValidadeSenha
     * @access public
     */
    public function __construct($numeroGuiaOperadora, $dataAutorizacao, $senha, $dataValidadeSenha) {
        $this->numeroGuiaOperadora = $numeroGuiaOperadora;
        $this->dataAutorizacao = $dataAutorizacao;
        $this->senha = $senha;
        $this->dataValidadeSenha = $dataValidadeSenha;
    }

}
