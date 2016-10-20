<?php

namespace ans\schemes\CtmAnexoSolicitacaoRadioType;

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
     * @property string $quimioterapia
     */
    private $quimioterapia = null;

    /**
     * @property \DateTime $dataQuimioterapia
     */
    private $dataQuimioterapia = null;

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
     * Gets as quimioterapia
     *
     * @return string
     */
    public function getQuimioterapia()
    {
        return $this->quimioterapia;
    }

    /**
     * Sets a new quimioterapia
     *
     * @param string $quimioterapia
     * @return self
     */
    public function setQuimioterapia($quimioterapia)
    {
        $this->quimioterapia = $quimioterapia;
        return $this;
    }

    /**
     * Gets as dataQuimioterapia
     *
     * @return \DateTime
     */
    public function getDataQuimioterapia()
    {
        return $this->dataQuimioterapia;
    }

    /**
     * Sets a new dataQuimioterapia
     *
     * @param \DateTime $dataQuimioterapia
     * @return self
     */
    public function setDataQuimioterapia(\DateTime $dataQuimioterapia)
    {
        $this->dataQuimioterapia = $dataQuimioterapia;
        return $this;
    }


}

