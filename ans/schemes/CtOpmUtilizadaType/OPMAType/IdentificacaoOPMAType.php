<?php

namespace ans\schemes\CtOpmUtilizadaType\OPMAType;

/**
 * Class representing IdentificacaoOPMAType
 */
class IdentificacaoOPMAType
{

    /**
     * @property \ans\schemes\CtProcedimentoDadosType $identificacaoOPME
     */
    private $identificacaoOPME = null;

    /**
     * @property integer $quantidade
     */
    private $quantidade = null;

    /**
     * @property string $codigoBarra
     */
    private $codigoBarra = null;

    /**
     * @property float $valorUnitario
     */
    private $valorUnitario = null;

    /**
     * @property float $valorTotal
     */
    private $valorTotal = null;

    /**
     * Gets as identificacaoOPME
     *
     * @return \ans\schemes\CtProcedimentoDadosType
     */
    public function getIdentificacaoOPME()
    {
        return $this->identificacaoOPME;
    }

    /**
     * Sets a new identificacaoOPME
     *
     * @param \ans\schemes\CtProcedimentoDadosType $identificacaoOPME
     * @return self
     */
    public function setIdentificacaoOPME(\ans\schemes\CtProcedimentoDadosType $identificacaoOPME)
    {
        $this->identificacaoOPME = $identificacaoOPME;
        return $this;
    }

    /**
     * Gets as quantidade
     *
     * @return integer
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Sets a new quantidade
     *
     * @param integer $quantidade
     * @return self
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
        return $this;
    }

    /**
     * Gets as codigoBarra
     *
     * @return string
     */
    public function getCodigoBarra()
    {
        return $this->codigoBarra;
    }

    /**
     * Sets a new codigoBarra
     *
     * @param string $codigoBarra
     * @return self
     */
    public function setCodigoBarra($codigoBarra)
    {
        $this->codigoBarra = $codigoBarra;
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


}

