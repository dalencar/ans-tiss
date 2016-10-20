<?php

namespace ans\schemes\CtGuiaDadosAnexoType\ProcedimentosSolicitadosAType;

/**
 * Class representing ProcedimentoSolicitadoAType
 */
class ProcedimentoSolicitadoAType
{

    /**
     * @property \ans\schemes\CtProcedimentoDadosType $procedimento
     */
    private $procedimento = null;

    /**
     * @property string $opcaoFabricante
     */
    private $opcaoFabricante = null;

    /**
     * @property float $qtdSolicitada
     */
    private $qtdSolicitada = null;

    /**
     * @property float $valorSolicitado
     */
    private $valorSolicitado = null;

    /**
     * @property float $qtdAutorizada
     */
    private $qtdAutorizada = null;

    /**
     * @property float $valorAutorizado
     */
    private $valorAutorizado = null;

    /**
     * @property
     * \ans\schemes\CtGuiaDadosAnexoType\ProcedimentosSolicitadosAType\ProcedimentoSolicitadoAType\GlosasProcedimentoAType
     * $glosasProcedimento
     */
    private $glosasProcedimento = null;

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
     * Gets as opcaoFabricante
     *
     * @return string
     */
    public function getOpcaoFabricante()
    {
        return $this->opcaoFabricante;
    }

    /**
     * Sets a new opcaoFabricante
     *
     * @param string $opcaoFabricante
     * @return self
     */
    public function setOpcaoFabricante($opcaoFabricante)
    {
        $this->opcaoFabricante = $opcaoFabricante;
        return $this;
    }

    /**
     * Gets as qtdSolicitada
     *
     * @return float
     */
    public function getQtdSolicitada()
    {
        return $this->qtdSolicitada;
    }

    /**
     * Sets a new qtdSolicitada
     *
     * @param float $qtdSolicitada
     * @return self
     */
    public function setQtdSolicitada($qtdSolicitada)
    {
        $this->qtdSolicitada = $qtdSolicitada;
        return $this;
    }

    /**
     * Gets as valorSolicitado
     *
     * @return float
     */
    public function getValorSolicitado()
    {
        return $this->valorSolicitado;
    }

    /**
     * Sets a new valorSolicitado
     *
     * @param float $valorSolicitado
     * @return self
     */
    public function setValorSolicitado($valorSolicitado)
    {
        $this->valorSolicitado = $valorSolicitado;
        return $this;
    }

    /**
     * Gets as qtdAutorizada
     *
     * @return float
     */
    public function getQtdAutorizada()
    {
        return $this->qtdAutorizada;
    }

    /**
     * Sets a new qtdAutorizada
     *
     * @param float $qtdAutorizada
     * @return self
     */
    public function setQtdAutorizada($qtdAutorizada)
    {
        $this->qtdAutorizada = $qtdAutorizada;
        return $this;
    }

    /**
     * Gets as valorAutorizado
     *
     * @return float
     */
    public function getValorAutorizado()
    {
        return $this->valorAutorizado;
    }

    /**
     * Sets a new valorAutorizado
     *
     * @param float $valorAutorizado
     * @return self
     */
    public function setValorAutorizado($valorAutorizado)
    {
        $this->valorAutorizado = $valorAutorizado;
        return $this;
    }

    /**
     * Gets as glosasProcedimento
     *
     * @return
     * \ans\schemes\CtGuiaDadosAnexoType\ProcedimentosSolicitadosAType\ProcedimentoSolicitadoAType\GlosasProcedimentoAType
     */
    public function getGlosasProcedimento()
    {
        return $this->glosasProcedimento;
    }

    /**
     * Sets a new glosasProcedimento
     *
     * @param
     * \ans\schemes\CtGuiaDadosAnexoType\ProcedimentosSolicitadosAType\ProcedimentoSolicitadoAType\GlosasProcedimentoAType
     * $glosasProcedimento
     * @return self
     */
    public function setGlosasProcedimento(\ans\schemes\CtGuiaDadosAnexoType\ProcedimentosSolicitadosAType\ProcedimentoSolicitadoAType\GlosasProcedimentoAType $glosasProcedimento)
    {
        $this->glosasProcedimento = $glosasProcedimento;
        return $this;
    }


}

