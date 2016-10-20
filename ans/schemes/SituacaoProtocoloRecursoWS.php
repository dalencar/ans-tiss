<?php

namespace ans\schemes;

/**
 * Class representing SituacaoProtocoloRecursoWS
 */
class SituacaoProtocoloRecursoWS
{

    /**
     * @property \ans\schemes\CabecalhoTransacaoType $cabecalho
     */
    private $cabecalho = null;

    /**
     * @property \ans\schemes\CtRespostaGlosaType $situacaoProtocoloRecurso
     */
    private $situacaoProtocoloRecurso = null;

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
     * Gets as situacaoProtocoloRecurso
     *
     * @return \ans\schemes\CtRespostaGlosaType
     */
    public function getSituacaoProtocoloRecurso()
    {
        return $this->situacaoProtocoloRecurso;
    }

    /**
     * Sets a new situacaoProtocoloRecurso
     *
     * @param \ans\schemes\CtRespostaGlosaType $situacaoProtocoloRecurso
     * @return self
     */
    public function setSituacaoProtocoloRecurso(\ans\schemes\CtRespostaGlosaType $situacaoProtocoloRecurso)
    {
        $this->situacaoProtocoloRecurso = $situacaoProtocoloRecurso;
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

