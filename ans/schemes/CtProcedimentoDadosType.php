<?php

namespace ans\schemes;

/**
 * Class representing CtProcedimentoDadosType
 *
 *
 * XSD Type: ct_procedimentoDados
 */
class CtProcedimentoDadosType
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
     * @property string $descricaoProcedimento
     */
    private $descricaoProcedimento = null;

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


}

