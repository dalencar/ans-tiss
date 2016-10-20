<?php

namespace ans\schemes;

/**
 * Class representing LoteRecursoGlosaWS
 */
class LoteRecursoGlosaWS
{

    /**
     * @property \ans\schemes\CabecalhoTransacaoType $cabecalho
     */
    private $cabecalho = null;

    /**
     * @property \ans\schemes\CtGuiaRecursoLoteType $loteRecurso
     */
    private $loteRecurso = null;

    /**
     * @property string $hash
     */
    private $hash = null;

    /**
     * Gets as cabecalho
     *
     * @return \ans\schemes\CabecalhoTransacaoType
     */
    public function getCabecalho()
    {
        return $this->cabecalho;
    }

    /**
     * Sets a new cabecalho
     *
     * @param \ans\schemes\CabecalhoTransacaoType $cabecalho
     * @return self
     */
    public function setCabecalho(\ans\schemes\CabecalhoTransacaoType $cabecalho)
    {
        $this->cabecalho = $cabecalho;
        return $this;
    }

    /**
     * Gets as loteRecurso
     *
     * @return \ans\schemes\CtGuiaRecursoLoteType
     */
    public function getLoteRecurso()
    {
        return $this->loteRecurso;
    }

    /**
     * Sets a new loteRecurso
     *
     * @param \ans\schemes\CtGuiaRecursoLoteType $loteRecurso
     * @return self
     */
    public function setLoteRecurso(\ans\schemes\CtGuiaRecursoLoteType $loteRecurso)
    {
        $this->loteRecurso = $loteRecurso;
        return $this;
    }

    /**
     * Gets as hash
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Sets a new hash
     *
     * @param string $hash
     * @return self
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
        return $this;
    }


}

