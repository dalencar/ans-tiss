<?php

namespace ans\schemes;

/**
 * Class representing CtMonitoramentoGuiaType
 *
 *
 * XSD Type: ct_monitoramentoGuia
 */
class CtMonitoramentoGuiaType
{

    /**
     * @property \ans\schemes\CtMonitoramentoGuiaType\DadosContratadoExecutanteAType
     * $dadosContratadoExecutante
     */
    private $dadosContratadoExecutante = null;

    /**
     * @property \ans\schemes\CtMonitoramentoGuiaType\DadosBeneficiarioAType
     * $dadosBeneficiario
     */
    private $dadosBeneficiario = null;

    /**
     * @property string $tipoEventoAtencao
     */
    private $tipoEventoAtencao = null;

    /**
     * @property string $origemEventoAtencao
     */
    private $origemEventoAtencao = null;

    /**
     * @property string $numeroGuiaPrestador
     */
    private $numeroGuiaPrestador = null;

    /**
     * @property string $numeroGuiaOperadora
     */
    private $numeroGuiaOperadora = null;

    /**
     * @property string $guiaSolicitacaoInternacao
     */
    private $guiaSolicitacaoInternacao = null;

    /**
     * @property \DateTime $dataSolicitacao
     */
    private $dataSolicitacao = null;

    /**
     * @property \DateTime $dataAutorizacao
     */
    private $dataAutorizacao = null;

    /**
     * @property \DateTime $dataRealizacao
     */
    private $dataRealizacao = null;

    /**
     * @property \DateTime $dataInicialFaturamento
     */
    private $dataInicialFaturamento = null;

    /**
     * @property \DateTime $dataFimPeriodo
     */
    private $dataFimPeriodo = null;

    /**
     * @property \DateTime $dataProtocoloCobranca
     */
    private $dataProtocoloCobranca = null;

    /**
     * @property \DateTime $dataPagamento
     */
    private $dataPagamento = null;

    /**
     * @property string $tipoConsulta
     */
    private $tipoConsulta = null;

    /**
     * @property string $cboExecutante
     */
    private $cboExecutante = null;

    /**
     * @property string $indicacaoRecemNato
     */
    private $indicacaoRecemNato = null;

    /**
     * @property string $indicacaoAcidente
     */
    private $indicacaoAcidente = null;

    /**
     * @property string $caraterAtendimento
     */
    private $caraterAtendimento = null;

    /**
     * @property string $tipoInternacao
     */
    private $tipoInternacao = null;

    /**
     * @property string $regimeInternacao
     */
    private $regimeInternacao = null;

    /**
     * @property string[] $diagnosticosCID10
     */
    private $diagnosticosCID10 = null;

    /**
     * @property string $tipoAtendimento
     */
    private $tipoAtendimento = null;

    /**
     * @property string $tipoFaturamento
     */
    private $tipoFaturamento = null;

    /**
     * @property integer $diariasAcompanhante
     */
    private $diariasAcompanhante = null;

    /**
     * @property integer $diariasUTI
     */
    private $diariasUTI = null;

    /**
     * @property string $motivoSaida
     */
    private $motivoSaida = null;

    /**
     * @property string[] $declaracaoNascido
     */
    private $declaracaoNascido = null;

    /**
     * @property string[] $declaracaoObito
     */
    private $declaracaoObito = null;

    /**
     * @property \ans\schemes\CtMonitoramentoGuiaType\ProcedimentosAType[]
     * $procedimentos
     */
    private $procedimentos = null;

    /**
     * @property \ans\schemes\CtMonitoramentoGuiaType\ValoresGuiaAType $valoresGuia
     */
    private $valoresGuia = null;

    /**
     * Gets as dadosContratadoExecutante
     *
     * @return \ans\schemes\CtMonitoramentoGuiaType\DadosContratadoExecutanteAType
     */
    public function getDadosContratadoExecutante()
    {
        return $this->dadosContratadoExecutante;
    }

    /**
     * Sets a new dadosContratadoExecutante
     *
     * @param \ans\schemes\CtMonitoramentoGuiaType\DadosContratadoExecutanteAType
     * $dadosContratadoExecutante
     * @return self
     */
    public function setDadosContratadoExecutante(\ans\schemes\CtMonitoramentoGuiaType\DadosContratadoExecutanteAType $dadosContratadoExecutante)
    {
        $this->dadosContratadoExecutante = $dadosContratadoExecutante;
        return $this;
    }

