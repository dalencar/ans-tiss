<?php

namespace ans\schemes\CtProcedimentoExecutadoIntType;

/**
 * Class representing IdentEquipeAType
 */
class IdentEquipeAType
{

    /**
     * @property \ans\schemes\CtIdentEquipeType $identificacaoEquipe
     */
    private $identificacaoEquipe = null;

    /**
     * Gets as identificacaoEquipe
     *
     * @return \ans\schemes\CtIdentEquipeType
     */
    public function getIdentificacaoEquipe()
    {
        return $this->identificacaoEquipe;
    }

    /**
     * Sets a new identificacaoEquipe
     *
     * @param \ans\schemes\CtIdentEquipeType $identificacaoEquipe
     * @return self
     */
    public function setIdentificacaoEquipe(\ans\schemes\CtIdentEquipeType $identificacaoEquipe)
    {
        $this->identificacaoEquipe = $identificacaoEquipe;
        return $this;
    }


}

