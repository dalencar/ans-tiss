<?php

namespace ans\schemes;

/**
 * Class representing CabecalhoTransacaoType
 *
 *
 * XSD Type: cabecalhoTransacao
 */
class CabecalhoTransacaoType
{

    /**
     * @property \ans\schemes\CabecalhoTransacaoType\IdentificacaoTransacaoAType
     * $identificacaoTransacao
     */
    private $identificacaoTransacao = null;

    /**
     * @property string $falhaNegocio
     */
    private $falhaNegocio = null;

    /**
     * @property \ans\schemes\CabecalhoTransacaoType\OrigemAType $origem
     */
    private $origem = null;

    /**
     * @property \ans\schemes\CabecalhoTransacaoType\DestinoAType $destino
     */
    private $destino = null;

    /**
     * @property string $versaoPadrao
     */
    private $versaoPadrao = null;

    /**
     * @property \ans\schemes\AssinaturaDigitalType $assinaturaDigital
     */
    private $assinaturaDigital = null;

    /**
     * @property \ans\schemes\CtLoginSenhaType $loginSenhaPrestador
     */
    private $loginSenhaPrestador = null;

    /**
     * Gets as identificacaoTransacao
     *
     * @return \ans\schemes\CabecalhoTransacaoType\IdentificacaoTransacaoAType
     */
    public function getIdentificacaoTransacao()
    {
        return $this->identificacaoTransacao;
    }

    /**
     * Sets a new identificacaoTransacao
     *
     * @param \ans\schemes\CabecalhoTransacaoType\IdentificacaoTransacaoAType
     * $identificacaoTransacao
     * @return self
     */
    public function setIdentificacaoTransacao(\ans\schemes\CabecalhoTransacaoType\IdentificacaoTransacaoAType $identificacaoTransacao)
    {
        $this->identificacaoTransacao = $identificacaoTransacao;
        return $this;
    }

    /**
     * Gets as falhaNegocio
     *
     * @return string
     */
    public function getFalhaNegocio()
    {
        return $this->falhaNegocio;
    }

    /**
     * Sets a new falhaNegocio
     *
     * @param string $falhaNegocio
     * @return self
     */
    public function setFalhaNegocio($falhaNegocio)
    {
        $this->falhaNegocio = $falhaNegocio;
        return $this;
    }

    /**
     * Gets as origem
     *
     * @return \ans\schemes\CabecalhoTransacaoType\OrigemAType
     */
    public function getOrigem()
    {
        return $this->origem;
    }

    /**
     * Sets a new origem
     *
     * @param \ans\schemes\CabecalhoTransacaoType\OrigemAType $origem
     * @return self
     */
    public function setOrigem(\ans\schemes\CabecalhoTransacaoType\OrigemAType $origem)
    {
        $this->origem = $origem;
        return $this;
    }

    /**
     * Gets as destino
     *
     * @return \ans\schemes\CabecalhoTransacaoType\DestinoAType
     */
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * Sets a new destino
     *
     * @param \ans\schemes\CabecalhoTransacaoType\DestinoAType $destino
     * @return self
     */
    public function setDestino(\ans\schemes\CabecalhoTransacaoType\DestinoAType $destino)
    {
        $this->destino = $destino;
        return $this;
    }

    /**
     * Gets as versaoPadrao
     *
     * @return string
     */
    public function getVersaoPadrao()
    {
        return $this->versaoPadrao;
    }

    /**
     * Sets a new versaoPadrao
     *
     * @param string $versaoPadrao
     * @return self
     */
    public function setVersaoPadrao($versaoPadrao)
    {
        $this->versaoPadrao = $versaoPadrao;
        return $this;
    }

    /**
     * Gets as assinaturaDigital
     *
     * @return \ans\schemes\AssinaturaDigitalType
     */
    public function getAssinaturaDigital()
    {
        return $this->assinaturaDigital;
    }

    /**
     * Sets a new assinaturaDigital
     *
     * @param \ans\schemes\AssinaturaDigitalType $assinaturaDigital
     * @return self
     */
    public function setAssinaturaDigital(\ans\schemes\AssinaturaDigitalType $assinaturaDigital)
    {
        $this->assinaturaDigital = $assinaturaDigital;
        return $this;
    }

    /**
     * Gets as loginSenhaPrestador
     *
     * @return \ans\schemes\CtLoginSenhaType
     */
    public function getLoginSenhaPrestador()
    {
        return $this->loginSenhaPrestador;
    }

    /**
     * Sets a new loginSenhaPrestador
     *
     * @param \ans\schemes\CtLoginSenhaType $loginSenhaPrestador
     * @return self
     */
    public function setLoginSenhaPrestador(\ans\schemes\CtLoginSenhaType $loginSenhaPrestador)
    {
        $this->loginSenhaPrestador = $loginSenhaPrestador;
        return $this;
    }


}