    /**
     * Gets as dadosBeneficiario
     *
     * @return \ans\schemes\CtMonitoramentoGuiaType\DadosBeneficiarioAType
     */
    public function getDadosBeneficiario()
    {
        return $this->dadosBeneficiario;
    }

    /**
     * Sets a new dadosBeneficiario
     *
     * @param \ans\schemes\CtMonitoramentoGuiaType\DadosBeneficiarioAType
     * $dadosBeneficiario
     * @return self
     */
    public function setDadosBeneficiario(\ans\schemes\CtMonitoramentoGuiaType\DadosBeneficiarioAType $dadosBeneficiario)
    {
        $this->dadosBeneficiario = $dadosBeneficiario;
        return $this;
    }

    /**
     * Gets as tipoEventoAtencao
     *
     * @return string
     */
    public function getTipoEventoAtencao()
    {
        return $this->tipoEventoAtencao;
    }

    /**
     * Sets a new tipoEventoAtencao
     *
     * @param string $tipoEventoAtencao
     * @return self
     */
    public function setTipoEventoAtencao($tipoEventoAtencao)
    {
        $this->tipoEventoAtencao = $tipoEventoAtencao;
        return $this;
    }

    /**
     * Gets as origemEventoAtencao
     *
     * @return string
     */
    public function getOrigemEventoAtencao()
    {
        return $this->origemEventoAtencao;
    }

    /**
     * Sets a new origemEventoAtencao
     *
     * @param string $origemEventoAtencao
     * @return self
     */
    public function setOrigemEventoAtencao($origemEventoAtencao)
    {
        $this->origemEventoAtencao = $origemEventoAtencao;
        return $this;
    }

    /**
     * Gets as numeroGuiaPrestador
     *
     * @return string
     */
    public function getNumeroGuiaPrestador()
    {
        return $this->numeroGuiaPrestador;
    }

    /**
     * Sets a new numeroGuiaPrestador
     *
     * @param string $numeroGuiaPrestador
     * @return self
     */
    public function setNumeroGuiaPrestador($numeroGuiaPrestador)
    {
        $this->numeroGuiaPrestador = $numeroGuiaPrestador;
        return $this;
    }

    /**
     * Gets as numeroGuiaOperadora
     *
     * @return string
     */
    public function getNumeroGuiaOperadora()
    {
        return $this->numeroGuiaOperadora;
    }

    /**
     * Sets a new numeroGuiaOperadora
     *
     * @param string $numeroGuiaOperadora
     * @return self
     */
    public function setNumeroGuiaOperadora($numeroGuiaOperadora)
    {
        $this->numeroGuiaOperadora = $numeroGuiaOperadora;
        return $this;
    }

    /**
     * Gets as guiaSolicitacaoInternacao
     *
     * @return string
     */
    public function getGuiaSolicitacaoInternacao()
    {
        return $this->guiaSolicitacaoInternacao;
    }

    /**
     * Sets a new guiaSolicitacaoInternacao
     *
     * @param string $guiaSolicitacaoInternacao
     * @return self
     */
    public function setGuiaSolicitacaoInternacao($guiaSolicitacaoInternacao)
    {
        $this->guiaSolicitacaoInternacao = $guiaSolicitacaoInternacao;
        return $this;
    }

    /**
     * Gets as dataSolicitacao
     *
     * @return \DateTime
     */
    public function getDataSolicitacao()
    {
        return $this->dataSolicitacao;
    }

    /**
     * Sets a new dataSolicitacao
     *
     * @param \DateTime $dataSolicitacao
     * @return self
     */
    public function setDataSolicitacao(\DateTime $dataSolicitacao)
    {
        $this->dataSolicitacao = $dataSolicitacao;
        return $this;
    }

    /**
     * Gets as dataAutorizacao
     *
     * @return \DateTime
     */
    public function getDataAutorizacao()
    {
        return $this->dataAutorizacao;
    }

