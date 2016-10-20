<?php

namespace ans\schemes;

/**
 * Class representing CtProcedimentoExecutadoOutrasType
 *
 *
 * XSD Type: ct_procedimentoExecutadoOutras
 */
class CtProcedimentoExecutadoOutrasType
{

    /**
     * @property \DateTime $dataExecucao
     */
    private $dataExecucao = null;

    /**
     * @property \DateTime $horaInicial
     */
    private $horaInicial = null;

    /**
     * @property \DateTime $horaFinal
     */
    private $horaFinal = null;

    /**
     * @property string $codigoTabela
     */
    private $codigoTabela = null;

    /**
     * @property string $codigoProcedimento
     */
    private $codigoProcedimento = null;

    /**
     * @property float $quantidadeExecutada
     */
    private $quantidadeExecutada = null;

    /**
     * @property string $unidadeMedida
     */
    private $unidadeMedida = null;

    /**
     * @property float $reducaoAcrescimo
     */
    private $reducaoAcrescimo = null;

    /**
     * @property float $valorUnitario
     */
    private $valorUnitario = null;

    /**
     * @property float $valorTotal
     */
    private $valorTotal = null;

    /**
     * @property string $descricaoProcedimento
     */
    private $descricaoProcedimento = null;

    /**
     * @property string $registroANVISA
     */
    private $registroANVISA = null;

    /**
     * @property string $codigoRefFabricante
     */
    private $codigoRefFabricante = null;

    /**
     * @property string $autorizacaoFuncionamento
     */
    private $autorizacaoFuncionamento = null;

    /**
     * Gets as dataExecucao
     *
     * @return \DateTime
     */
    public function getDataExecucao()
    {
        return $this->dataExecucao;
    }

    /**
     * Sets a new dataExecucao
     *
     * @param \DateTime $dataExecucao
     * @return self
     */
    public function setDataExecucao(\DateTime $dataExecucao)
    {
        $this->dataExecucao = $dataExecucao;
        return $this;
    }

    /**
     * Gets as horaInicial
     *
     * @return \DateTime
     */
    public function getHoraInicial()
    {
        return $this->horaInicial;
    }

    /**
     * Sets a new horaInicial
     *
     * @param \DateTime $horaInicial
     * @return self
     */
    public function setHoraInicial(\DateTime $horaInicial)
    {
        $this->horaInicial = $horaInicial;
        return $this;
    }

    /**
     * Gets as horaFinal
     *
     * @return \DateTime
     */
    public function getHoraFinal()
    {
        return $this->horaFinal;
    }

    /**
     * Sets a new horaFinal
     *
     * @param \DateTime $horaFinal
     * @return self
     */
    public function setHoraFinal(\DateTime $horaFinal)
    {
        $this->horaFinal = $horaFinal;
        return $this;
    }

    /**
     * Gets as codigoTabela
     *
     * @return string
     */
    public function getCodigoTabela()
    {
        return $this->codigoTabela;
    }

    /**
     * Sets a new codigoTabela
     *
     * @param string $codigoTabela
     * @return self
     */
    public function setCodigoTabela($codigoTabela)
    {
        $this->codigoTabela = $codigoTabela;
        return $this;
    }

    /**
     * Gets as codigoProcedimento
     *
     * @return string
     */
    public function getCodigoProcedimento()
    {
        return $this->codigoProcedimento;
    }

    /**
     * Sets a new codigoProcedimento
     *
     * @param string $codigoProcedimento
     * @return self
     */
    public function setCodigoProcedimento($codigoProcedimento)
    {
        $this->codigoProcedimento = $codigoProcedimento;
        return $this;
    }

    /**
     * Gets as quantidadeExecutada
     *
     * @return float
     */
    public function getQuantidadeExecutada()
    {
        return $this->quantidadeExecutada;
    }

    /**
     * Sets a new quantidadeExecutada
     *
     * @param float $quantidadeExecutada
     * @return self
     */
    public function setQuantidadeExecutada($quantidadeExecutada)
    {
        $this->quantidadeExecutada = $quantidadeExecutada;
        return $this;
    }

    /**
     * Gets as unidadeMedida
     *
     * @return string
     */
    public function getUnidadeMedida()
    {
        return $this->unidadeMedida;
    }

    /**
     * Sets a new unidadeMedida
     *
     * @param string $unidadeMedida
     * @return self
     */
    public function setUnidadeMedida($unidadeMedida)
    {
        $this->unidadeMedida = $unidadeMedida;
        return $this;
    }

    /**
     * Gets as reducaoAcrescimo
     *
     * @return float
     */
    public function getReducaoAcrescimo()
    {
        return $this->reducaoAcrescimo;
    }

    /**
     * Sets a new reducaoAcrescimo
     *
     * @param float $reducaoAcrescimo
     * @return self
     */
    public function setReducaoAcrescimo($reducaoAcrescimo)
    {
        $this->reducaoAcrescimo = $reducaoAcrescimo;
        return $this;
    }

    /**
     * Gets as valorUnitario
     *
     * @return float
     */
    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    /**
     * Sets a new valorUnitario
     *
     * @param float $valorUnitario
     * @return self
     */
    public function setValorUnitario($valorUnitario)
    {
        $this->valorUnitario = $valorUnitario;
        return $this;
    }

    /**
     * Gets as valorTotal
     *
     * @return float
     */
    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    /**
     * Sets a new valorTotal
     *
     * @param float $valorTotal
     * @return self
     */
    public function setValorTotal($valorTotal)
    {
        $this->valorTotal = $valorTotal;
        return $this;
    }

    /**
     * Gets as descricaoProcedimento
     *
     * @return string
     */
    public function getDescricaoProcedimento()
    {
        return $this->descricaoProcedimento;
    }

    /**
     * Sets a new descricaoProcedimento
     *
     * @param string $descricaoProcedimento
     * @return self
     */
    public function setDescricaoProcedimento($descricaoProcedimento)
    {
        $this->descricaoProcedimento = $descricaoProcedimento;
        return $this;
    }

    /**
     * Gets as registroANVISA
     *
     * @return string
     */
    public function getRegistroANVISA()
    {
        return $this->registroANVISA;
    }

    /**
     * Sets a new registroANVISA
     *
     * @param string $registroANVISA
     * @return self
     */
    public function setRegistroANVISA($registroANVISA)
    {
        $this->registroANVISA = $registroANVISA;
        return $this;
    }

    /**
     * Gets as codigoRefFabricante
     *
     * @return string
     */
    public function getCodigoRefFabricante()
    {
        return $this->codigoRefFabricante;
    }

    /**
     * Sets a new codigoRefFabricante
     *
     * @param string $codigoRefFabricante
     * @return self
     */
    public function setCodigoRefFabricante($codigoRefFabricante)
    {
        $this->codigoRefFabricante = $codigoRefFabricante;
        return $this;
    }

    /**
     * Gets as autorizacaoFuncionamento
     *
     * @return string
     */
    public function getAutorizacaoFuncionamento()
    {
        return $this->autorizacaoFuncionamento;
    }

    /**
     * Sets a new autorizacaoFuncionamento
     *
     * @param string $autorizacaoFuncionamento
     * @return self
     */
    public function setAutorizacaoFuncionamento($autorizacaoFuncionamento)
    {
        $this->autorizacaoFuncionamento = $autorizacaoFuncionamento;
        return $this;
    }


}

