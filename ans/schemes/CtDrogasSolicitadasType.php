<?php

namespace ans\schemes;

/**
 * Class representing CtDrogasSolicitadasType
 *
 *
 * XSD Type: ct_drogasSolicitadas
 */
class CtDrogasSolicitadasType
{

    /**
     * @property \DateTime $dataProvavel
     */
    private $dataProvavel = null;

    /**
     * @property \ans\schemes\CtProcedimentoDadosType $identificacao
     */
    private $identificacao = null;

    /**
     * @property float $qtDoses
     */
    private $qtDoses = null;

    /**
     * @property string $viaAdministracao
     */
    private $viaAdministracao = null;

    /**
     * @property integer $frequencia
     */
    private $frequencia = null;

    /**
     * Gets as dataProvavel
     *
     * @return \DateTime
     */
    public function getDataProvavel()
    {
        return $this->dataProvavel;
    }

    /**
     * Sets a new dataProvavel
     *
     * @param \DateTime $dataProvavel
     * @return self
     */
    public function setDataProvavel(\DateTime $dataProvavel)
    {
        $this->dataProvavel = $dataProvavel;
        return $this;
    }

    /**
     * Gets as identificacao
     *
     * @return \ans\schemes\CtProcedimentoDadosType
     */
    public function getIdentificacao()
    {
        return $this->identificacao;
    }

    /**
     * Sets a new identificacao
     *
     * @param \ans\schemes\CtProcedimentoDadosType $identificacao
     * @return self
     */
    public function setIdentificacao(\ans\schemes\CtProcedimentoDadosType $identificacao)
    {
        $this->identificacao = $identificacao;
        return $this;
    }

    /**
     * Gets as qtDoses
     *
     * @return float
     */
    public function getQtDoses()
    {
        return $this->qtDoses;
    }

    /**
     * Sets a new qtDoses
     *
     * @param float $qtDoses
     * @return self
     */
    public function setQtDoses($qtDoses)
    {
        $this->qtDoses = $qtDoses;
        return $this;
    }

    /**
     * Gets as viaAdministracao
     *
     * @return string
     */
    public function getViaAdministracao()
    {
        return $this->viaAdministracao;
    }

    /**
     * Sets a new viaAdministracao
     *
     * @param string $viaAdministracao
     * @return self
     */
    public function setViaAdministracao($viaAdministracao)
    {
        $this->viaAdministracao = $viaAdministracao;
        return $this;
    }

    /**
     * Gets as frequencia
     *
     * @return integer
     */
    public function getFrequencia()
    {
        return $this->frequencia;
    }

    /**
     * Sets a new frequencia
     *
     * @param integer $frequencia
     * @return self
     */
    public function setFrequencia($frequencia)
    {
        $this->frequencia = $frequencia;
        return $this;
    }


}

