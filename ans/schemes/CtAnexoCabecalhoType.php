<?php

namespace ans\schemes;

/**
 * Class representing CtAnexoCabecalhoType
 *
 *
 * XSD Type: ct_anexoCabecalho
 */
class CtAnexoCabecalhoType
{

    /**
     * @property string $registroANS
     */
    private $registroANS = null;

    /**
     * @property string $numeroGuiaAnexo
     */
    private $numeroGuiaAnexo = null;

    /**
     * @property string $numeroGuiaReferenciada
     */
    private $numeroGuiaReferenciada = null;

    /**
     * @property string $numeroGuiaOperadora
     */
    private $numeroGuiaOperadora = null;

    /**
     * @property \DateTime $dataSolicitacao
     */
    private $dataSolicitacao = null;

    /**
     * @property string $senha
     */
    private $senha = null;

    /**
     * @property \DateTime $dataAutorizacao
     */
    private $dataAutorizacao = null;

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

    /**
     * Gets as numeroGuiaAnexo
     *
     * @return string
     */
    public function getNumeroGuiaAnexo()
    {
        return $this->numeroGuiaAnexo;
    }

    /**
     * Sets a new numeroGuiaAnexo
     *
     * @param string $numeroGuiaAnexo
     * @return self
     */
    public function setNumeroGuiaAnexo($numeroGuiaAnexo)
    {
        $this->numeroGuiaAnexo = $numeroGuiaAnexo;
        return $this;
    }

    /**
     * Gets as numeroGuiaReferenciada
     *
     * @return string
     */
    public function getNumeroGuiaReferenciada()
    {
        return $this->numeroGuiaReferenciada;
    }

    /**
     * Sets a new numeroGuiaReferenciada
     *
     * @param string $numeroGuiaReferenciada
     * @return self
     */
    public function setNumeroGuiaReferenciada($numeroGuiaReferenciada)
    {
        $this->numeroGuiaReferenciada = $numeroGuiaReferenciada;
        return $this;
    }

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
     * Gets as dataSolicitacao
     *
     * @return \DateTime
     */
    public function getDataSolicitacao()
    {
        return $this->dataSolicitacao;
    }

    /**
     * Sets a new dataSolicitacao
     *
     * @param \DateTime $dataSolicitacao
     * @return self
     */
    public function setDataSolicitacao(\DateTime $dataSolicitacao)
    {
        $this->dataSolicitacao = $dataSolicitacao;
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


}

