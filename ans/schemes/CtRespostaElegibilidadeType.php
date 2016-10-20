<?php

namespace ans\schemes;

/**
 * Class representing CtRespostaElegibilidadeType
 *
 *
 * XSD Type: ct_respostaElegibilidade
 */
class CtRespostaElegibilidadeType
{

    /**
     * @property \ans\schemes\CtMotivoGlosaType $mensagemErro
     */
    private $mensagemErro = null;

    /**
     * @property \ans\schemes\CtElegibilidadeReciboType $reciboElegibilidade
     */
    private $reciboElegibilidade = null;

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
     * Gets as reciboElegibilidade
     *
     * @return \ans\schemes\CtElegibilidadeReciboType
     */
    public function getReciboElegibilidade()
    {
        return $this->reciboElegibilidade;
    }

    /**
     * Sets a new reciboElegibilidade
     *
     * @param \ans\schemes\CtElegibilidadeReciboType $reciboElegibilidade
     * @return self
     */
    public function setReciboElegibilidade(\ans\schemes\CtElegibilidadeReciboType $reciboElegibilidade)
    {
        $this->reciboElegibilidade = $reciboElegibilidade;
        return $this;
    }


}

