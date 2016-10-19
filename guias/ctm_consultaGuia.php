<?php

namespace anstiss\guias;

use anstiss\complexTypes\ct_guiaCabecalho;
use anstiss\complexTypes\ct_beneficiarioDados;
use anstiss\guias\contratadoExecutante;
use anstiss\complexTypes\ct_contratadoProfissionalDados;
use anstiss\guias\ctm_consultaAtendimento;
use anstiss\assinaturaDigital\assinaturaDigital;

class ctm_consultaGuia {

    /**
     * 
     * @var ct_guiaCabecalho $cabecalhoConsulta
     * @access public
     */
    public $cabecalhoConsulta = null;

    /**
     * 
     * @var string $numeroGuiaOperadora
     * @see st_texto20
     * @access public
     */
    public $numeroGuiaOperadora = null;

    /**
     * 
     * @var ct_beneficiarioDados $dadosBeneficiario
     * @access public
     */
    public $dadosBeneficiario = null;

    /**
     * 
     * @var contratadoExecutante $contratadoExecutante
     * @access public
     */
    public $contratadoExecutante = null;

    /**
     * 
     * @var ct_contratadoProfissionalDados $profissionalExecutante
     * @access public
     */
    public $profissionalExecutante = null;

    /**
     * 
     * @var string $indicacaoAcidente
     * @see dm_indicadorAcidente
     * @access public
     */
    public $indicacaoAcidente = null;

    /**
     * 
     * @var ctm_consultaAtendimento $dadosAtendimento
     * @access public
     */
    public $dadosAtendimento = null;

    /**
     * 
     * @var string $observacao
     * @see st_texto500
     * @access public
     */
    public $observacao = null;

    /**
     * 
     * @var assinaturaDigital $assinaturaDigital
     * @access public
     */
    public $assinaturaDigital = null;

    /**
     * 
     * @param ct_guiaCabecalho $cabecalhoConsulta
     * @param string $numeroGuiaOperadora
     * @param ct_beneficiarioDados $dadosBeneficiario
     * @param contratadoExecutante $contratadoExecutante
     * @param ct_contratadoProfissionalDados $profissionalExecutante
     * @param dm_indicadorAcidente $indicacaoAcidente
     * @param ctm_consultaAtendimento $dadosAtendimento
     * @param string $observacao
     * @param assinaturaDigital $assinaturaDigital
     * @access public
     */
    public function __construct($cabecalhoConsulta, $numeroGuiaOperadora, $dadosBeneficiario, $contratadoExecutante, $profissionalExecutante, $indicacaoAcidente, $dadosAtendimento, $observacao, $assinaturaDigital) {
        $this->cabecalhoConsulta = $cabecalhoConsulta;
        $this->numeroGuiaOperadora = $numeroGuiaOperadora;
        $this->dadosBeneficiario = $dadosBeneficiario;
        $this->contratadoExecutante = $contratadoExecutante;
        $this->profissionalExecutante = $profissionalExecutante;
        $this->indicacaoAcidente = $indicacaoAcidente;
        $this->dadosAtendimento = $dadosAtendimento;
        $this->observacao = $observacao;
        $this->assinaturaDigital = $assinaturaDigital;
    }

}
