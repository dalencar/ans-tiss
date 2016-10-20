<?php

namespace ans\schemes;

/**
 * Class representing CtProcedimentosComplementaresType
 *
 *
 * XSD Type: ct_procedimentosComplementares
 */
class CtProcedimentosComplementaresType
{

    /**
     * @property \DateTime $dataProvavel
     */
    private $dataProvavel = null;

    /**
     * @property \ans\schemes\CtProcedimentoDadosType $identificacao
     */
    private $identificacao = null;

    /**
     * @property float $quantidade
     */
    private $quantidade = null;

    /**
     * Gets as dataProvavel
     *
     * @return \DateTime
     */
    public function getDataProvavel()
    {
        return $this->dataProvavel;
    }

    /**
     * Sets a new dataProvavel
     *
     * @param \DateTime $dataProvavel
     * @return self
     */
    public function setDataProvavel(\DateTime $dataProvavel)
    {
        $this->dataProvavel = $dataProvavel;
        return $this;
    }

    /**
     * Gets as identificacao
     *
     * @return \ans\schemes\CtProcedimentoDadosType
     */
    public function getIdentificacao()
    {
        return $this->identificacao;
    }

    /**
     * Sets a new identificacao
     *
     * @param \ans\schemes\CtProcedimentoDadosType $identificacao
     * @return self
     */
    public function setIdentificacao(\ans\schemes\CtProcedimentoDadosType $identificacao)
    {
        $this->identificacao = $identificacao;
        return $this;
    }

    /**
     * Gets as quantidade
     *
     * @return float
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Sets a new quantidade
     *
     * @param float $quantidade
     * @return self
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
        return $this;
    }


}

