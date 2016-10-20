<?php

namespace ans\schemes;

/**
 * Class representing ProtocoloRecebimentoRecursoWS
 */
class ProtocoloRecebimentoRecursoWS
{

    /**
     * @property \ans\schemes\CabecalhoTransacaoType $cabecalho
     */
    private $cabecalho = null;

    /**
     * @property \ans\schemes\CtRecebimentoRecursoType $recebimentoRecurso
     */
    private $recebimentoRecurso = null;

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
     * Gets as recebimentoRecurso
     *
     * @return \ans\schemes\CtRecebimentoRecursoType
     */
    public function getRecebimentoRecurso()
    {
        return $this->recebimentoRecurso;
    }

    /**
     * Sets a new recebimentoRecurso
     *
     * @param \ans\schemes\CtRecebimentoRecursoType $recebimentoRecurso
     * @return self
     */
    public function setRecebimentoRecurso(\ans\schemes\CtRecebimentoRecursoType $recebimentoRecurso)
    {
        $this->recebimentoRecurso = $recebimentoRecurso;
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

