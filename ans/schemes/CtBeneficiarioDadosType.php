<?php

namespace ans\schemes;

/**
 * Class representing CtBeneficiarioDadosType
 *
 *
 * XSD Type: ct_beneficiarioDados
 */
class CtBeneficiarioDadosType
{

    /**
     * @property string $numeroCarteira
     */
    private $numeroCarteira = null;

    /**
     * @property string $atendimentoRN
     */
    private $atendimentoRN = null;

    /**
     * @property string $nomeBeneficiario
     */
    private $nomeBeneficiario = null;

    /**
     * @property string $numeroCNS
     */
    private $numeroCNS = null;

    /**
     * @property mixed $identificadorBeneficiario
     */
    private $identificadorBeneficiario = null;

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
     * Gets as atendimentoRN
     *
     * @return string
     */
    public function getAtendimentoRN()
    {
        return $this->atendimentoRN;
    }

    /**
     * Sets a new atendimentoRN
     *
     * @param string $atendimentoRN
     * @return self
     */
    public function setAtendimentoRN($atendimentoRN)
    {
        $this->atendimentoRN = $atendimentoRN;
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
     * Gets as numeroCNS
     *
     * @return string
     */
    public function getNumeroCNS()
    {
        return $this->numeroCNS;
    }

    /**
     * Sets a new numeroCNS
     *
     * @param string $numeroCNS
     * @return self
     */
    public function setNumeroCNS($numeroCNS)
    {
        $this->numeroCNS = $numeroCNS;
        return $this;
    }

    /**
     * Gets as identificadorBeneficiario
     *
     * @return mixed
     */
    public function getIdentificadorBeneficiario()
    {
        return $this->identificadorBeneficiario;
    }

    /**
     * Sets a new identificadorBeneficiario
     *
     * @param mixed $identificadorBeneficiario
     * @return self
     */
    public function setIdentificadorBeneficiario($identificadorBeneficiario)
    {
        $this->identificadorBeneficiario = $identificadorBeneficiario;
        return $this;
    }


}