    /**
     * Sets a new dataAutorizacao
     *
     * @param \DateTime $dataAutorizacao
     * @return self
     */
    public function setDataAutorizacao(\DateTime $dataAutorizacao)
    {
        $this->dataAutorizacao = $dataAutorizacao;
        return $this;
    }

    /**
     * Gets as dataRealizacao
     *
     * @return \DateTime
     */
    public function getDataRealizacao()
    {
        return $this->dataRealizacao;
    }

    /**
     * Sets a new dataRealizacao
     *
     * @param \DateTime $dataRealizacao
     * @return self
     */
    public function setDataRealizacao(\DateTime $dataRealizacao)
    {
        $this->dataRealizacao = $dataRealizacao;
        return $this;
    }

    /**
     * Gets as dataInicialFaturamento
     *
     * @return \DateTime
     */
    public function getDataInicialFaturamento()
    {
        return $this->dataInicialFaturamento;
    }

    /**
     * Sets a new dataInicialFaturamento
     *
     * @param \DateTime $dataInicialFaturamento
     * @return self
     */
    public function setDataInicialFaturamento(\DateTime $dataInicialFaturamento)
    {
        $this->dataInicialFaturamento = $dataInicialFaturamento;
        return $this;
    }

    /**
     * Gets as dataFimPeriodo
     *
     * @return \DateTime
     */
    public function getDataFimPeriodo()
    {
        return $this->dataFimPeriodo;
    }

    /**
     * Sets a new dataFimPeriodo
     *
     * @param \DateTime $dataFimPeriodo
     * @return self
     */
    public function setDataFimPeriodo(\DateTime $dataFimPeriodo)
    {
        $this->dataFimPeriodo = $dataFimPeriodo;
        return $this;
    }

    /**
     * Gets as dataProtocoloCobranca
     *
     * @return \DateTime
     */
    public function getDataProtocoloCobranca()
    {
        return $this->dataProtocoloCobranca;
    }

    /**
     * Sets a new dataProtocoloCobranca
     *
     * @param \DateTime $dataProtocoloCobranca
     * @return self
     */
    public function setDataProtocoloCobranca(\DateTime $dataProtocoloCobranca)
    {
        $this->dataProtocoloCobranca = $dataProtocoloCobranca;
        return $this;
    }

    /**
     * Gets as dataPagamento
     *
     * @return \DateTime
     */
    public function getDataPagamento()
    {
        return $this->dataPagamento;
    }

    /**
     * Sets a new dataPagamento
     *
     * @param \DateTime $dataPagamento
     * @return self
     */
    public function setDataPagamento(\DateTime $dataPagamento)
    {
        $this->dataPagamento = $dataPagamento;
        return $this;
    }

    /**
     * Gets as tipoConsulta
     *
     * @return string
     */
    public function getTipoConsulta()
    {
        return $this->tipoConsulta;
    }

    /**
     * Sets a new tipoConsulta
     *
     * @param string $tipoConsulta
     * @return self
     */
    public function setTipoConsulta($tipoConsulta)
    {
        $this->tipoConsulta = $tipoConsulta;
        return $this;
    }

    /**
     * Gets as cboExecutante
     *
     * @return string
     */
    public function getCboExecutante()
    {
        return $this->cboExecutante;
    }

    /**
     * Sets a new cboExecutante
     *
     * @param string $cboExecutante
     * @return self
     */
    public function setCboExecutante($cboExecutante)
    {
        $this->cboExecutante = $cboExecutante;
        return $this;
    }

    /**
     * Gets as indicacaoRecemNato
     *
     * @return string
     */
    public function getIndicacaoRecemNato()
    {
        return $this->indicacaoRecemNato;
    }

    /**
     * Sets a new indicacaoRecemNato
     *
     * @param string $indicacaoRecemNato
     * @return self
     */
    public function setIndicacaoRecemNato($indicacaoRecemNato)
    {
        $this->indicacaoRecemNato = $indicacaoRecemNato;
        return $this;
    }

    /**
     * Gets as indicacaoAcidente
     *
     * @return string
     */
    public function getIndicacaoAcidente()
    {
        return $this->indicacaoAcidente;
    }

