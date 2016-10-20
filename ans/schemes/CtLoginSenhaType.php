<?php

namespace ans\schemes;

/**
 * Class representing CtLoginSenhaType
 *
 *
 * XSD Type: ct_loginSenha
 */
class CtLoginSenhaType
{

    /**
     * @property string $loginPrestador
     */
    private $loginPrestador = null;

    /**
     * @property string $senhaPrestador
     */
    private $senhaPrestador = null;

    /**
     * Gets as loginPrestador
     *
     * @return string
     */
    public function getLoginPrestador()
    {
        return $this->loginPrestador;
    }

    /**
     * Sets a new loginPrestador
     *
     * @param string $loginPrestador
     * @return self
     */
    public function setLoginPrestador($loginPrestador)
    {
        $this->loginPrestador = $loginPrestador;
        return $this;
    }

    /**
     * Gets as senhaPrestador
     *
     * @return string
     */
    public function getSenhaPrestador()
    {
        return $this->senhaPrestador;
    }

    /**
     * Sets a new senhaPrestador
     *
     * @param string $senhaPrestador
     * @return self
     */
    public function setSenhaPrestador($senhaPrestador)
    {
        $this->senhaPrestador = $senhaPrestador;
        return $this;
    }


}

