<?php

namespace ans\schemes;

/**
 * Class representing CtGuiaDadosOdontoType
 *
 *
 * XSD Type: ct_guiaDadosOdonto
 */
class CtGuiaDadosOdontoType
{

    /**
     * @property string $numeroGuiaPrestador
     */
    private $numeroGuiaPrestador = null;

    /**
     * @property string $numeroGuiaOperadora
     */
    private $numeroGuiaOperadora = null;

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
     * @property \DateTime $dataRealizacao
     */
    private $dataRealizacao = null;

    /**
     * @property \ans\schemes\CtValorTotalType $vlInformadoGuia
     */
    private $vlInformadoGuia = null;

    /**
     * @property \ans\schemes\CtMotivoGlosaType[] $glosaGuia
     */
    private $glosaGuia = null;

    /**
     * @property
     * \ans\schemes\CtGuiaDadosOdontoType\ProcedimentosRealizadosAType\ProcedimentoRealizadoAType[]
     * $procedimentosRealizados
     */
    private $procedimentosRealizados = null;

    /**
     * Gets as numeroGuiaPrestador
     *
     * @return string
     */
    public function getNumeroGuiaPrestador()
    {
        return $this->numeroGuiaPrestador;
    }

    /**
     * Sets a new numeroGuiaPrestador
     *
     * @param string $numeroGuiaPrestador
     * @return self
     */
    public function setNumeroGuiaPrestador($numeroGuiaPrestador)
    {
        $this->numeroGuiaPrestador = $numeroGuiaPrestador;
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
     * Gets as dataRealizacao
     *
     * @return \DateTime
     */
    public function getDataRealizacao()
    {
        return $this->dataRealizacao;
    }

    /**
     * Sets a new dataRealizacao
     *
     * @param \DateTime $dataRealizacao
     * @return self
     */
    public function setDataRealizacao(\DateTime $dataRealizacao)
    {
        $this->dataRealizacao = $dataRealizacao;
        return $this;
    }

    /**
     * Gets as vlInformadoGuia
     *
     * @return \ans\schemes\CtValorTotalType
     */
    public function getVlInformadoGuia()
    {
        return $this->vlInformadoGuia;
    }

    /**
     * Sets a new vlInformadoGuia
     *
     * @param \ans\schemes\CtValorTotalType $vlInformadoGuia
     * @return self
     */
    public function setVlInformadoGuia(\ans\schemes\CtValorTotalType $vlInformadoGuia)
    {
        $this->vlInformadoGuia = $vlInformadoGuia;
        return $this;
    }

    /**
     * Adds as motivoGlosa
     *
     * @return self
     * @param \ans\schemes\CtMotivoGlosaType $motivoGlosa
     */
    public function addToGlosaGuia(\ans\schemes\CtMotivoGlosaType $motivoGlosa)
    {
        $this->glosaGuia[] = $motivoGlosa;
        return $this;
    }

    /**
     * isset glosaGuia
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGlosaGuia($index)
    {
        return isset($this->glosaGuia[$index]);
    }

    /**
     * unset glosaGuia
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGlosaGuia($index)
    {
        unset($this->glosaGuia[$index]);
    }

    /**
     * Gets as glosaGuia
     *
     * @return \ans\schemes\CtMotivoGlosaType[]
     */
    public function getGlosaGuia()
    {
        return $this->glosaGuia;
    }

    /**
     * Sets a new glosaGuia
     *
     * @param \ans\schemes\CtMotivoGlosaType[] $glosaGuia
     * @return self
     */
    public function setGlosaGuia(array $glosaGuia)
    {
        $this->glosaGuia = $glosaGuia;
        return $this;
    }

    /**
     * Adds as procedimentoRealizado
     *
     * @return self
     * @param
     * \ans\schemes\CtGuiaDadosOdontoType\ProcedimentosRealizadosAType\ProcedimentoRealizadoAType
     * $procedimentoRealizado
     */
    public function addToProcedimentosRealizados(\ans\schemes\CtGuiaDadosOdontoType\ProcedimentosRealizadosAType\ProcedimentoRealizadoAType $procedimentoRealizado)
    {
        $this->procedimentosRealizados[] = $procedimentoRealizado;
        return $this;
    }

    /**
     * isset procedimentosRealizados
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProcedimentosRealizados($index)
    {
        return isset($this->procedimentosRealizados[$index]);
    }

    /**
     * unset procedimentosRealizados
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProcedimentosRealizados($index)
    {
        unset($this->procedimentosRealizados[$index]);
    }

    /**
     * Gets as procedimentosRealizados
     *
     * @return
     * \ans\schemes\CtGuiaDadosOdontoType\ProcedimentosRealizadosAType\ProcedimentoRealizadoAType[]
     */
    public function getProcedimentosRealizados()
    {
        return $this->procedimentosRealizados;
    }

    /**
     * Sets a new procedimentosRealizados
     *
     * @param
     * \ans\schemes\CtGuiaDadosOdontoType\ProcedimentosRealizadosAType\ProcedimentoRealizadoAType[]
     * $procedimentosRealizados
     * @return self
     */
    public function setProcedimentosRealizados(array $procedimentosRealizados)
    {
        $this->procedimentosRealizados = $procedimentosRealizados;
        return $this;
    }


}

