<?php

namespace anstiss\guias;

use anstiss\complexTypes\ct_beneficiarioDados;
use anstiss\guias\cto_guiaOdontologia\dadosProfissionaisResponsaveis;
use anstiss\guias\cto_guiaOdontologia\procedimentosExecutados;
use anstiss\guias\cto_anexoSituacaoInicialnaGTO;
use anstiss\assinaturaDigital\assinaturaDigital;

class cto_guiaOdontologia {

    /**
     * 
     * @var string $registroANS
     * @see st_registroANS
     * @access public
     */
    public $registroANS = null;

    /**
     * 
     * @var string $numeroGuiaPrestador
     * @see st_texto20
     * @access public
     */
    public $numeroGuiaPrestador = null;

    /**
     * 
     * @var string $numeroGuiaPrincipal
     * @see st_texto20
     * @access public
     */
    public $numeroGuiaPrincipal = null;

    /**
     * 
     * @var string $dataAutorizacao
     * @see st_data
     * @access public
     */
    public $dataAutorizacao = null;

    /**
     * 
     * @var string $senhaAutorizacao
     * @see st_texto20
     * @access public
     */
    public $senhaAutorizacao = null;

    /**
     * 
     * @var string $validadeSenha
     * @see st_data
     * @access public
     */
    public $validadeSenha = null;

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
     * @var string $planoBeneficiario
     * @see st_texto40
     * @access public
     */
    public $planoBeneficiario = null;

    /**
     * 
     * @var string $nomeEmpresa
     * @see st_texto40
     * @access public
     */
    public $nomeEmpresa = null;

    /**
     * 
     * @var string $numeroTelefone
     * @see st_texto20
     * @access public
     */
    public $numeroTelefone = null;

    /**
     * 
     * @var string $nomeTitular
     * @see st_texto70
     * @access public
     */
    public $nomeTitular = null;

    /**
     * 
     * @var dadosProfissionaisResponsaveis $dadosProfissionaisResponsaveis
     * @access public
     */
    public $dadosProfissionaisResponsaveis = null;

    /**
     * 
     * @var procedimentosExecutados $procedimentosExecutados
     * @access public
     */
    public $procedimentosExecutados = null;

    /**
     * 
     * @var string $dataTerminoTrat
     * @see st_data
     * @access public
     */
    public $dataTerminoTrat = null;

    /**
     * 
     * @var string $tipoAtendimento
     * @see dm_tipoAtendimentoOdonto
     * @access public
     */
    public $tipoAtendimento = null;

    /**
     * 
     * @var string $tipoFaturamento
     * @see dm_tipoFaturamentoOdonto
     * @access public
     */
    public $tipoFaturamento = null;

    /**
     * 
     * @var float $qtdTotalUS
     * @see st_decimal8-2
     * @access public
     */
    public $qtdTotalUS = null;

    /**
     * 
     * @var float $valorTotalProc
     * @see st_decimal10-2
     * @access public
     */
    public $valorTotalProc = null;

    /**
     * 
     * @var float $valorTotalFranquia
     * @see st_decimal10-2
     * @access public
     */
    public $valorTotalFranquia = null;

    /**
     * 
     * @var string $observacao
     * @see st_texto500
     * @access public
     */
    public $observacao = null;

    /**
     * 
     * @var cto_anexoSituacaoInicialnaGTO $odontoInicial
     * @access public
     */
    public $odontoInicial = null;

    /**
     * 
     * @var assinaturaDigital $assinaturaDigital
     * @access public
     */
    public $assinaturaDigital = null;

    /**
     * 
     * @param string $registroANS
     * @param string $numeroGuiaPrestador
     * @param string $numeroGuiaPrincipal
     * @param string $dataAutorizacao
     * @param string $senhaAutorizacao
     * @param string $validadeSenha
     * @param string $numeroGuiaOperadora
     * @param ct_beneficiarioDados $dadosBeneficiario
     * @param string $planoBeneficiario
     * @param string $nomeEmpresa
     * @param string $numeroTelefone
     * @param string $nomeTitular
     * @param dadosProfissionaisResponsaveis $dadosProfissionaisResponsaveis
     * @param procedimentosExecutados $procedimentosExecutados
     * @param string $dataTerminoTrat
     * @param string $tipoAtendimento
     * @param string $tipoFaturamento
     * @param float $qtdTotalUS
     * @param float $valorTotalProc
     * @param float $valorTotalFranquia
     * @param string $observacao
     * @param cto_anexoSituacaoInicialnaGTO $odontoInicial
     * @param assinaturaDigital $assinaturaDigital
     * @access public
     */
    public function __construct($registroANS, $numeroGuiaPrestador, $numeroGuiaPrincipal, $dataAutorizacao, $senhaAutorizacao, $validadeSenha, $numeroGuiaOperadora, $dadosBeneficiario, $planoBeneficiario, $nomeEmpresa, $numeroTelefone, $nomeTitular, $dadosProfissionaisResponsaveis, $procedimentosExecutados, $dataTerminoTrat, $tipoAtendimento, $tipoFaturamento, $qtdTotalUS, $valorTotalProc, $valorTotalFranquia, $observacao, $odontoInicial, $assinaturaDigital) {
        $this->registroANS = $registroANS;
        $this->numeroGuiaPrestador = $numeroGuiaPrestador;
        $this->numeroGuiaPrincipal = $numeroGuiaPrincipal;
        $this->dataAutorizacao = $dataAutorizacao;
        $this->senhaAutorizacao = $senhaAutorizacao;
        $this->validadeSenha = $validadeSenha;
        $this->numeroGuiaOperadora = $numeroGuiaOperadora;
        $this->dadosBeneficiario = $dadosBeneficiario;
        $this->planoBeneficiario = $planoBeneficiario;
        $this->nomeEmpresa = $nomeEmpresa;
        $this->numeroTelefone = $numeroTelefone;
        $this->nomeTitular = $nomeTitular;
        $this->dadosProfissionaisResponsaveis = $dadosProfissionaisResponsaveis;
        $this->procedimentosExecutados = $procedimentosExecutados;
        $this->dataTerminoTrat = $dataTerminoTrat;
        $this->tipoAtendimento = $tipoAtendimento;
        $this->tipoFaturamento = $tipoFaturamento;
        $this->qtdTotalUS = $qtdTotalUS;
        $this->valorTotalProc = $valorTotalProc;
        $this->valorTotalFranquia = $valorTotalFranquia;
        $this->observacao = $observacao;
        $this->odontoInicial = $odontoInicial;
        $this->assinaturaDigital = $assinaturaDigital;
    }

}
