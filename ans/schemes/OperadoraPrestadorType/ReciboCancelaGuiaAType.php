<?php

namespace ans\schemes\OperadoraPrestadorType;

/**
 * Class representing ReciboCancelaGuiaAType
 */
class ReciboCancelaGuiaAType
{

    /**
     * @property \ans\schemes\CtMotivoGlosaType $mensagemErro
     */
    private $mensagemErro = null;

    /**
     * @property \ans\schemes\CtGuiaCancelamentoReciboType $reciboCancelaGuia
     */
    private $reciboCancelaGuia = null;

    /**
     * Gets as mensagemErro
     *
     * @return \ans\schemes\CtMotivoGlosaType
     */
    public function getMensagemErro()
    {
        return $this->mensagemErro;
    }

    /**
     * Sets a new mensagemErro
     *
     * @param \ans\schemes\CtMotivoGlosaType $mensagemErro
     * @return self
     */
    public function setMensagemErro(\ans\schemes\CtMotivoGlosaType $mensagemErro)
    {
        $this->mensagemErro = $mensagemErro;
        return $this;
    }

    /**
     * Gets as reciboCancelaGuia
     *
     * @return \ans\schemes\CtGuiaCancelamentoReciboType
     */
    public function getReciboCancelaGuia()
    {
        return $this->reciboCancelaGuia;
    }

    /**
     * Sets a new reciboCancelaGuia
     *
     * @param \ans\schemes\CtGuiaCancelamentoReciboType $reciboCancelaGuia
     * @return self
     */
    public function setReciboCancelaGuia(\ans\schemes\CtGuiaCancelamentoReciboType $reciboCancelaGuia)
    {
        $this->reciboCancelaGuia = $reciboCancelaGuia;
        return $this;
    }


}

