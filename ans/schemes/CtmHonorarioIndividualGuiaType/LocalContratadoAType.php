<?php

namespace ans\schemes\CtmHonorarioIndividualGuiaType;

/**
 * Class representing LocalContratadoAType
 */
class LocalContratadoAType
{

    /**
     * @property
     * \ans\schemes\CtmHonorarioIndividualGuiaType\LocalContratadoAType\CodigoContratadoAType
     * $codigoContratado
     */
    private $codigoContratado = null;

    /**
     * @property string $nomeContratado
     */
    private $nomeContratado = null;

    /**
     * @property string $cnes
     */
    private $cnes = null;

    /**
     * Gets as codigoContratado
     *
     * @return
     * \ans\schemes\CtmHonorarioIndividualGuiaType\LocalContratadoAType\CodigoContratadoAType
     */
    public function getCodigoContratado()
    {
        return $this->codigoContratado;
    }

    /**
     * Sets a new codigoContratado
     *
     * @param
     * \ans\schemes\CtmHonorarioIndividualGuiaType\LocalContratadoAType\CodigoContratadoAType
     * $codigoContratado
     * @return self
     */
    public function setCodigoContratado(\ans\schemes\CtmHonorarioIndividualGuiaType\LocalContratadoAType\CodigoContratadoAType $codigoContratado)
    {
        $this->codigoContratado = $codigoContratado;
        return $this;
    }

    /**
     * Gets as nomeContratado
     *
     * @return string
     */
    public function getNomeContratado()
    {
        return $this->nomeContratado;
    }

    /**
     * Sets a new nomeContratado
     *
     * @param string $nomeContratado
     * @return self
     */
    public function setNomeContratado($nomeContratado)
    {
        $this->nomeContratado = $nomeContratado;
        return $this;
    }

    /**
     * Gets as cnes
     *
     * @return string
     */
    public function getCnes()
    {
        return $this->cnes;
    }

    /**
     * Sets a new cnes
     *
     * @param string $cnes
     * @return self
     */
    public function setCnes($cnes)
    {
        $this->cnes = $cnes;
        return $this;
    }


}

