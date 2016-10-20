<?php

namespace ans\schemes;

/**
 * Class representing CtProcedimentoSolicitadoType
 *
 *
 * XSD Type: ct_procedimentoSolicitado
 */
class CtProcedimentoSolicitadoType
{

    /**
     * @property \ans\schemes\CtProcedimentoDadosType $procedimento
     */
    private $procedimento = null;

    /**
     * @property string $unidadeMedida
     */
    private $unidadeMedida = null;

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

