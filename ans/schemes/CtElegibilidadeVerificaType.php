<?php

namespace ans\schemes;

/**
 * Class representing CtElegibilidadeVerificaType
 *
 *
 * XSD Type: ct_elegibilidadeVerifica
 */
class CtElegibilidadeVerificaType
{

    /**
     * @property \ans\schemes\CtContratadoDadosType $dadosPrestador
     */
    private $dadosPrestador = null;

    /**
     * @property string $numeroCarteira
     */
    private $numeroCarteira = null;

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
     * @property \DateTime $validadeCarteira
     */
    private $validadeCarteira = null;

    /**
     * Gets as dadosPrestador
     *
     * @return \ans\schemes\CtContratadoDadosType
     */
    public function getDadosPrestador()
    {
        return $this->dadosPrestador;
    }

    /**
     * Sets a new dadosPrestador
     *
     * @param \ans\schemes\CtContratadoDadosType $dadosPrestador
     * @return self
     */
    public function setDadosPrestador(\ans\schemes\CtContratadoDadosType $dadosPrestador)
    {
        $this->dadosPrestador = $dadosPrestador;
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

    /**
     * Gets as validadeCarteira
     *
     * @return \DateTime
     */
    public function getValidadeCarteira()
    {
        return $this->validadeCarteira;
    }

    /**
     * Sets a new validadeCarteira
     *
     * @param \DateTime $validadeCarteira
     * @return self
     */
    public function setValidadeCarteira(\DateTime $validadeCarteira)
    {
        $this->validadeCarteira = $validadeCarteira;
        return $this;
    }


}

