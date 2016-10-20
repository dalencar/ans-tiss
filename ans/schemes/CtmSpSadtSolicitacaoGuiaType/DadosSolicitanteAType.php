<?php

namespace ans\schemes\CtmSpSadtSolicitacaoGuiaType;

/**
 * Class representing DadosSolicitanteAType
 */
class DadosSolicitanteAType
{

    /**
     * @property \ans\schemes\CtContratadoDadosType $contratadoSolicitante
     */
    private $contratadoSolicitante = null;

    /**
     * @property \ans\schemes\CtContratadoProfissionalDadosType
     * $profissionalSolicitante
     */
    private $profissionalSolicitante = null;

    /**
     * Gets as contratadoSolicitante
     *
     * @return \ans\schemes\CtContratadoDadosType
     */
    public function getContratadoSolicitante()
    {
        return $this->contratadoSolicitante;
    }

    /**
     * Sets a new contratadoSolicitante
     *
     * @param \ans\schemes\CtContratadoDadosType $contratadoSolicitante
     * @return self
     */
    public function setContratadoSolicitante(\ans\schemes\CtContratadoDadosType $contratadoSolicitante)
    {
        $this->contratadoSolicitante = $contratadoSolicitante;
        return $this;
    }

    /**
     * Gets as profissionalSolicitante
     *
     * @return \ans\schemes\CtContratadoProfissionalDadosType
     */
    public function getProfissionalSolicitante()
    {
        return $this->profissionalSolicitante;
    }

    /**
     * Sets a new profissionalSolicitante
     *
     * @param \ans\schemes\CtContratadoProfissionalDadosType $profissionalSolicitante
     * @return self
     */
    public function setProfissionalSolicitante(\ans\schemes\CtContratadoProfissionalDadosType $profissionalSolicitante)
    {
        $this->profissionalSolicitante = $profissionalSolicitante;
        return $this;
    }


}

