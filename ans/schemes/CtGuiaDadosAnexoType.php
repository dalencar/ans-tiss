<?php

namespace ans\schemes;

/**
 * Class representing CtGuiaDadosAnexoType
 *
 *
 * XSD Type: ct_guiaDadosAnexo
 */
class CtGuiaDadosAnexoType
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
     * @property \DateTime $dataEmissaoSolicitacaoAnexo
     */
    private $dataEmissaoSolicitacaoAnexo = null;

    /**
     * @property \ans\schemes\CtValorTotalType $vlInformadoGuia
     */
    private $vlInformadoGuia = null;

    /**
     * @property \ans\schemes\CtGuiaDadosAnexoType\GlosaAnexoAType $glosaAnexo
     */
    private $glosaAnexo = null;

    /**
     * @property
     * \ans\schemes\CtGuiaDadosAnexoType\ProcedimentosSolicitadosAType\ProcedimentoSolicitadoAType[]
     * $procedimentosSolicitados
     */
    private $procedimentosSolicitados = null;

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
     * Gets as dataEmissaoSolicitacaoAnexo
     *
     * @return \DateTime
     */
    public function getDataEmissaoSolicitacaoAnexo()
    {
        return $this->dataEmissaoSolicitacaoAnexo;
    }

    /**
     * Sets a new dataEmissaoSolicitacaoAnexo
     *
     * @param \DateTime $dataEmissaoSolicitacaoAnexo
     * @return self
     */
    public function setDataEmissaoSolicitacaoAnexo(\DateTime $dataEmissaoSolicitacaoAnexo)
    {
        $this->dataEmissaoSolicitacaoAnexo = $dataEmissaoSolicitacaoAnexo;
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
     * Gets as glosaAnexo
     *
     * @return \ans\schemes\CtGuiaDadosAnexoType\GlosaAnexoAType
     */
    public function getGlosaAnexo()
    {
        return $this->glosaAnexo;
    }

    /**
     * Sets a new glosaAnexo
     *
     * @param \ans\schemes\CtGuiaDadosAnexoType\GlosaAnexoAType $glosaAnexo
     * @return self
     */
    public function setGlosaAnexo(\ans\schemes\CtGuiaDadosAnexoType\GlosaAnexoAType $glosaAnexo)
    {
        $this->glosaAnexo = $glosaAnexo;
        return $this;
    }

    /**
     * Adds as procedimentoSolicitado
     *
     * @return self
     * @param
     * \ans\schemes\CtGuiaDadosAnexoType\ProcedimentosSolicitadosAType\ProcedimentoSolicitadoAType
     * $procedimentoSolicitado
     */
    public function addToProcedimentosSolicitados(\ans\schemes\CtGuiaDadosAnexoType\ProcedimentosSolicitadosAType\ProcedimentoSolicitadoAType $procedimentoSolicitado)
    {
        $this->procedimentosSolicitados[] = $procedimentoSolicitado;
        return $this;
    }

    /**
     * isset procedimentosSolicitados
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProcedimentosSolicitados($index)
    {
        return isset($this->procedimentosSolicitados[$index]);
    }

    /**
     * unset procedimentosSolicitados
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProcedimentosSolicitados($index)
    {
        unset($this->procedimentosSolicitados[$index]);
    }

    /**
     * Gets as procedimentosSolicitados
     *
     * @return
     * \ans\schemes\CtGuiaDadosAnexoType\ProcedimentosSolicitadosAType\ProcedimentoSolicitadoAType[]
     */
    public function getProcedimentosSolicitados()
    {
        return $this->procedimentosSolicitados;
    }

    /**
     * Sets a new procedimentosSolicitados
     *
     * @param
     * \ans\schemes\CtGuiaDadosAnexoType\ProcedimentosSolicitadosAType\ProcedimentoSolicitadoAType[]
     * $procedimentosSolicitados
     * @return self
     */
    public function setProcedimentosSolicitados(array $procedimentosSolicitados)
    {
        $this->procedimentosSolicitados = $procedimentosSolicitados;
        return $this;
    }


}

