<?php

namespace anstiss;

/**
 * <b><font size=4>webservice para consumo dos prestadores no padrão tiss</font></b>
 * 
 */
class TissLoteGuias extends \SoapClient {

    /**
     * 
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
        'loteGuiasWS' => '\\loteGuiasWS',
        'cabecalhoTransacao' => '\\cabecalhoTransacao',
        'identificacaoTransacao' => '\\identificacaoTransacao',
        'origem' => '\\origem',
        'identificacaoPrestador' => '\\identificacaoPrestador',
        'destino' => '\\destino',
        'ct_prestadorIdentificacao' => '\\ct_prestadorIdentificacao',
        'assinaturaDigital' => '\\assinaturaDigital',
        'ct_loginSenha' => '\\ct_loginSenha',
        'ctm_guiaLote' => '\\ctm_guiaLote',
        'guiasTISS' => '\\guiasTISS',
        'ctm_consultaGuia' => '\\ctm_consultaGuia',
        'contratadoExecutante' => '\\contratadoExecutante',
        'ct_guiaCabecalho' => '\\ct_guiaCabecalho',
        'ct_beneficiarioDados' => '\\ct_beneficiarioDados',
        'ct_contratadoDados' => '\\ct_contratadoDados',
        'ct_contratadoProfissionalDados' => '\\ct_contratadoProfissionalDados',
        'ctm_consultaAtendimento' => '\\ctm_consultaAtendimento',
        'procedimento' => '\\procedimento',
        'ctm_honorarioIndividualGuia' => '\\ctm_honorarioIndividualGuia',
        'localContratado' => '\\localContratado',
        'codigoContratado' => '\\codigoContratado',
        'dadosContratadoExecutante' => '\\dadosContratadoExecutante',
        'dadosInternacao' => '\\dadosInternacao',
        'ct_procedimentoExecutadoHonorIndiv' => '\\ct_procedimentoExecutadoHonorIndiv',
        'ct_procedimentoDados' => '\\ct_procedimentoDados',
        'cto_guiaOdontologia' => '\\cto_guiaOdontologia',
        'dadosProfissionaisResponsaveis' => '\\dadosProfissionaisResponsaveis',
        'procedimentosExecutados' => '\\procedimentosExecutados',
        'denteRegiao' => '\\denteRegiao',
        'cto_anexoSituacaoInicialnaGTO' => '\\cto_anexoSituacaoInicialnaGTO',
        'ct_situacaoInicial' => '\\ct_situacaoInicial',
        'dentes' => '\\dentes',
        'ctm_sp-sadtGuia' => '\\ctm_spsadtGuia',
        'cabecalhoGuia' => '\\cabecalhoGuia',
        'dadosSolicitante' => '\\dadosSolicitante',
        'dadosSolicitacao' => '\\dadosSolicitacao',
        'dadosExecutante' => '\\dadosExecutante',
        'ct_autorizacaoSADT' => '\\ct_autorizacaoSADT',
        'ctm_sp-sadtAtendimento' => '\\ctm_spsadtAtendimento',
        'ct_procedimentoExecutadoSadt' => '\\ct_procedimentoExecutadoSadt',
        'ct_identEquipeSADT' => '\\ct_identEquipeSADT',
        'codProfissional' => '\\codProfissional',
        'despesa' => '\\despesa',
        'ct_procedimentoExecutadoOutras' => '\\ct_procedimentoExecutadoOutras',
        'ct_guiaValorTotal' => '\\ct_guiaValorTotal',
        'ctm_internacaoResumoGuia' => '\\ctm_internacaoResumoGuia',
        'dadosExecutante' => '\\dadosExecutante',
        'ct_autorizacaoInternacao' => '\\ct_autorizacaoInternacao',
        'ctm_internacaoDados' => '\\ctm_internacaoDados',
        'declaracoes' => '\\declaracoes',
        'ctm_internacaoDadosSaida' => '\\ctm_internacaoDadosSaida',
        'ct_procedimentoExecutadoInt' => '\\ct_procedimentoExecutadoInt',
        'identEquipe' => '\\identEquipe',
        'ct_identEquipe' => '\\ct_identEquipe',
        'codProfissional' => '\\codProfissional',
        'protocoloRecebimentoWS' => '\\protocoloRecebimentoWS',
        'ct_recebimentoLote' => '\\ct_recebimentoLote',
        'ct_protocoloRecebimento' => '\\ct_protocoloRecebimento',
        'ct_protocoloDetalhe' => '\\ct_protocoloDetalhe',
        'glosaProtocolo' => '\\glosaProtocolo',
        'dadosGuiasProtocolo' => '\\dadosGuiasProtocolo',
        'ct_motivoGlosa' => '\\ct_motivoGlosa',
        'ct_guiaDadosOdonto' => '\\ct_guiaDadosOdonto',
        'ct_valorTotal' => '\\ct_valorTotal',
        'procedimentoRealizado' => '\\procedimentoRealizado',
        'glosasProcedimento' => '\\glosasProcedimento',
        'ct_procedimentoExecutadoOdonto' => '\\ct_procedimentoExecutadoOdonto',
        'denteRegiao' => '\\denteRegiao',
        'ct_guiaDados' => '\\ct_guiaDados',
        'procedimentoRealizado' => '\\procedimentoRealizado',
        'glosasProcedimento' => '\\glosasProcedimento',
        'ct_procedimentoExecutado' => '\\ct_procedimentoExecutado',
        'SignatureType' => '\\SignatureType',
        'SignedInfoType' => '\\SignedInfoType',
        'CanonicalizationMethodType' => '\\CanonicalizationMethodType',
        'SignatureMethodType' => '\\SignatureMethodType',
        'ReferenceType' => '\\ReferenceType',
        'TransformType' => '\\TransformType',
        'DigestMethodType' => '\\DigestMethodType',
        'SignatureValueType' => '\\SignatureValueType',
        'KeyInfoType' => '\\KeyInfoType',
        'KeyValueType' => '\\KeyValueType',
        'DSAKeyValueType' => '\\DSAKeyValueType',
        'RSAKeyValueType' => '\\RSAKeyValueType',
        'RetrievalMethodType' => '\\RetrievalMethodType',
        'X509DataType' => '\\X509DataType',
        'X509IssuerSerialType' => '\\X509IssuerSerialType',
        'PGPDataType' => '\\PGPDataType',
        'SPKIDataType' => '\\SPKIDataType',
        'ObjectType' => '\\ObjectType');

    /**
     * 
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(array $options = array(), $wsdl = 'http://wstiss.qualysystem.com.br/V3_00_01/tissLoteGuias.asmx?wsdl') {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }

        parent::__construct($wsdl, $options);
    }

    /**
     * Método extraído de interface dos wsdl (implementa-se o xsd tisswebservicesv3_00_01)
     * 
     * @param loteGuiasWS $loteGuiasWS
     * @access public
     * @return protocoloRecebimentoWS
     */
    public function tissLoteGuias_Operation(loteGuiasWS $loteGuiasWS) {
        return $this->__soapCall('tissLoteGuias_Operation', array($loteGuiasWS));
    }

}
