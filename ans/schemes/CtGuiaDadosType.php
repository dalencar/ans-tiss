<?php

namespace ans\schemes;

/**
 * Class representing CtGuiaDadosType
 *
 *
 * XSD Type: ct_guiaDados
 */
class CtGuiaDadosType
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
     * @property \ans\schemes\CtBeneficiarioDadosType $dadosBeneficiario
     */
    private $dadosBeneficiario = null;

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
     * \ans\schemes\CtGuiaDadosType\ProcedimentosRealizadosAType\ProcedimentoRealizadoAType[]
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
     * Gets as dadosBeneficiario
     *
     * @return \ans\schemes\CtBeneficiarioDadosType
     */
    public function getDadosBeneficiario()
    {
        return $this->dadosBeneficiario;
    }

    /**
     * Sets a new dadosBeneficiario
     *
     * @param \ans\schemes\CtBeneficiarioDadosType $dadosBeneficiario
     * @return self
     */
    public function setDadosBeneficiario(\ans\schemes\CtBeneficiarioDadosType $dadosBeneficiario)
    {
        $this->dadosBeneficiario = $dadosBeneficiario;
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
     * \ans\schemes\CtGuiaDadosType\ProcedimentosRealizadosAType\ProcedimentoRealizadoAType
     * $procedimentoRealizado
     */
    public function addToProcedimentosRealizados(\ans\schemes\CtGuiaDadosType\ProcedimentosRealizadosAType\ProcedimentoRealizadoAType $procedimentoRealizado)
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
     * \ans\schemes\CtGuiaDadosType\ProcedimentosRealizadosAType\ProcedimentoRealizadoAType[]
     */
    public function getProcedimentosRealizados()
    {
        return $this->procedimentosRealizados;
    }

    /**
     * Sets a new procedimentosRealizados
     *
     * @param
     * \ans\schemes\CtGuiaDadosType\ProcedimentosRealizadosAType\ProcedimentoRealizadoAType[]
     * $procedimentosRealizados
     * @return self
     */
    public function setProcedimentosRealizados(array $procedimentosRealizados)
    {
        $this->procedimentosRealizados = $procedimentosRealizados;
        return $this;
    }


}