    /**
     * Sets a new indicacaoAcidente
     *
     * @param string $indicacaoAcidente
     * @return self
     */
    public function setIndicacaoAcidente($indicacaoAcidente)
    {
        $this->indicacaoAcidente = $indicacaoAcidente;
        return $this;
    }

    /**
     * Gets as caraterAtendimento
     *
     * @return string
     */
    public function getCaraterAtendimento()
    {
        return $this->caraterAtendimento;
    }

    /**
     * Sets a new caraterAtendimento
     *
     * @param string $caraterAtendimento
     * @return self
     */
    public function setCaraterAtendimento($caraterAtendimento)
    {
        $this->caraterAtendimento = $caraterAtendimento;
        return $this;
    }

    /**
     * Gets as tipoInternacao
     *
     * @return string
     */
    public function getTipoInternacao()
    {
        return $this->tipoInternacao;
    }

    /**
     * Sets a new tipoInternacao
     *
     * @param string $tipoInternacao
     * @return self
     */
    public function setTipoInternacao($tipoInternacao)
    {
        $this->tipoInternacao = $tipoInternacao;
        return $this;
    }

    /**
     * Gets as regimeInternacao
     *
     * @return string
     */
    public function getRegimeInternacao()
    {
        return $this->regimeInternacao;
    }

    /**
     * Sets a new regimeInternacao
     *
     * @param string $regimeInternacao
     * @return self
     */
    public function setRegimeInternacao($regimeInternacao)
    {
        $this->regimeInternacao = $regimeInternacao;
        return $this;
    }

    /**
     * Adds as diagnoticoCID
     *
     * @return self
     * @param string $diagnoticoCID
     */
    public function addToDiagnosticosCID10($diagnoticoCID)
    {
        $this->diagnosticosCID10[] = $diagnoticoCID;
        return $this;
    }

    /**
     * isset diagnosticosCID10
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDiagnosticosCID10($index)
    {
        return isset($this->diagnosticosCID10[$index]);
    }

    /**
     * unset diagnosticosCID10
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDiagnosticosCID10($index)
    {
        unset($this->diagnosticosCID10[$index]);
    }

    /**
     * Gets as diagnosticosCID10
     *
     * @return string[]
     */
    public function getDiagnosticosCID10()
    {
        return $this->diagnosticosCID10;
    }

    /**
     * Sets a new diagnosticosCID10
     *
     * @param string $diagnosticosCID10
     * @return self
     */
    public function setDiagnosticosCID10(array $diagnosticosCID10)
    {
        $this->diagnosticosCID10 = $diagnosticosCID10;
        return $this;
    }

    /**
     * Gets as tipoAtendimento
     *
     * @return string
     */
    public function getTipoAtendimento()
    {
        return $this->tipoAtendimento;
    }

    /**
     * Sets a new tipoAtendimento
     *
     * @param string $tipoAtendimento
     * @return self
     */
    public function setTipoAtendimento($tipoAtendimento)
    {
        $this->tipoAtendimento = $tipoAtendimento;
        return $this;
    }

    /**
     * Gets as tipoFaturamento
     *
     * @return string
     */
    public function getTipoFaturamento()
    {
        return $this->tipoFaturamento;
    }

    /**
     * Sets a new tipoFaturamento
     *
     * @param string $tipoFaturamento
     * @return self
     */
    public function setTipoFaturamento($tipoFaturamento)
    {
        $this->tipoFaturamento = $tipoFaturamento;
        return $this;
    }

    /**
     * Gets as diariasAcompanhante
     *
     * @return integer
     */
    public function getDiariasAcompanhante()
    {
        return $this->diariasAcompanhante;
    }

    /**
     * Sets a new diariasAcompanhante
     *
     * @param integer $diariasAcompanhante
     * @return self
     */
    public function setDiariasAcompanhante($diariasAcompanhante)
    {
        $this->diariasAcompanhante = $diariasAcompanhante;
        return $this;
    }

    /**
     * Gets as diariasUTI
     *
     * @return integer
     */
    public function getDiariasUTI()
    {
        return $this->diariasUTI;
    }

    /**
     * Sets a new diariasUTI
     *
     * @param integer $diariasUTI
     * @return self
     */
    public function setDiariasUTI($diariasUTI)
    {
        $this->diariasUTI = $diariasUTI;
        return $this;
    }

