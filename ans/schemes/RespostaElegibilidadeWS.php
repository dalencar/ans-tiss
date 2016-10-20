<?php

namespace ans\schemes;

/**
 * Class representing RespostaElegibilidadeWS
 */
class RespostaElegibilidadeWS
{

    /**
     * @property \ans\schemes\CabecalhoTransacaoType $cabecalho
     */
    private $cabecalho = null;

    /**
     * @property \ans\schemes\CtRespostaElegibilidadeType $respostaElegibilidade
     */
    private $respostaElegibilidade = null;

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
     * Gets as respostaElegibilidade
     *
     * @return \ans\schemes\CtRespostaElegibilidadeType
     */
    public function getRespostaElegibilidade()
    {
        return $this->respostaElegibilidade;
    }

    /**
     * Sets a new respostaElegibilidade
     *
     * @param \ans\schemes\CtRespostaElegibilidadeType $respostaElegibilidade
     * @return self
     */
    public function setRespostaElegibilidade(\ans\schemes\CtRespostaElegibilidadeType $respostaElegibilidade)
    {
        $this->respostaElegibilidade = $respostaElegibilidade;
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

