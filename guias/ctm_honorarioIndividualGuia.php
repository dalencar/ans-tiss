<?php

namespace anstiss\guias;

use anstiss\complexTypes\ct_guiaCabecalho;
use anstiss\guias\localContratado;
use anstiss\guias\dadosContratadoExecutante;
use anstiss\guias\ctm_honorarioIndividualGuia\dadosInternacao;
use anstiss\complexTypes\ct_procedimentoExecutadoHonorIndiv;
use anstiss\assinaturaDigital\assinaturaDigital;

class ctm_honorarioIndividualGuia {

    /**
     * 
     * @var ct_guiaCabecalho $cabecalhoGuia
     * @access public
     */
    public $cabecalhoGuia = null;

    /**
     * 
     * @var string $guiaSolicInternacao
     * @see st_texto20
     * @access public
     */
    public $guiaSolicInternacao = null;

    /**
     * 
     * @var string $senha
     * @see st_texto20
     * @access public
     */
    public $senha = null;

    /**
     * 
     * @var string $numeroGuiaOperadora
     * @see st_texto20
     * @access public
     */
    public $numeroGuiaOperadora = null;

    /**
     * 
     * @var string $numeroCarteira
     * @see st_texto20
     * @access public
     */
    public $numeroCarteira = null;

    /**
     * 
     * @var string $nomeBeneficiario
     * @see st_texto70
     * @access public
     */
    public $nomeBeneficiario = null;

    /**
     * 
     * @var string $atendimentoRN
     * @see dm_simNao
     * @access public
     */
    public $atendimentoRN = null;

    /**
     * 
     * @var localContratado $localContratado
     * @access public
     */
    public $localContratado = null;

    /**
     * 
     * @var dadosContratadoExecutante $dadosContratadoExecutante
     * @access public
     */
    public $dadosContratadoExecutante = null;

    /**
     * 
     * @var dadosInternacao $dadosInternacao
     * @access public
     */
    public $dadosInternacao = null;

    /**
     * 
     * @var ct_procedimentoExecutadoHonorIndiv[] $procedimentosRealizados
     * @access public
     */
    public $procedimentosRealizados = null;

    /**
     * 
     * @var string $observacao
     * @see st_texto500
     * @access public
     */
    public $observacao = null;

    /**
     * 
     * @var float $valorTotalHonorarios
     * @see st_decimal10-2
     * @access public
     */
    public $valorTotalHonorarios = null;

    /**
     * 
     * @var string $dataEmissaoGuia
     * @see st_data
     * @access public
     */
    public $dataEmissaoGuia = null;

    /**
     * 
     * @var assinaturaDigital $assinaturaDigital
     * @access public
     */
    public $assinaturaDigital = null;

    /**
     * 
     * @param ct_guiaCabecalho $cabecalhoGuia
     * @param string $guiaSolicInternacao
     * @param string $senha
     * @param string $numeroGuiaOperadora
     * @param string $numeroCarteira
     * @param string $nomeBeneficiario
     * @param string $atendimentoRN
     * @param localContratado $localContratado
     * @param dadosContratadoExecutante $dadosContratadoExecutante
     * @param dadosInternacao $dadosInternacao
     * @param ct_procedimentoExecutadoHonorIndiv[] $procedimentosRealizados
     * @param string $observacao
     * @param float $valorTotalHonorarios
     * @param string $dataEmissaoGuia
     * @param assinaturaDigital $assinaturaDigital
     * @access public
     */
    public function __construct($cabecalhoGuia, $guiaSolicInternacao, $senha, $numeroGuiaOperadora, $numeroCarteira, $nomeBeneficiario, $atendimentoRN, $localContratado, $dadosContratadoExecutante, $dadosInternacao, $procedimentosRealizados, $observacao, $valorTotalHonorarios, $dataEmissaoGuia, $assinaturaDigital) {
        $this->cabecalhoGuia = $cabecalhoGuia;
        $this->guiaSolicInternacao = $guiaSolicInternacao;
        $this->senha = $senha;
        $this->numeroGuiaOperadora = $numeroGuiaOperadora;
        $this->numeroCarteira = $numeroCarteira;
        $this->nomeBeneficiario = $nomeBeneficiario;
        $this->atendimentoRN = $atendimentoRN;
        $this->localContratado = $localContratado;
        $this->dadosContratadoExecutante = $dadosContratadoExecutante;
        $this->dadosInternacao = $dadosInternacao;
        $this->procedimentosRealizados = $procedimentosRealizados;
        $this->observacao = $observacao;
        $this->valorTotalHonorarios = $valorTotalHonorarios;
        $this->dataEmissaoGuia = $dataEmissaoGuia;
        $this->assinaturaDigital = $assinaturaDigital;
    }

}