    /**
     * Gets as motivoSaida
     *
     * @return string
     */
    public function getMotivoSaida()
    {
        return $this->motivoSaida;
    }

    /**
     * Sets a new motivoSaida
     *
     * @param string $motivoSaida
     * @return self
     */
    public function setMotivoSaida($motivoSaida)
    {
        $this->motivoSaida = $motivoSaida;
        return $this;
    }

    /**
     * Adds as declaracaoNascido
     *
     * @return self
     * @param string $declaracaoNascido
     */
    public function addToDeclaracaoNascido($declaracaoNascido)
    {
        $this->declaracaoNascido[] = $declaracaoNascido;
        return $this;
    }

    /**
     * isset declaracaoNascido
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDeclaracaoNascido($index)
    {
        return isset($this->declaracaoNascido[$index]);
    }

    /**
     * unset declaracaoNascido
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDeclaracaoNascido($index)
    {
        unset($this->declaracaoNascido[$index]);
    }

    /**
     * Gets as declaracaoNascido
     *
     * @return string[]
     */
    public function getDeclaracaoNascido()
    {
        return $this->declaracaoNascido;
    }

    /**
     * Sets a new declaracaoNascido
     *
     * @param string $declaracaoNascido
     * @return self
     */
    public function setDeclaracaoNascido(array $declaracaoNascido)
    {
        $this->declaracaoNascido = $declaracaoNascido;
        return $this;
    }

    /**
     * Adds as declaracaoObito
     *
     * @return self
     * @param string $declaracaoObito
     */
    public function addToDeclaracaoObito($declaracaoObito)
    {
        $this->declaracaoObito[] = $declaracaoObito;
        return $this;
    }

    /**
     * isset declaracaoObito
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDeclaracaoObito($index)
    {
        return isset($this->declaracaoObito[$index]);
    }

    /**
     * unset declaracaoObito
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDeclaracaoObito($index)
    {
        unset($this->declaracaoObito[$index]);
    }

    /**
     * Gets as declaracaoObito
     *
     * @return string[]
     */
    public function getDeclaracaoObito()
    {
        return $this->declaracaoObito;
    }

    /**
     * Sets a new declaracaoObito
     *
     * @param string $declaracaoObito
     * @return self
     */
    public function setDeclaracaoObito(array $declaracaoObito)
    {
        $this->declaracaoObito = $declaracaoObito;
        return $this;
    }

    /**
     * Adds as procedimentos
     *
     * @return self
     * @param \ans\schemes\CtMonitoramentoGuiaType\ProcedimentosAType $procedimentos
     */
    public function addToProcedimentos(\ans\schemes\CtMonitoramentoGuiaType\ProcedimentosAType $procedimentos)
    {
        $this->procedimentos[] = $procedimentos;
        return $this;
    }

    /**
     * isset procedimentos
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProcedimentos($index)
    {
        return isset($this->procedimentos[$index]);
    }

    /**
     * unset procedimentos
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProcedimentos($index)
    {
        unset($this->procedimentos[$index]);
    }

    /**
     * Gets as procedimentos
     *
     * @return \ans\schemes\CtMonitoramentoGuiaType\ProcedimentosAType[]
     */
    public function getProcedimentos()
    {
        return $this->procedimentos;
    }

    /**
     * Sets a new procedimentos
     *
     * @param \ans\schemes\CtMonitoramentoGuiaType\ProcedimentosAType[] $procedimentos
     * @return self
     */
    public function setProcedimentos(array $procedimentos)
    {
        $this->procedimentos = $procedimentos;
        return $this;
    }

    /**
     * Gets as valoresGuia
     *
     * @return \ans\schemes\CtMonitoramentoGuiaType\ValoresGuiaAType
     */
    public function getValoresGuia()
    {
        return $this->valoresGuia;
    }

    /**
     * Sets a new valoresGuia
     *
     * @param \ans\schemes\CtMonitoramentoGuiaType\ValoresGuiaAType $valoresGuia
     * @return self
     */
    public function setValoresGuia(\ans\schemes\CtMonitoramentoGuiaType\ValoresGuiaAType $valoresGuia)
    {
        $this->valoresGuia = $valoresGuia;
        return $this;
    }


}

