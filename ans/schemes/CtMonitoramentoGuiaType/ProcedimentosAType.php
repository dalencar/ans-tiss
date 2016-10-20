<?php

namespace ans\schemes\CtMonitoramentoGuiaType;

/**
 * Class representing ProcedimentosAType
 */
class ProcedimentosAType
{

    /**
     * @property
     * \ans\schemes\CtMonitoramentoGuiaType\ProcedimentosAType\IdentProcedimentoAType
     * $identProcedimento
     */
    private $identProcedimento = null;

    /**
     * @property
     * \ans\schemes\CtMonitoramentoGuiaType\ProcedimentosAType\DenteRegiaoAType
     * $denteRegiao
     */
    private $denteRegiao = null;

    /**
     * @property string $denteFace
     */
    private $denteFace = null;

    /**
     * @property integer $quantidadeRealizada
     */
    private $quantidadeRealizada = null;

    /**
     * @property float $valorPagoProc
     */
    private $valorPagoProc = null;

    /**
     * Gets as identProcedimento
     *
     * @return
     * \ans\schemes\CtMonitoramentoGuiaType\ProcedimentosAType\IdentProcedimentoAType
     */
    public function getIdentProcedimento()
    {
        return $this->identProcedimento;
    }

    /**
     * Sets a new identProcedimento
     *
     * @param
     * \ans\schemes\CtMonitoramentoGuiaType\ProcedimentosAType\IdentProcedimentoAType
     * $identProcedimento
     * @return self
     */
    public function setIdentProcedimento(\ans\schemes\CtMonitoramentoGuiaType\ProcedimentosAType\IdentProcedimentoAType $identProcedimento)
    {
        $this->identProcedimento = $identProcedimento;
        return $this;
    }

    /**
     * Gets as denteRegiao
     *
     * @return \ans\schemes\CtMonitoramentoGuiaType\ProcedimentosAType\DenteRegiaoAType
     */
    public function getDenteRegiao()
    {
        return $this->denteRegiao;
    }

    /**
     * Sets a new denteRegiao
     *
     * @param \ans\schemes\CtMonitoramentoGuiaType\ProcedimentosAType\DenteRegiaoAType
     * $denteRegiao
     * @return self
     */
    public function setDenteRegiao(\ans\schemes\CtMonitoramentoGuiaType\ProcedimentosAType\DenteRegiaoAType $denteRegiao)
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
     * Gets as quantidadeRealizada
     *
     * @return integer
     */
    public function getQuantidadeRealizada()
    {
        return $this->quantidadeRealizada;
    }

    /**
     * Sets a new quantidadeRealizada
     *
     * @param integer $quantidadeRealizada
     * @return self
     */
    public function setQuantidadeRealizada($quantidadeRealizada)
    {
        $this->quantidadeRealizada = $quantidadeRealizada;
        return $this;
    }

    /**
     * Gets as valorPagoProc
     *
     * @return float
     */
    public function getValorPagoProc()
    {
        return $this->valorPagoProc;
    }

    /**
     * Sets a new valorPagoProc
     *
     * @param float $valorPagoProc
     * @return self
     */
    public function setValorPagoProc($valorPagoProc)
    {
        $this->valorPagoProc = $valorPagoProc;
        return $this;
    }


}

