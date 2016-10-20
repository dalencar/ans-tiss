<?php

namespace ans\schemes;

/**
 * Class representing CtmAutorizacaoRadioType
 *
 *
 * XSD Type: ctm_autorizacaoRadio
 */
class CtmAutorizacaoRadioType
{

    /**
     * @property \ans\schemes\CtAutorizacaoDadosType $dadosAutorizacao
     */
    private $dadosAutorizacao = null;

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
     * @property \ans\schemes\CtDadosComplementaresBeneficiarioRadioType
     * $dadosComplementaresBeneficiario
     */
    private $dadosComplementaresBeneficiario = null;

    /**
     * @property \ans\schemes\CtmAnexoSolicitanteType $medicoSolicitante
     */
    private $medicoSolicitante = null;

    /**
     * @property \ans\schemes\CtmAutorizacaoRadioType\DiagnosticoOncologicoRadioAType
     * $diagnosticoOncologicoRadio
     */
    private $diagnosticoOncologicoRadio = null;

    /**
     * @property \ans\schemes\CtmAutorizacaoRadioType\TratamentosAnterioresAType
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
     * @property \ans\schemes\CtMotivoGlosaType[] $motivosNegativa
     */
    private $motivosNegativa = null;

    /**
     * Gets as dadosAutorizacao
     *
     * @return \ans\schemes\CtAutorizacaoDadosType
     */
    public function getDadosAutorizacao()
    {
        return $this->dadosAutorizacao;
    }

    /**
     * Sets a new dadosAutorizacao
     *
     * @param \ans\schemes\CtAutorizacaoDadosType $dadosAutorizacao
     * @return self
     */
    public function setDadosAutorizacao(\ans\schemes\CtAutorizacaoDadosType $dadosAutorizacao)
    {
        $this->dadosAutorizacao = $dadosAutorizacao;
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
     * @return \ans\schemes\CtmAutorizacaoRadioType\DiagnosticoOncologicoRadioAType
     */
    public function getDiagnosticoOncologicoRadio()
    {
        return $this->diagnosticoOncologicoRadio;
    }

    /**
     * Sets a new diagnosticoOncologicoRadio
     *
     * @param \ans\schemes\CtmAutorizacaoRadioType\DiagnosticoOncologicoRadioAType
     * $diagnosticoOncologicoRadio
     * @return self
     */
    public function setDiagnosticoOncologicoRadio(\ans\schemes\CtmAutorizacaoRadioType\DiagnosticoOncologicoRadioAType $diagnosticoOncologicoRadio)
    {
        $this->diagnosticoOncologicoRadio = $diagnosticoOncologicoRadio;
        return $this;
    }

    /**
     * Gets as tratamentosAnteriores
     *
     * @return \ans\schemes\CtmAutorizacaoRadioType\TratamentosAnterioresAType
     */
    public function getTratamentosAnteriores()
    {
        return $this->tratamentosAnteriores;
    }

    /**
     * Sets a new tratamentosAnteriores
     *
     * @param \ans\schemes\CtmAutorizacaoRadioType\TratamentosAnterioresAType
     * $tratamentosAnteriores
     * @return self
     */
    public function setTratamentosAnteriores(\ans\schemes\CtmAutorizacaoRadioType\TratamentosAnterioresAType $tratamentosAnteriores)
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

    /**
     * Adds as motivoNegativa
     *
     * @return self
     * @param \ans\schemes\CtMotivoGlosaType $motivoNegativa
     */
    public function addToMotivosNegativa(\ans\schemes\CtMotivoGlosaType $motivoNegativa)
    {
        $this->motivosNegativa[] = $motivoNegativa;
        return $this;
    }

    /**
     * isset motivosNegativa
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMotivosNegativa($index)
    {
        return isset($this->motivosNegativa[$index]);
    }

    /**
     * unset motivosNegativa
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMotivosNegativa($index)
    {
        unset($this->motivosNegativa[$index]);
    }

    /**
     * Gets as motivosNegativa
     *
     * @return \ans\schemes\CtMotivoGlosaType[]
     */
    public function getMotivosNegativa()
    {
        return $this->motivosNegativa;
    }

    /**
     * Sets a new motivosNegativa
     *
     * @param \ans\schemes\CtMotivoGlosaType[] $motivosNegativa
     * @return self
     */
    public function setMotivosNegativa(array $motivosNegativa)
    {
        $this->motivosNegativa = $motivosNegativa;
        return $this;
    }


}

