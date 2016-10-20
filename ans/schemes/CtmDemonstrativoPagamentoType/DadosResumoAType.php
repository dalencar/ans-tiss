<?php

namespace ans\schemes\CtmDemonstrativoPagamentoType;

/**
 * Class representing DadosResumoAType
 */
class DadosResumoAType
{

    /**
     * @property \ans\schemes\CtDadosResumoDemonstrativoType $relacaoProtocolos
     */
    private $relacaoProtocolos = null;

    /**
     * Gets as relacaoProtocolos
     *
     * @return \ans\schemes\CtDadosResumoDemonstrativoType
     */
    public function getRelacaoProtocolos()
    {
        return $this->relacaoProtocolos;
    }

    /**
     * Sets a new relacaoProtocolos
     *
     * @param \ans\schemes\CtDadosResumoDemonstrativoType $relacaoProtocolos
     * @return self
     */
    public function setRelacaoProtocolos(\ans\schemes\CtDadosResumoDemonstrativoType $relacaoProtocolos)
    {
        $this->relacaoProtocolos = $relacaoProtocolos;
        return $this;
    }


}

