<?php

namespace ans\schemes\CtmProrrogacaoSolicitacaoGuiaType;

/**
 * Class representing ProcedimentosAdicionaisAType
 */
class ProcedimentosAdicionaisAType
{

    /**
     * @property \ans\schemes\CtProcedimentoDadosType $procedimento
     */
    private $procedimento = null;

    /**
     * @property integer $quantidadeSolicitada
     */
    private $quantidadeSolicitada = null;

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
     * Gets as quantidadeSolicitada
     *
     * @return integer
     */
    public function getQuantidadeSolicitada()
    {
        return $this->quantidadeSolicitada;
    }

    /**
     * Sets a new quantidadeSolicitada
     *
     * @param integer $quantidadeSolicitada
     * @return self
     */
    public function setQuantidadeSolicitada($quantidadeSolicitada)
    {
        $this->quantidadeSolicitada = $quantidadeSolicitada;
        return $this;
    }


}

