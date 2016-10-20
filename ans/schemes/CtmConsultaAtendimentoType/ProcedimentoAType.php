<?php

namespace ans\schemes\CtmConsultaAtendimentoType;

/**
 * Class representing ProcedimentoAType
 */
class ProcedimentoAType
{

    /**
     * @property string $codigoTabela
     */
    private $codigoTabela = null;

    /**
     * @property string $codigoProcedimento
     */
    private $codigoProcedimento = null;

    /**
     * @property float $valorProcedimento
     */
    private $valorProcedimento = null;

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
     * Gets as valorProcedimento
     *
     * @return float
     */
    public function getValorProcedimento()
    {
        return $this->valorProcedimento;
    }

    /**
     * Sets a new valorProcedimento
     *
     * @param float $valorProcedimento
     * @return self
     */
    public function setValorProcedimento($valorProcedimento)
    {
        $this->valorProcedimento = $valorProcedimento;
        return $this;
    }


}

