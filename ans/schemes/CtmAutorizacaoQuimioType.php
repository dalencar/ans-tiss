<?php

namespace ans\schemes;

/**
 * Class representing CtmAutorizacaoQuimioType
 *
 *
 * XSD Type: ctm_autorizacaoQuimio
 */
class CtmAutorizacaoQuimioType
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
     * @property \ans\schemes\CtDadosComplementaresBeneficiarioType
     * $dadosComplementaresBeneficiario
     */
    private $dadosComplementaresBeneficiario = null;

    /**
     * @property \ans\schemes\CtmAnexoSolicitanteType $medicoSolicitante
     */
    private $medicoSolicitante = null;

    /**
     * @property
     * \ans\schemes\CtmAutorizacaoQuimioType\DiagnosticoOncologicoQuimioterapiaAType
     * $diagnosticoOncologicoQuimioterapia
     */
    private $diagnosticoOncologicoQuimioterapia = null;

    /**
     * @property \ans\schemes\CtDrogasSolicitadasType[] $drogasSolicitadas
     */
    private $drogasSolicitadas = null;

    /**
     * @property \ans\schemes\CtmAutorizacaoQuimioType\TratamentosAnterioresAType
     * $tratamentosAnteriores
     */
    private $tratamentosAnteriores = null;

    /**
     * @property integer $numeroCiclos
     */
    private $numeroCiclos = null;

    /**
     * @property integer $cicloAtual
     */
    private $cicloAtual = null;

    /**
     * @property integer $intervaloCiclos
     */
    private $intervaloCiclos = null;

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
     * @return \ans\schemes\CtDadosComplementaresBeneficiarioType
     */
    public function getDadosComplementaresBeneficiario()
    {
        return $this->dadosComplementaresBeneficiario;
    }

    /**
     * Sets a new dadosComplementaresBeneficiario
     *
     * @param \ans\schemes\CtDadosComplementaresBeneficiarioType
     * $dadosComplementaresBeneficiario
     * @return self
     */
    public function setDadosComplementaresBeneficiario(\ans\schemes\CtDadosComplementaresBeneficiarioType $dadosComplementaresBeneficiario)
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
     * Gets as diagnosticoOncologicoQuimioterapia
     *
     * @return
     * \ans\schemes\CtmAutorizacaoQuimioType\DiagnosticoOncologicoQuimioterapiaAType
     */
    public function getDiagnosticoOncologicoQuimioterapia()
    {
        return $this->diagnosticoOncologicoQuimioterapia;
    }

    /**
     * Sets a new diagnosticoOncologicoQuimioterapia
     *
     * @param
     * \ans\schemes\CtmAutorizacaoQuimioType\DiagnosticoOncologicoQuimioterapiaAType
     * $diagnosticoOncologicoQuimioterapia
     * @return self
     */
    public function setDiagnosticoOncologicoQuimioterapia(\ans\schemes\CtmAutorizacaoQuimioType\DiagnosticoOncologicoQuimioterapiaAType $diagnosticoOncologicoQuimioterapia)
    {
        $this->diagnosticoOncologicoQuimioterapia = $diagnosticoOncologicoQuimioterapia;
        return $this;
    }

    /**
     * Adds as drogaSolicitada
     *
     * @return self
     * @param \ans\schemes\CtDrogasSolicitadasType $drogaSolicitada
     */
    public function addToDrogasSolicitadas(\ans\schemes\CtDrogasSolicitadasType $drogaSolicitada)
    {
        $this->drogasSolicitadas[] = $drogaSolicitada;
        return $this;
    }

    /**
     * isset drogasSolicitadas
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDrogasSolicitadas($index)
    {
        return isset($this->drogasSolicitadas[$index]);
    }

    /**
     * unset drogasSolicitadas
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDrogasSolicitadas($index)
    {
        unset($this->drogasSolicitadas[$index]);
    }

    /**
     * Gets as drogasSolicitadas
     *
     * @return \ans\schemes\CtDrogasSolicitadasType[]
     */
    public function getDrogasSolicitadas()
    {
        return $this->drogasSolicitadas;
    }

    /**
     * Sets a new drogasSolicitadas
     *
     * @param \ans\schemes\CtDrogasSolicitadasType[] $drogasSolicitadas
     * @return self
     */
    public function setDrogasSolicitadas(array $drogasSolicitadas)
    {
        $this->drogasSolicitadas = $drogasSolicitadas;
        return $this;
    }

    /**
     * Gets as tratamentosAnteriores
     *
     * @return \ans\schemes\CtmAutorizacaoQuimioType\TratamentosAnterioresAType
     */
    public function getTratamentosAnteriores()
    {
        return $this->tratamentosAnteriores;
    }

    /**
     * Sets a new tratamentosAnteriores
     *
     * @param \ans\schemes\CtmAutorizacaoQuimioType\TratamentosAnterioresAType
     * $tratamentosAnteriores
     * @return self
     */
    public function setTratamentosAnteriores(\ans\schemes\CtmAutorizacaoQuimioType\TratamentosAnterioresAType $tratamentosAnteriores)
    {
        $this->tratamentosAnteriores = $tratamentosAnteriores;
        return $this;
    }

    /**
     * Gets as numeroCiclos
     *
     * @return integer
     */
    public function getNumeroCiclos()
    {
        return $this->numeroCiclos;
    }

    /**
     * Sets a new numeroCiclos
     *
     * @param integer $numeroCiclos
     * @return self
     */
    public function setNumeroCiclos($numeroCiclos)
    {
        $this->numeroCiclos = $numeroCiclos;
        return $this;
    }

    /**
     * Gets as cicloAtual
     *
     * @return integer
     */
    public function getCicloAtual()
    {
        return $this->cicloAtual;
    }

    /**
     * Sets a new cicloAtual
     *
     * @param integer $cicloAtual
     * @return self
     */
    public function setCicloAtual($cicloAtual)
    {
        $this->cicloAtual = $cicloAtual;
        return $this;
    }

    /**
     * Gets as intervaloCiclos
     *
     * @return integer
     */
    public function getIntervaloCiclos()
    {
        return $this->intervaloCiclos;
    }

    /**
     * Sets a new intervaloCiclos
     *
     * @param integer $intervaloCiclos
     * @return self
     */
    public function setIntervaloCiclos($intervaloCiclos)
    {
        $this->intervaloCiclos = $intervaloCiclos;
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

