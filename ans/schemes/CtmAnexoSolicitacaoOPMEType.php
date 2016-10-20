<?php

namespace ans\schemes;

/**
 * Class representing CtmAnexoSolicitacaoOPMEType
 *
 *
 * XSD Type: ctm_anexoSolicitacaoOPME
 */
class CtmAnexoSolicitacaoOPMEType
{

    /**
     * @property \ans\schemes\CtAnexoCabecalhoType $cabecalhoAnexo
     */
    private $cabecalhoAnexo = null;

    /**
     * @property \ans\schemes\CtBeneficiarioDadosType $dadosBeneficiario
     */
    private $dadosBeneficiario = null;

    /**
     * @property \ans\schemes\CtmAnexoSolicitanteType $profissionalSolicitante
     */
    private $profissionalSolicitante = null;

    /**
     * @property string $justificativaTecnica
     */
    private $justificativaTecnica = null;

    /**
     * @property string $especificacaoMaterial
     */
    private $especificacaoMaterial = null;

    /**
     * @property
     * \ans\schemes\CtmAnexoSolicitacaoOPMEType\OpmeSolicitadasAType\OpmeSolicitadaAType[]
     * $opmeSolicitadas
     */
    private $opmeSolicitadas = null;

    /**
     * @property string $observacao
     */
    private $observacao = null;

    /**
     * Gets as cabecalhoAnexo
     *
     * @return \ans\schemes\CtAnexoCabecalhoType
     */
    public function getCabecalhoAnexo()
    {
        return $this->cabecalhoAnexo;
    }

    /**
     * Sets a new cabecalhoAnexo
     *
     * @param \ans\schemes\CtAnexoCabecalhoType $cabecalhoAnexo
     * @return self
     */
    public function setCabecalhoAnexo(\ans\schemes\CtAnexoCabecalhoType $cabecalhoAnexo)
    {
        $this->cabecalhoAnexo = $cabecalhoAnexo;
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
     * Gets as profissionalSolicitante
     *
     * @return \ans\schemes\CtmAnexoSolicitanteType
     */
    public function getProfissionalSolicitante()
    {
        return $this->profissionalSolicitante;
    }

    /**
     * Sets a new profissionalSolicitante
     *
     * @param \ans\schemes\CtmAnexoSolicitanteType $profissionalSolicitante
     * @return self
     */
    public function setProfissionalSolicitante(\ans\schemes\CtmAnexoSolicitanteType $profissionalSolicitante)
    {
        $this->profissionalSolicitante = $profissionalSolicitante;
        return $this;
    }

    /**
     * Gets as justificativaTecnica
     *
     * @return string
     */
    public function getJustificativaTecnica()
    {
        return $this->justificativaTecnica;
    }

    /**
     * Sets a new justificativaTecnica
     *
     * @param string $justificativaTecnica
     * @return self
     */
    public function setJustificativaTecnica($justificativaTecnica)
    {
        $this->justificativaTecnica = $justificativaTecnica;
        return $this;
    }

    /**
     * Gets as especificacaoMaterial
     *
     * @return string
     */
    public function getEspecificacaoMaterial()
    {
        return $this->especificacaoMaterial;
    }

    /**
     * Sets a new especificacaoMaterial
     *
     * @param string $especificacaoMaterial
     * @return self
     */
    public function setEspecificacaoMaterial($especificacaoMaterial)
    {
        $this->especificacaoMaterial = $especificacaoMaterial;
        return $this;
    }

    /**
     * Adds as opmeSolicitada
     *
     * @return self
     * @param
     * \ans\schemes\CtmAnexoSolicitacaoOPMEType\OpmeSolicitadasAType\OpmeSolicitadaAType
     * $opmeSolicitada
     */
    public function addToOpmeSolicitadas(\ans\schemes\CtmAnexoSolicitacaoOPMEType\OpmeSolicitadasAType\OpmeSolicitadaAType $opmeSolicitada)
    {
        $this->opmeSolicitadas[] = $opmeSolicitada;
        return $this;
    }

    /**
     * isset opmeSolicitadas
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOpmeSolicitadas($index)
    {
        return isset($this->opmeSolicitadas[$index]);
    }

    /**
     * unset opmeSolicitadas
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOpmeSolicitadas($index)
    {
        unset($this->opmeSolicitadas[$index]);
    }

    /**
     * Gets as opmeSolicitadas
     *
     * @return
     * \ans\schemes\CtmAnexoSolicitacaoOPMEType\OpmeSolicitadasAType\OpmeSolicitadaAType[]
     */
    public function getOpmeSolicitadas()
    {
        return $this->opmeSolicitadas;
    }

    /**
     * Sets a new opmeSolicitadas
     *
     * @param
     * \ans\schemes\CtmAnexoSolicitacaoOPMEType\OpmeSolicitadasAType\OpmeSolicitadaAType[]
     * $opmeSolicitadas
     * @return self
     */
    public function setOpmeSolicitadas(array $opmeSolicitadas)
    {
        $this->opmeSolicitadas = $opmeSolicitadas;
        return $this;
    }

    /**
     * Gets as observacao
     *
     * @return string
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * Sets a new observacao
     *
     * @param string $observacao
     * @return self
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;
        return $this;
    }


}

