<?php

namespace ans\schemes;

/**
 * Class representing PedidoElegibilidadeWS
 */
class PedidoElegibilidadeWS
{

    /**
     * @property \ans\schemes\CabecalhoTransacaoType $cabecalho
     */
    private $cabecalho = null;

    /**
     * @property \ans\schemes\CtElegibilidadeVerificaType $pedidoElegibilidade
     */
    private $pedidoElegibilidade = null;

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
     * Gets as pedidoElegibilidade
     *
     * @return \ans\schemes\CtElegibilidadeVerificaType
     */
    public function getPedidoElegibilidade()
    {
        return $this->pedidoElegibilidade;
    }

    /**
     * Sets a new pedidoElegibilidade
     *
     * @param \ans\schemes\CtElegibilidadeVerificaType $pedidoElegibilidade
     * @return self
     */
    public function setPedidoElegibilidade(\ans\schemes\CtElegibilidadeVerificaType $pedidoElegibilidade)
    {
        $this->pedidoElegibilidade = $pedidoElegibilidade;
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

