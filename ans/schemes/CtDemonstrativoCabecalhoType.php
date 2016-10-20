<?php

namespace ans\schemes;

/**
 * Class representing CtDemonstrativoCabecalhoType
 *
 *
 * XSD Type: ct_demonstrativoCabecalho
 */
class CtDemonstrativoCabecalhoType
{

    /**
     * @property string $registroANS
     */
    private $registroANS = null;

    /**
     * @property string $numeroDemonstrativo
     */
    private $numeroDemonstrativo = null;

    /**
     * @property string $nomeOperadora
     */
    private $nomeOperadora = null;

    /**
     * @property string $numeroCNPJ
     */
    private $numeroCNPJ = null;

    /**
     * @property \DateTime $dataEmissao
     */
    private $dataEmissao = null;

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
     * Gets as numeroDemonstrativo
     *
     * @return string
     */
    public function getNumeroDemonstrativo()
    {
        return $this->numeroDemonstrativo;
    }

    /**
     * Sets a new numeroDemonstrativo
     *
     * @param string $numeroDemonstrativo
     * @return self
     */
    public function setNumeroDemonstrativo($numeroDemonstrativo)
    {
        $this->numeroDemonstrativo = $numeroDemonstrativo;
        return $this;
    }

    /**
     * Gets as nomeOperadora
     *
     * @return string
     */
    public function getNomeOperadora()
    {
        return $this->nomeOperadora;
    }

    /**
     * Sets a new nomeOperadora
     *
     * @param string $nomeOperadora
     * @return self
     */
    public function setNomeOperadora($nomeOperadora)
    {
        $this->nomeOperadora = $nomeOperadora;
        return $this;
    }

    /**
     * Gets as numeroCNPJ
     *
     * @return string
     */
    public function getNumeroCNPJ()
    {
        return $this->numeroCNPJ;
    }

    /**
     * Sets a new numeroCNPJ
     *
     * @param string $numeroCNPJ
     * @return self
     */
    public function setNumeroCNPJ($numeroCNPJ)
    {
        $this->numeroCNPJ = $numeroCNPJ;
        return $this;
    }

    /**
     * Gets as dataEmissao
     *
     * @return \DateTime
     */
    public function getDataEmissao()
    {
        return $this->dataEmissao;
    }

    /**
     * Sets a new dataEmissao
     *
     * @param \DateTime $dataEmissao
     * @return self
     */
    public function setDataEmissao(\DateTime $dataEmissao)
    {
        $this->dataEmissao = $dataEmissao;
        return $this;
    }


}

