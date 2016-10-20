<?php

namespace ans\schemes;

/**
 * Class representing CtProcedimentoExecutadoIntType
 *
 *
 * XSD Type: ct_procedimentoExecutadoInt
 */
class CtProcedimentoExecutadoIntType
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
     * @property \ans\schemes\CtProcedimentoDadosType $procedimento
     */
    private $procedimento = null;

    /**
     * @property integer $quantidadeExecutada
     */
    private $quantidadeExecutada = null;

    /**
     * @property string $viaAcesso
     */
    private $viaAcesso = null;

    /**
     * @property string $tecnicaUtilizada
     */
    private $tecnicaUtilizada = null;

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
     * @property \ans\schemes\CtProcedimentoExecutadoIntType\IdentEquipeAType[]
     * $identEquipe
     */
    private $identEquipe = null;

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
     * Gets as procedimento
     *
     * @return \ans\schemes\CtProcedimentoDadosType
     */
    public function getProcedimento()
    {
        return $this->procedimento;
    }

    /**
     * Sets a new procedimento
     *
     * @param \ans\schemes\CtProcedimentoDadosType $procedimento
     * @return self
     */
    public function setProcedimento(\ans\schemes\CtProcedimentoDadosType $procedimento)
    {
        $this->procedimento = $procedimento;
        return $this;
    }

    /**
     * Gets as quantidadeExecutada
     *
     * @return integer
     */
    public function getQuantidadeExecutada()
    {
        return $this->quantidadeExecutada;
    }

    /**
     * Sets a new quantidadeExecutada
     *
     * @param integer $quantidadeExecutada
     * @return self
     */
    public function setQuantidadeExecutada($quantidadeExecutada)
    {
        $this->quantidadeExecutada = $quantidadeExecutada;
        return $this;
    }

    /**
     * Gets as viaAcesso
     *
     * @return string
     */
    public function getViaAcesso()
    {
        return $this->viaAcesso;
    }

    /**
     * Sets a new viaAcesso
     *
     * @param string $viaAcesso
     * @return self
     */
    public function setViaAcesso($viaAcesso)
    {
        $this->viaAcesso = $viaAcesso;
        return $this;
    }

    /**
     * Gets as tecnicaUtilizada
     *
     * @return string
     */
    public function getTecnicaUtilizada()
    {
        return $this->tecnicaUtilizada;
    }

    /**
     * Sets a new tecnicaUtilizada
     *
     * @param string $tecnicaUtilizada
     * @return self
     */
    public function setTecnicaUtilizada($tecnicaUtilizada)
    {
        $this->tecnicaUtilizada = $tecnicaUtilizada;
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
     * Adds as identEquipe
     *
     * @return self
     * @param \ans\schemes\CtProcedimentoExecutadoIntType\IdentEquipeAType $identEquipe
     */
    public function addToIdentEquipe(\ans\schemes\CtProcedimentoExecutadoIntType\IdentEquipeAType $identEquipe)
    {
        $this->identEquipe[] = $identEquipe;
        return $this;
    }

    /**
     * isset identEquipe
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetIdentEquipe($index)
    {
        return isset($this->identEquipe[$index]);
    }

    /**
     * unset identEquipe
     *
     * @param scalar $index
     * @return void
     */
    public function unsetIdentEquipe($index)
    {
        unset($this->identEquipe[$index]);
    }

    /**
     * Gets as identEquipe
     *
     * @return \ans\schemes\CtProcedimentoExecutadoIntType\IdentEquipeAType[]
     */
    public function getIdentEquipe()
    {
        return $this->identEquipe;
    }

    /**
     * Sets a new identEquipe
     *
     * @param \ans\schemes\CtProcedimentoExecutadoIntType\IdentEquipeAType[]
     * $identEquipe
     * @return self
     */
    public function setIdentEquipe(array $identEquipe)
    {
        $this->identEquipe = $identEquipe;
        return $this;
    }


}

