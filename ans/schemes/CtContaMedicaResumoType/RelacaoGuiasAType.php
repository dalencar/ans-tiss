<?php

namespace ans\schemes\CtContaMedicaResumoType;

/**
 * Class representing RelacaoGuiasAType
 */
class RelacaoGuiasAType
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
     * @property string $senha
     */
    private $senha = null;

    /**
     * @property string $nomeBeneficiario
     */
    private $nomeBeneficiario = null;

    /**
     * @property string $numeroCarteira
     */
    private $numeroCarteira = null;

    /**
     * @property \DateTime $dataInicioFat
     */
    private $dataInicioFat = null;

    /**
     * @property \DateTime $horaInicioFat
     */
    private $horaInicioFat = null;

    /**
     * @property \DateTime $dataFimFat
     */
    private $dataFimFat = null;

    /**
     * @property \DateTime $horaFimFat
     */
    private $horaFimFat = null;

    /**
     * @property \ans\schemes\CtMotivoGlosaType[] $motivoGlosaGuia
     */
    private $motivoGlosaGuia = null;

    /**
     * @property
     * \ans\schemes\CtContaMedicaResumoType\RelacaoGuiasAType\DetalhesGuiaAType[]
     * $detalhesGuia
     */
    private $detalhesGuia = null;

    /**
     * @property float $valorInformadoGuia
     */
    private $valorInformadoGuia = null;

    /**
     * @property float $valorProcessadoGuia
     */
    private $valorProcessadoGuia = null;

    /**
     * @property float $valorLiberadoGuia
     */
    private $valorLiberadoGuia = null;

    /**
     * @property float $valorGlosaGuia
     */
    private $valorGlosaGuia = null;

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
     * Gets as senha
     *
     * @return string
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Sets a new senha
     *
     * @param string $senha
     * @return self
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
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
     * Gets as dataInicioFat
     *
     * @return \DateTime
     */
    public function getDataInicioFat()
    {
        return $this->dataInicioFat;
    }

    /**
     * Sets a new dataInicioFat
     *
     * @param \DateTime $dataInicioFat
     * @return self
     */
    public function setDataInicioFat(\DateTime $dataInicioFat)
    {
        $this->dataInicioFat = $dataInicioFat;
        return $this;
    }

    /**
     * Gets as horaInicioFat
     *
     * @return \DateTime
     */
    public function getHoraInicioFat()
    {
        return $this->horaInicioFat;
    }

    /**
     * Sets a new horaInicioFat
     *
     * @param \DateTime $horaInicioFat
     * @return self
     */
    public function setHoraInicioFat(\DateTime $horaInicioFat)
    {
        $this->horaInicioFat = $horaInicioFat;
        return $this;
    }

    /**
     * Gets as dataFimFat
     *
     * @return \DateTime
     */
    public function getDataFimFat()
    {
        return $this->dataFimFat;
    }

    /**
     * Sets a new dataFimFat
     *
     * @param \DateTime $dataFimFat
     * @return self
     */
    public function setDataFimFat(\DateTime $dataFimFat)
    {
        $this->dataFimFat = $dataFimFat;
        return $this;
    }

    /**
     * Gets as horaFimFat
     *
     * @return \DateTime
     */
    public function getHoraFimFat()
    {
        return $this->horaFimFat;
    }

    /**
     * Sets a new horaFimFat
     *
     * @param \DateTime $horaFimFat
     * @return self
     */
    public function setHoraFimFat(\DateTime $horaFimFat)
    {
        $this->horaFimFat = $horaFimFat;
        return $this;
    }

    /**
     * Adds as motivoGlosaGuia
     *
     * @return self
     * @param \ans\schemes\CtMotivoGlosaType $motivoGlosaGuia
     */
    public function addToMotivoGlosaGuia(\ans\schemes\CtMotivoGlosaType $motivoGlosaGuia)
    {
        $this->motivoGlosaGuia[] = $motivoGlosaGuia;
        return $this;
    }

    /**
     * isset motivoGlosaGuia
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMotivoGlosaGuia($index)
    {
        return isset($this->motivoGlosaGuia[$index]);
    }

    /**
     * unset motivoGlosaGuia
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMotivoGlosaGuia($index)
    {
        unset($this->motivoGlosaGuia[$index]);
    }

    /**
     * Gets as motivoGlosaGuia
     *
     * @return \ans\schemes\CtMotivoGlosaType[]
     */
    public function getMotivoGlosaGuia()
    {
        return $this->motivoGlosaGuia;
    }

    /**
     * Sets a new motivoGlosaGuia
     *
     * @param \ans\schemes\CtMotivoGlosaType[] $motivoGlosaGuia
     * @return self
     */
    public function setMotivoGlosaGuia(array $motivoGlosaGuia)
    {
        $this->motivoGlosaGuia = $motivoGlosaGuia;
        return $this;
    }

    /**
     * Adds as detalhesGuia
     *
     * @return self
     * @param \ans\schemes\CtContaMedicaResumoType\RelacaoGuiasAType\DetalhesGuiaAType
     * $detalhesGuia
     */
    public function addToDetalhesGuia(\ans\schemes\CtContaMedicaResumoType\RelacaoGuiasAType\DetalhesGuiaAType $detalhesGuia)
    {
        $this->detalhesGuia[] = $detalhesGuia;
        return $this;
    }

    /**
     * isset detalhesGuia
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDetalhesGuia($index)
    {
        return isset($this->detalhesGuia[$index]);
    }

    /**
     * unset detalhesGuia
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDetalhesGuia($index)
    {
        unset($this->detalhesGuia[$index]);
    }

    /**
     * Gets as detalhesGuia
     *
     * @return
     * \ans\schemes\CtContaMedicaResumoType\RelacaoGuiasAType\DetalhesGuiaAType[]
     */
    public function getDetalhesGuia()
    {
        return $this->detalhesGuia;
    }

    /**
     * Sets a new detalhesGuia
     *
     * @param
     * \ans\schemes\CtContaMedicaResumoType\RelacaoGuiasAType\DetalhesGuiaAType[]
     * $detalhesGuia
     * @return self
     */
    public function setDetalhesGuia(array $detalhesGuia)
    {
        $this->detalhesGuia = $detalhesGuia;
        return $this;
    }

    /**
     * Gets as valorInformadoGuia
     *
     * @return float
     */
    public function getValorInformadoGuia()
    {
        return $this->valorInformadoGuia;
    }

    /**
     * Sets a new valorInformadoGuia
     *
     * @param float $valorInformadoGuia
     * @return self
     */
    public function setValorInformadoGuia($valorInformadoGuia)
    {
        $this->valorInformadoGuia = $valorInformadoGuia;
        return $this;
    }

    /**
     * Gets as valorProcessadoGuia
     *
     * @return float
     */
    public function getValorProcessadoGuia()
    {
        return $this->valorProcessadoGuia;
    }

    /**
     * Sets a new valorProcessadoGuia
     *
     * @param float $valorProcessadoGuia
     * @return self
     */
    public function setValorProcessadoGuia($valorProcessadoGuia)
    {
        $this->valorProcessadoGuia = $valorProcessadoGuia;
        return $this;
    }

    /**
     * Gets as valorLiberadoGuia
     *
     * @return float
     */
    public function getValorLiberadoGuia()
    {
        return $this->valorLiberadoGuia;
    }

    /**
     * Sets a new valorLiberadoGuia
     *
     * @param float $valorLiberadoGuia
     * @return self
     */
    public function setValorLiberadoGuia($valorLiberadoGuia)
    {
        $this->valorLiberadoGuia = $valorLiberadoGuia;
        return $this;
    }

    /**
     * Gets as valorGlosaGuia
     *
     * @return float
     */
    public function getValorGlosaGuia()
    {
        return $this->valorGlosaGuia;
    }

    /**
     * Sets a new valorGlosaGuia
     *
     * @param float $valorGlosaGuia
     * @return self
     */
    public function setValorGlosaGuia($valorGlosaGuia)
    {
        $this->valorGlosaGuia = $valorGlosaGuia;
        return $this;
    }


}

