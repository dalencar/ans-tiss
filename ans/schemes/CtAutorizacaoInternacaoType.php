<?php

namespace ans\schemes;

/**
 * Class representing CtAutorizacaoInternacaoType
 *
 *
 * XSD Type: ct_autorizacaoInternacao
 */
class CtAutorizacaoInternacaoType
{

    /**
     * @property string $numeroGuiaOperadora
     */
    private $numeroGuiaOperadora = null;

    /**
     * @property \DateTime $dataAutorizacao
     */
    private $dataAutorizacao = null;

    /**
     * @property string $senha
     */
    private $senha = null;

    /**
     * @property \DateTime $dataValidadeSenha
     */
    private $dataValidadeSenha = null;

    /**
     * Gets as numeroGuiaOperadora
     *
     * @return string
     */
    public function getNumeroGuiaOperadora()
    {
        return $this->numeroGuiaOperadora;
    }

    /**
     * Sets a new numeroGuiaOperadora
     *
     * @param string $numeroGuiaOperadora
     * @return self
     */
    public function setNumeroGuiaOperadora($numeroGuiaOperadora)
    {
        $this->numeroGuiaOperadora = $numeroGuiaOperadora;
        return $this;
    }

    /**
     * Gets as dataAutorizacao
     *
     * @return \DateTime
     */
    public function getDataAutorizacao()
    {
        return $this->dataAutorizacao;
    }

    /**
     * Sets a new dataAutorizacao
     *
     * @param \DateTime $dataAutorizacao
     * @return self
     */
    public function setDataAutorizacao(\DateTime $dataAutorizacao)
    {
        $this->dataAutorizacao = $dataAutorizacao;
        return $this;
    }

    /**
     * Gets as senha
     *
     * @return string
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Sets a new senha
     *
     * @param string $senha
     * @return self
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
        return $this;
    }

    /**
     * Gets as dataValidadeSenha
     *
     * @return \DateTime
     */
    public function getDataValidadeSenha()
    {
        return $this->dataValidadeSenha;
    }

    /**
     * Sets a new dataValidadeSenha
     *
     * @param \DateTime $dataValidadeSenha
     * @return self
     */
    public function setDataValidadeSenha(\DateTime $dataValidadeSenha)
    {
        $this->dataValidadeSenha = $dataValidadeSenha;
        return $this;
    }


}

