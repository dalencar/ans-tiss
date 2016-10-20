<?php

namespace ans\schemes\CtoDemonstrativoOdontologiaType\DadosPagamentoProtocoloAType\DadosPagamentoGuiaAType;

/**
 * Class representing DadosPagamentoAType
 */
class DadosPagamentoAType
{

    /**
     * @property \ans\schemes\CtProcedimentoDadosType $procedimento
     */
    private $procedimento = null;

    /**
     * @property
     * \ans\schemes\CtoDemonstrativoOdontologiaType\DadosPagamentoProtocoloAType\DadosPagamentoGuiaAType\DadosPagamentoAType\DenteRegiaoAType
     * $denteRegiao
     */
    private $denteRegiao = null;

    /**
     * @property string $denteFace
     */
    private $denteFace = null;

    /**
     * @property \DateTime $dataRealizacao
     */
    private $dataRealizacao = null;

    /**
     * @property integer $qtdProc
     */
    private $qtdProc = null;

    /**
     * @property float $valorInformado
     */
    private $valorInformado = null;

    /**
     * @property float $valorProcessado
     */
    private $valorProcessado = null;

    /**
     * @property float $valorGlosaEstorno
     */
    private $valorGlosaEstorno = null;

    /**
     * @property float $valorFranquia
     */
    private $valorFranquia = null;

    /**
     * @property float $valorLiberado
     */
    private $valorLiberado = null;

    /**
     * @property string[] $codigosGlosa
     */
    private $codigosGlosa = null;

    /**
     * Gets as procedimento
     *
     * @return \ans\schemes\CtProcedimentoDadosType
     */
    public function getProcedimento()
    {
        return $this->procedimento;
    }

    /**
     * Sets a new procedimento
     *
     * @param \ans\schemes\CtProcedimentoDadosType $procedimento
     * @return self
     */
    public function setProcedimento(\ans\schemes\CtProcedimentoDadosType $procedimento)
    {
        $this->procedimento = $procedimento;
        return $this;
    }

    /**
     * Gets as denteRegiao
     *
     * @return
     * \ans\schemes\CtoDemonstrativoOdontologiaType\DadosPagamentoProtocoloAType\DadosPagamentoGuiaAType\DadosPagamentoAType\DenteRegiaoAType
     */
    public function getDenteRegiao()
    {
        return $this->denteRegiao;
    }

    /**
     * Sets a new denteRegiao
     *
     * @param
     * \ans\schemes\CtoDemonstrativoOdontologiaType\DadosPagamentoProtocoloAType\DadosPagamentoGuiaAType\DadosPagamentoAType\DenteRegiaoAType
     * $denteRegiao
     * @return self
     */
    public function setDenteRegiao(\ans\schemes\CtoDemonstrativoOdontologiaType\DadosPagamentoProtocoloAType\DadosPagamentoGuiaAType\DadosPagamentoAType\DenteRegiaoAType $denteRegiao)
    {
        $this->denteRegiao = $denteRegiao;
        return $this;
    }

    /**
     * Gets as denteFace
     *
     * @return string
     */
    public function getDenteFace()
    {
        return $this->denteFace;
    }

    /**
     * Sets a new denteFace
     *
     * @param string $denteFace
     * @return self
     */
    public function setDenteFace($denteFace)
    {
        $this->denteFace = $denteFace;
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
     * Gets as qtdProc
     *
     * @return integer
     */
    public function getQtdProc()
    {
        return $this->qtdProc;
    }

    /**
     * Sets a new qtdProc
     *
     * @param integer $qtdProc
     * @return self
     */
    public function setQtdProc($qtdProc)
    {
        $this->qtdProc = $qtdProc;
        return $this;
    }

    /**
     * Gets as valorInformado
     *
     * @return float
     */
    public function getValorInformado()
    {
        return $this->valorInformado;
    }

    /**
     * Sets a new valorInformado
     *
     * @param float $valorInformado
     * @return self
     */
    public function setValorInformado($valorInformado)
    {
        $this->valorInformado = $valorInformado;
        return $this;
    }

    /**
     * Gets as valorProcessado
     *
     * @return float
     */
    public function getValorProcessado()
    {
        return $this->valorProcessado;
    }

    /**
     * Sets a new valorProcessado
     *
     * @param float $valorProcessado
     * @return self
     */
    public function setValorProcessado($valorProcessado)
    {
        $this->valorProcessado = $valorProcessado;
        return $this;
    }

    /**
     * Gets as valorGlosaEstorno
     *
     * @return float
     */
    public function getValorGlosaEstorno()
    {
        return $this->valorGlosaEstorno;
    }

    /**
     * Sets a new valorGlosaEstorno
     *
     * @param float $valorGlosaEstorno
     * @return self
     */
    public function setValorGlosaEstorno($valorGlosaEstorno)
    {
        $this->valorGlosaEstorno = $valorGlosaEstorno;
        return $this;
    }

    /**
     * Gets as valorFranquia
     *
     * @return float
     */
    public function getValorFranquia()
    {
        return $this->valorFranquia;
    }

    /**
     * Sets a new valorFranquia
     *
     * @param float $valorFranquia
     * @return self
     */
    public function setValorFranquia($valorFranquia)
    {
        $this->valorFranquia = $valorFranquia;
        return $this;
    }

    /**
     * Gets as valorLiberado
     *
     * @return float
     */
    public function getValorLiberado()
    {
        return $this->valorLiberado;
    }

    /**
     * Sets a new valorLiberado
     *
     * @param float $valorLiberado
     * @return self
     */
    public function setValorLiberado($valorLiberado)
    {
        $this->valorLiberado = $valorLiberado;
        return $this;
    }

    /**
     * Adds as codigosGlosa
     *
     * @return self
     * @param string $codigosGlosa
     */
    public function addToCodigosGlosa($codigosGlosa)
    {
        $this->codigosGlosa[] = $codigosGlosa;
        return $this;
    }

    /**
     * isset codigosGlosa
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCodigosGlosa($index)
    {
        return isset($this->codigosGlosa[$index]);
    }

    /**
     * unset codigosGlosa
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCodigosGlosa($index)
    {
        unset($this->codigosGlosa[$index]);
    }

    /**
     * Gets as codigosGlosa
     *
     * @return string[]
     */
    public function getCodigosGlosa()
    {
        return $this->codigosGlosa;
    }

    /**
     * Sets a new codigosGlosa
     *
     * @param string $codigosGlosa
     * @return self
     */
    public function setCodigosGlosa(array $codigosGlosa)
    {
        $this->codigosGlosa = $codigosGlosa;
        return $this;
    }


}

