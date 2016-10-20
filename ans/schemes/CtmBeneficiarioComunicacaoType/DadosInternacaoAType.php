<?php

namespace ans\schemes\CtmBeneficiarioComunicacaoType;

/**
 * Class representing DadosInternacaoAType
 */
class DadosInternacaoAType
{

    /**
     * @property string $motivoEncerramento
     */
    private $motivoEncerramento = null;

    /**
     * @property string $tipoInternacao
     */
    private $tipoInternacao = null;

    /**
     * Gets as motivoEncerramento
     *
     * @return string
     */
    public function getMotivoEncerramento()
    {
        return $this->motivoEncerramento;
    }

    /**
     * Sets a new motivoEncerramento
     *
     * @param string $motivoEncerramento
     * @return self
     */
    public function setMotivoEncerramento($motivoEncerramento)
    {
        $this->motivoEncerramento = $motivoEncerramento;
        return $this;
    }

    /**
     * Gets as tipoInternacao
     *
     * @return string
     */
    public function getTipoInternacao()
    {
        return $this->tipoInternacao;
    }

    /**
     * Sets a new tipoInternacao
     *
     * @param string $tipoInternacao
     * @return self
     */
    public function setTipoInternacao($tipoInternacao)
    {
        $this->tipoInternacao = $tipoInternacao;
        return $this;
    }


}

