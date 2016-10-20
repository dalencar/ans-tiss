<?php

namespace ans\schemes;

/**
 * Class representing CtoAnexoSituacaoInicialType
 *
 *
 * XSD Type: cto_anexoSituacaoInicial
 */
class CtoAnexoSituacaoInicialType
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
     * @property string $nomeBeneficiario
     */
    private $nomeBeneficiario = null;

    /**
     * @property string $numeroCarteira
     */
    private $numeroCarteira = null;

    /**
     * @property \ans\schemes\CtoAnexoSituacaoInicialType\CtSituacaoInicialAType
     * $ctSituacaoInicial
     */
    private $ctSituacaoInicial = null;

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
     * Gets as nomeBeneficiario
     *
     * @return string
     */
    public function getNomeBeneficiario()
    {
        return $this->nomeBeneficiario;
    }

    /**
     * Sets a new nomeBeneficiario
     *
     * @param string $nomeBeneficiario
     * @return self
     */
    public function setNomeBeneficiario($nomeBeneficiario)
    {
        $this->nomeBeneficiario = $nomeBeneficiario;
        return $this;
    }

    /**
     * Gets as numeroCarteira
     *
     * @return string
     */
    public function getNumeroCarteira()
    {
        return $this->numeroCarteira;
    }

    /**
     * Sets a new numeroCarteira
     *
     * @param string $numeroCarteira
     * @return self
     */
    public function setNumeroCarteira($numeroCarteira)
    {
        $this->numeroCarteira = $numeroCarteira;
        return $this;
    }

    /**
     * Gets as ctSituacaoInicial
     *
     * @return \ans\schemes\CtoAnexoSituacaoInicialType\CtSituacaoInicialAType
     */
    public function getCtSituacaoInicial()
    {
        return $this->ctSituacaoInicial;
    }

    /**
     * Sets a new ctSituacaoInicial
     *
     * @param \ans\schemes\CtoAnexoSituacaoInicialType\CtSituacaoInicialAType
     * $ctSituacaoInicial
     * @return self
     */
    public function setCtSituacaoInicial(\ans\schemes\CtoAnexoSituacaoInicialType\CtSituacaoInicialAType $ctSituacaoInicial)
    {
        $this->ctSituacaoInicial = $ctSituacaoInicial;
        return $this;
    }


}

