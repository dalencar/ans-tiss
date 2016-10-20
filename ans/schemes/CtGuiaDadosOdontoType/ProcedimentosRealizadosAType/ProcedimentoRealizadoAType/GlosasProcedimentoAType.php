<?php

namespace ans\schemes\CtGuiaDadosOdontoType\ProcedimentosRealizadosAType\ProcedimentoRealizadoAType;

/**
 * Class representing GlosasProcedimentoAType
 */
class GlosasProcedimentoAType
{

    /**
     * @property \ans\schemes\CtMotivoGlosaType[] $motivoGlosa
     */
    private $motivoGlosa = null;

    /**
     * @property float $valorGlosaProcedimento
     */
    private $valorGlosaProcedimento = null;

    /**
     * Adds as motivoGlosa
     *
     * @return self
     * @param \ans\schemes\CtMotivoGlosaType $motivoGlosa
     */
    public function addToMotivoGlosa(\ans\schemes\CtMotivoGlosaType $motivoGlosa)
    {
        $this->motivoGlosa[] = $motivoGlosa;
        return $this;
    }

    /**
     * isset motivoGlosa
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMotivoGlosa($index)
    {
        return isset($this->motivoGlosa[$index]);
    }

    /**
     * unset motivoGlosa
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMotivoGlosa($index)
    {
        unset($this->motivoGlosa[$index]);
    }

    /**
     * Gets as motivoGlosa
     *
     * @return \ans\schemes\CtMotivoGlosaType[]
     */
    public function getMotivoGlosa()
    {
        return $this->motivoGlosa;
    }

    /**
     * Sets a new motivoGlosa
     *
     * @param \ans\schemes\CtMotivoGlosaType[] $motivoGlosa
     * @return self
     */
    public function setMotivoGlosa(array $motivoGlosa)
    {
        $this->motivoGlosa = $motivoGlosa;
        return $this;
    }

    /**
     * Gets as valorGlosaProcedimento
     *
     * @return float
     */
    public function getValorGlosaProcedimento()
    {
        return $this->valorGlosaProcedimento;
    }

    /**
     * Sets a new valorGlosaProcedimento
     *
     * @param float $valorGlosaProcedimento
     * @return self
     */
    public function setValorGlosaProcedimento($valorGlosaProcedimento)
    {
        $this->valorGlosaProcedimento = $valorGlosaProcedimento;
        return $this;
    }


}

