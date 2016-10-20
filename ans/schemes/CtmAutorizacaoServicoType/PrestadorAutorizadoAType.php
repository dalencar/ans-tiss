<?php

namespace ans\schemes\CtmAutorizacaoServicoType;

/**
 * Class representing PrestadorAutorizadoAType
 */
class PrestadorAutorizadoAType
{

    /**
     * @property \ans\schemes\CtContratadoDadosType $dadosContratado
     */
    private $dadosContratado = null;

    /**
     * @property string $cnesContratado
     */
    private $cnesContratado = null;

    /**
     * Gets as dadosContratado
     *
     * @return \ans\schemes\CtContratadoDadosType
     */
    public function getDadosContratado()
    {
        return $this->dadosContratado;
    }

    /**
     * Sets a new dadosContratado
     *
     * @param \ans\schemes\CtContratadoDadosType $dadosContratado
     * @return self
     */
    public function setDadosContratado(\ans\schemes\CtContratadoDadosType $dadosContratado)
    {
        $this->dadosContratado = $dadosContratado;
        return $this;
    }

    /**
     * Gets as cnesContratado
     *
     * @return string
     */
    public function getCnesContratado()
    {
        return $this->cnesContratado;
    }

    /**
     * Sets a new cnesContratado
     *
     * @param string $cnesContratado
     * @return self
     */
    public function setCnesContratado($cnesContratado)
    {
        $this->cnesContratado = $cnesContratado;
        return $this;
    }


}

