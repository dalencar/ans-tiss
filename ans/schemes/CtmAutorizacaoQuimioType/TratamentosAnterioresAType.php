<?php

namespace ans\schemes\CtmAutorizacaoQuimioType;

/**
 * Class representing TratamentosAnterioresAType
 */
class TratamentosAnterioresAType
{

    /**
     * @property string $cirurgia
     */
    private $cirurgia = null;

    /**
     * @property \DateTime $datacirurgia
     */
    private $datacirurgia = null;

    /**
     * @property string $areaIrradiada
     */
    private $areaIrradiada = null;

    /**
     * @property \DateTime $dataIrradiacao
     */
    private $dataIrradiacao = null;

    /**
     * Gets as cirurgia
     *
     * @return string
     */
    public function getCirurgia()
    {
        return $this->cirurgia;
    }

    /**
     * Sets a new cirurgia
     *
     * @param string $cirurgia
     * @return self
     */
    public function setCirurgia($cirurgia)
    {
        $this->cirurgia = $cirurgia;
        return $this;
    }

    /**
     * Gets as datacirurgia
     *
     * @return \DateTime
     */
    public function getDatacirurgia()
    {
        return $this->datacirurgia;
    }

    /**
     * Sets a new datacirurgia
     *
     * @param \DateTime $datacirurgia
     * @return self
     */
    public function setDatacirurgia(\DateTime $datacirurgia)
    {
        $this->datacirurgia = $datacirurgia;
        return $this;
    }

    /**
     * Gets as areaIrradiada
     *
     * @return string
     */
    public function getAreaIrradiada()
    {
        return $this->areaIrradiada;
    }

    /**
     * Sets a new areaIrradiada
     *
     * @param string $areaIrradiada
     * @return self
     */
    public function setAreaIrradiada($areaIrradiada)
    {
        $this->areaIrradiada = $areaIrradiada;
        return $this;
    }

    /**
     * Gets as dataIrradiacao
     *
     * @return \DateTime
     */
    public function getDataIrradiacao()
    {
        return $this->dataIrradiacao;
    }

    /**
     * Sets a new dataIrradiacao
     *
     * @param \DateTime $dataIrradiacao
     * @return self
     */
    public function setDataIrradiacao(\DateTime $dataIrradiacao)
    {
        $this->dataIrradiacao = $dataIrradiacao;
        return $this;
    }


}

