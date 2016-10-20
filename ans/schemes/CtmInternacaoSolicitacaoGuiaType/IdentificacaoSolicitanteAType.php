<?php

namespace ans\schemes\CtmInternacaoSolicitacaoGuiaType;

/**
 * Class representing IdentificacaoSolicitanteAType
 */
class IdentificacaoSolicitanteAType
{

    /**
     * @property \ans\schemes\CtContratadoDadosType $dadosDoContratado
     */
    private $dadosDoContratado = null;

    /**
     * @property \ans\schemes\CtContratadoProfissionalDadosType
     * $dadosProfissionalContratado
     */
    private $dadosProfissionalContratado = null;

    /**
     * Gets as dadosDoContratado
     *
     * @return \ans\schemes\CtContratadoDadosType
     */
    public function getDadosDoContratado()
    {
        return $this->dadosDoContratado;
    }

    /**
     * Sets a new dadosDoContratado
     *
     * @param \ans\schemes\CtContratadoDadosType $dadosDoContratado
     * @return self
     */
    public function setDadosDoContratado(\ans\schemes\CtContratadoDadosType $dadosDoContratado)
    {
        $this->dadosDoContratado = $dadosDoContratado;
        return $this;
    }

    /**
     * Gets as dadosProfissionalContratado
     *
     * @return \ans\schemes\CtContratadoProfissionalDadosType
     */
    public function getDadosProfissionalContratado()
    {
        return $this->dadosProfissionalContratado;
    }

    /**
     * Sets a new dadosProfissionalContratado
     *
     * @param \ans\schemes\CtContratadoProfissionalDadosType
     * $dadosProfissionalContratado
     * @return self
     */
    public function setDadosProfissionalContratado(\ans\schemes\CtContratadoProfissionalDadosType $dadosProfissionalContratado)
    {
        $this->dadosProfissionalContratado = $dadosProfissionalContratado;
        return $this;
    }


}

