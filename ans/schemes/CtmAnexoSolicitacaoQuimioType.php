<?php

namespace ans\schemes;

/**
 * Class representing CtmAnexoSolicitacaoQuimioType
 *
 *
 * XSD Type: ctm_anexoSolicitacaoQuimio
 */
class CtmAnexoSolicitacaoQuimioType
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
     * \ans\schemes\CtmAnexoSolicitacaoQuimioType\DiagnosticoOncologicoQuimioterapiaAType
     * $diagnosticoOncologicoQuimioterapia
     */
    private $diagnosticoOncologicoQuimioterapia = null;

    /**
     * @property \ans\schemes\CtDrogasSolicitadasType[] $drogasSolicitadas
     */
    private $drogasSolicitadas = null;

    /**
     * @property \ans\schemes\CtmAnexoSolicitacaoQuimioType\TratamentosAnterioresAType
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
     * \ans\schemes\CtmAnexoSolicitacaoQuimioType\DiagnosticoOncologicoQuimioterapiaAType
     */
    public function getDiagnosticoOncologicoQuimioterapia()
    {
        return $this->diagnosticoOncologicoQuimioterapia;
    }

    /**
     * Sets a new diagnosticoOncologicoQuimioterapia
     *
     * @param
     * \ans\schemes\CtmAnexoSolicitacaoQuimioType\DiagnosticoOncologicoQuimioterapiaAType
     * $diagnosticoOncologicoQuimioterapia
     * @return self
     */
    public function setDiagnosticoOncologicoQuimioterapia(\ans\schemes\CtmAnexoSolicitacaoQuimioType\DiagnosticoOncologicoQuimioterapiaAType $diagnosticoOncologicoQuimioterapia)
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
     * @return \ans\schemes\CtmAnexoSolicitacaoQuimioType\TratamentosAnterioresAType
     */
    public function getTratamentosAnteriores()
    {
        return $this->tratamentosAnteriores;
    }

    /**
     * Sets a new tratamentosAnteriores
     *
     * @param \ans\schemes\CtmAnexoSolicitacaoQuimioType\TratamentosAnterioresAType
     * $tratamentosAnteriores
     * @return self
     */
    public function setTratamentosAnteriores(\ans\schemes\CtmAnexoSolicitacaoQuimioType\TratamentosAnterioresAType $tratamentosAnteriores)
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


}

