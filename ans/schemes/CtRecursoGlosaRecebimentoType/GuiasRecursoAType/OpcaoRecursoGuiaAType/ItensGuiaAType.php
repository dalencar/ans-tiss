<?php

namespace ans\schemes\CtRecursoGlosaRecebimentoType\GuiasRecursoAType\OpcaoRecursoGuiaAType;

/**
 * Class representing ItensGuiaAType
 */
class ItensGuiaAType
{

    /**
     * @property \DateTime $dataInicio
     */
    private $dataInicio = null;

    /**
     * @property \DateTime $dataFim
     */
    private $dataFim = null;

    /**
     * @property \ans\schemes\CtProcedimentoDadosType $procRecurso
     */
    private $procRecurso = null;

    /**
     * @property string $codGlosaItem
     */
    private $codGlosaItem = null;

    /**
     * @property float $valorRecursado
     */
    private $valorRecursado = null;

    /**
     * @property string $justificativaItem
     */
    private $justificativaItem = null;

    /**
     * Gets as dataInicio
     *
     * @return \DateTime
     */
    public function getDataInicio()
    {
        return $this->dataInicio;
    }

    /**
     * Sets a new dataInicio
     *
     * @param \DateTime $dataInicio
     * @return self
     */
    public function setDataInicio(\DateTime $dataInicio)
    {
        $this->dataInicio = $dataInicio;
        return $this;
    }

    /**
     * Gets as dataFim
     *
     * @return \DateTime
     */
    public function getDataFim()
    {
        return $this->dataFim;
    }

    /**
     * Sets a new dataFim
     *
     * @param \DateTime $dataFim
     * @return self
     */
    public function setDataFim(\DateTime $dataFim)
    {
        $this->dataFim = $dataFim;
        return $this;
    }

    /**
     * Gets as procRecurso
     *
     * @return \ans\schemes\CtProcedimentoDadosType
     */
    public function getProcRecurso()
    {
        return $this->procRecurso;
    }

    /**
     * Sets a new procRecurso
     *
     * @param \ans\schemes\CtProcedimentoDadosType $procRecurso
     * @return self
     */
    public function setProcRecurso(\ans\schemes\CtProcedimentoDadosType $procRecurso)
    {
        $this->procRecurso = $procRecurso;
        return $this;
    }

    /**
     * Gets as codGlosaItem
     *
     * @return string
     */
    public function getCodGlosaItem()
    {
        return $this->codGlosaItem;
    }

    /**
     * Sets a new codGlosaItem
     *
     * @param string $codGlosaItem
     * @return self
     */
    public function setCodGlosaItem($codGlosaItem)
    {
        $this->codGlosaItem = $codGlosaItem;
        return $this;
    }

    /**
     * Gets as valorRecursado
     *
     * @return float
     */
    public function getValorRecursado()
    {
        return $this->valorRecursado;
    }

    /**
     * Sets a new valorRecursado
     *
     * @param float $valorRecursado
     * @return self
     */
    public function setValorRecursado($valorRecursado)
    {
        $this->valorRecursado = $valorRecursado;
        return $this;
    }

    /**
     * Gets as justificativaItem
     *
     * @return string
     */
    public function getJustificativaItem()
    {
        return $this->justificativaItem;
    }

    /**
     * Sets a new justificativaItem
     *
     * @param string $justificativaItem
     * @return self
     */
    public function setJustificativaItem($justificativaItem)
    {
        $this->justificativaItem = $justificativaItem;
        return $this;
    }


}

