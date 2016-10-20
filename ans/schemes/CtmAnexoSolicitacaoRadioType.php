<?php

namespace ans\schemes;

/**
 * Class representing CtmAnexoSolicitacaoRadioType
 *
 *
 * XSD Type: ctm_anexoSolicitacaoRadio
 */
class CtmAnexoSolicitacaoRadioType
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
     * @property \ans\schemes\CtDadosComplementaresBeneficiarioRadioType
     * $dadosComplementaresBeneficiario
     */
    private $dadosComplementaresBeneficiario = null;

    /**
     * @property \ans\schemes\CtmAnexoSolicitanteType $medicoSolicitante
     */
    private $medicoSolicitante = null;

    /**
     * @property
     * \ans\schemes\CtmAnexoSolicitacaoRadioType\DiagnosticoOncologicoRadioAType
     * $diagnosticoOncologicoRadio
     */
    private $diagnosticoOncologicoRadio = null;

    /**
     * @property \ans\schemes\CtmAnexoSolicitacaoRadioType\TratamentosAnterioresAType
     * $tratamentosAnteriores
     */
    private $tratamentosAnteriores = null;

    /**
     * @property \ans\schemes\CtProcedimentosComplementaresType[]
     * $procedimentosComplementares
     */
    private $procedimentosComplementares = null;

    /**
     * @property integer $numeroCampos
     */
    private $numeroCampos = null;

    /**
     * @property integer $doseCampo
     */
    private $doseCampo = null;

    /**
     * @property integer $doseTotal
     */
    private $doseTotal = null;

    /**
     * @property integer $nrDias
     */
    private $nrDias = null;

    /**
     * @property \DateTime $dtPrevistaInicio
     */
    private $dtPrevistaInicio = null;

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
     * Gets as dadosComplementaresBeneficiario
     *
     * @return \ans\schemes\CtDadosComplementaresBeneficiarioRadioType
     */
    public function getDadosComplementaresBeneficiario()
    {
        return $this->dadosComplementaresBeneficiario;
    }

    /**
     * Sets a new dadosComplementaresBeneficiario
     *
     * @param \ans\schemes\CtDadosComplementaresBeneficiarioRadioType
     * $dadosComplementaresBeneficiario
     * @return self
     */
    public function setDadosComplementaresBeneficiario(\ans\schemes\CtDadosComplementaresBeneficiarioRadioType $dadosComplementaresBeneficiario)
    {
        $this->dadosComplementaresBeneficiario = $dadosComplementaresBeneficiario;
        return $this;
    }

    /**
     * Gets as medicoSolicitante
     *
     * @return \ans\schemes\CtmAnexoSolicitanteType
     */
    public function getMedicoSolicitante()
    {
        return $this->medicoSolicitante;
    }

    /**
     * Sets a new medicoSolicitante
     *
     * @param \ans\schemes\CtmAnexoSolicitanteType $medicoSolicitante
     * @return self
     */
    public function setMedicoSolicitante(\ans\schemes\CtmAnexoSolicitanteType $medicoSolicitante)
    {
        $this->medicoSolicitante = $medicoSolicitante;
        return $this;
    }

    /**
     * Gets as diagnosticoOncologicoRadio
     *
     * @return
     * \ans\schemes\CtmAnexoSolicitacaoRadioType\DiagnosticoOncologicoRadioAType
     */
    public function getDiagnosticoOncologicoRadio()
    {
        return $this->diagnosticoOncologicoRadio;
    }

    /**
     * Sets a new diagnosticoOncologicoRadio
     *
     * @param \ans\schemes\CtmAnexoSolicitacaoRadioType\DiagnosticoOncologicoRadioAType
     * $diagnosticoOncologicoRadio
     * @return self
     */
    public function setDiagnosticoOncologicoRadio(\ans\schemes\CtmAnexoSolicitacaoRadioType\DiagnosticoOncologicoRadioAType $diagnosticoOncologicoRadio)
    {
        $this->diagnosticoOncologicoRadio = $diagnosticoOncologicoRadio;
        return $this;
    }

    /**
     * Gets as tratamentosAnteriores
     *
     * @return \ans\schemes\CtmAnexoSolicitacaoRadioType\TratamentosAnterioresAType
     */
    public function getTratamentosAnteriores()
    {
        return $this->tratamentosAnteriores;
    }

    /**
     * Sets a new tratamentosAnteriores
     *
     * @param \ans\schemes\CtmAnexoSolicitacaoRadioType\TratamentosAnterioresAType
     * $tratamentosAnteriores
     * @return self
     */
    public function setTratamentosAnteriores(\ans\schemes\CtmAnexoSolicitacaoRadioType\TratamentosAnterioresAType $tratamentosAnteriores)
    {
        $this->tratamentosAnteriores = $tratamentosAnteriores;
        return $this;
    }

    /**
     * Adds as procedimentoComplementar
     *
     * @return self
     * @param \ans\schemes\CtProcedimentosComplementaresType $procedimentoComplementar
     */
    public function addToProcedimentosComplementares(\ans\schemes\CtProcedimentosComplementaresType $procedimentoComplementar)
    {
        $this->procedimentosComplementares[] = $procedimentoComplementar;
        return $this;
    }

    /**
     * isset procedimentosComplementares
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProcedimentosComplementares($index)
    {
        return isset($this->procedimentosComplementares[$index]);
    }

    /**
     * unset procedimentosComplementares
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProcedimentosComplementares($index)
    {
        unset($this->procedimentosComplementares[$index]);
    }

    /**
     * Gets as procedimentosComplementares
     *
     * @return \ans\schemes\CtProcedimentosComplementaresType[]
     */
    public function getProcedimentosComplementares()
    {
        return $this->procedimentosComplementares;
    }

    /**
     * Sets a new procedimentosComplementares
     *
     * @param \ans\schemes\CtProcedimentosComplementaresType[]
     * $procedimentosComplementares
     * @return self
     */
    public function setProcedimentosComplementares(array $procedimentosComplementares)
    {
        $this->procedimentosComplementares = $procedimentosComplementares;
        return $this;
    }

    /**
     * Gets as numeroCampos
     *
     * @return integer
     */
    public function getNumeroCampos()
    {
        return $this->numeroCampos;
    }

    /**
     * Sets a new numeroCampos
     *
     * @param integer $numeroCampos
     * @return self
     */
    public function setNumeroCampos($numeroCampos)
    {
        $this->numeroCampos = $numeroCampos;
        return $this;
    }

    /**
     * Gets as doseCampo
     *
     * @return integer
     */
    public function getDoseCampo()
    {
        return $this->doseCampo;
    }

    /**
     * Sets a new doseCampo
     *
     * @param integer $doseCampo
     * @return self
     */
    public function setDoseCampo($doseCampo)
    {
        $this->doseCampo = $doseCampo;
        return $this;
    }

    /**
     * Gets as doseTotal
     *
     * @return integer
     */
    public function getDoseTotal()
    {
        return $this->doseTotal;
    }

    /**
     * Sets a new doseTotal
     *
     * @param integer $doseTotal
     * @return self
     */
    public function setDoseTotal($doseTotal)
    {
        $this->doseTotal = $doseTotal;
        return $this;
    }

    /**
     * Gets as nrDias
     *
     * @return integer
     */
    public function getNrDias()
    {
        return $this->nrDias;
    }

    /**
     * Sets a new nrDias
     *
     * @param integer $nrDias
     * @return self
     */
    public function setNrDias($nrDias)
    {
        $this->nrDias = $nrDias;
        return $this;
    }

    /**
     * Gets as dtPrevistaInicio
     *
     * @return \DateTime
     */
    public function getDtPrevistaInicio()
    {
        return $this->dtPrevistaInicio;
    }

    /**
     * Sets a new dtPrevistaInicio
     *
     * @param \DateTime $dtPrevistaInicio
     * @return self
     */
    public function setDtPrevistaInicio(\DateTime $dtPrevistaInicio)
    {
        $this->dtPrevistaInicio = $dtPrevistaInicio;
        return $this;
    }


}

