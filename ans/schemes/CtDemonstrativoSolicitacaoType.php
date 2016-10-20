<?php

namespace ans\schemes;

/**
 * Class representing CtDemonstrativoSolicitacaoType
 *
 * estrutura para solicitação de demonstrativo de pagamento
 * XSD Type: ct_demonstrativoSolicitacao
 */
class CtDemonstrativoSolicitacaoType
{

    /**
     * @property \ans\schemes\CtContratadoDadosType $dadosPrestador
     */
    private $dadosPrestador = null;

    /**
     * @property \DateTime $dataSolicitacao
     */
    private $dataSolicitacao = null;

    /**
     * @property string $tipoDemonstrativo
     */
    private $tipoDemonstrativo = null;

    /**
     * @property \ans\schemes\CtDemonstrativoSolicitacaoType\PeriodoAType $periodo
     */
    private $periodo = null;

    /**
     * @property string $numeroProtocolo
     */
    private $numeroProtocolo = null;

    /**
     * Gets as dadosPrestador
     *
     * @return \ans\schemes\CtContratadoDadosType
     */
    public function getDadosPrestador()
    {
        return $this->dadosPrestador;
    }

    /**
     * Sets a new dadosPrestador
     *
     * @param \ans\schemes\CtContratadoDadosType $dadosPrestador
     * @return self
     */
    public function setDadosPrestador(\ans\schemes\CtContratadoDadosType $dadosPrestador)
    {
        $this->dadosPrestador = $dadosPrestador;
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
     * Gets as tipoDemonstrativo
     *
     * @return string
     */
    public function getTipoDemonstrativo()
    {
        return $this->tipoDemonstrativo;
    }

    /**
     * Sets a new tipoDemonstrativo
     *
     * @param string $tipoDemonstrativo
     * @return self
     */
    public function setTipoDemonstrativo($tipoDemonstrativo)
    {
        $this->tipoDemonstrativo = $tipoDemonstrativo;
        return $this;
    }

    /**
     * Gets as periodo
     *
     * @return \ans\schemes\CtDemonstrativoSolicitacaoType\PeriodoAType
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * Sets a new periodo
     *
     * @param \ans\schemes\CtDemonstrativoSolicitacaoType\PeriodoAType $periodo
     * @return self
     */
    public function setPeriodo(\ans\schemes\CtDemonstrativoSolicitacaoType\PeriodoAType $periodo)
    {
        $this->periodo = $periodo;
        return $this;
    }

    /**
     * Gets as numeroProtocolo
     *
     * @return string
     */
    public function getNumeroProtocolo()
    {
        return $this->numeroProtocolo;
    }

    /**
     * Sets a new numeroProtocolo
     *
     * @param string $numeroProtocolo
     * @return self
     */
    public function setNumeroProtocolo($numeroProtocolo)
    {
        $this->numeroProtocolo = $numeroProtocolo;
        return $this;
    }


}

