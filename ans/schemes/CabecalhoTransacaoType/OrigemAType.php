<?php

namespace ans\schemes\CabecalhoTransacaoType;

/**
 * Class representing OrigemAType
 */
class OrigemAType
{

    /**
     * @property
     * \ans\schemes\CabecalhoTransacaoType\OrigemAType\IdentificacaoPrestadorAType
     * $identificacaoPrestador
     */
    private $identificacaoPrestador = null;

    /**
     * @property string $registroANS
     */
    private $registroANS = null;

    /**
     * Gets as identificacaoPrestador
     *
     * @return
     * \ans\schemes\CabecalhoTransacaoType\OrigemAType\IdentificacaoPrestadorAType
     */
    public function getIdentificacaoPrestador()
    {
        return $this->identificacaoPrestador;
    }

    /**
     * Sets a new identificacaoPrestador
     *
     * @param
     * \ans\schemes\CabecalhoTransacaoType\OrigemAType\IdentificacaoPrestadorAType
     * $identificacaoPrestador
     * @return self
     */
    public function setIdentificacaoPrestador(\ans\schemes\CabecalhoTransacaoType\OrigemAType\IdentificacaoPrestadorAType $identificacaoPrestador)
    {
        $this->identificacaoPrestador = $identificacaoPrestador;
        return $this;
    }

    /**
     * Gets as registroANS
     *
     * @return string
     */
    public function getRegistroANS()
    {
        return $this->registroANS;
    }

    /**
     * Sets a new registroANS
     *
     * @param string $registroANS
     * @return self
     */
    public function setRegistroANS($registroANS)
    {
        $this->registroANS = $registroANS;
        return $this;
    }


}

