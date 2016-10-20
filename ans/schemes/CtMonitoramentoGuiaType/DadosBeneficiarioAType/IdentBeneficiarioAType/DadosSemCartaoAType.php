<?php

namespace ans\schemes\CtMonitoramentoGuiaType\DadosBeneficiarioAType\IdentBeneficiarioAType;

/**
 * Class representing DadosSemCartaoAType
 */
class DadosSemCartaoAType
{

    /**
     * @property string $sexo
     */
    private $sexo = null;

    /**
     * @property \DateTime $dataNascimento
     */
    private $dataNascimento = null;

    /**
     * @property string $municipioResidencia
     */
    private $municipioResidencia = null;

    /**
     * Gets as sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Sets a new sexo
     *
     * @param string $sexo
     * @return self
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
        return $this;
    }

    /**
     * Gets as dataNascimento
     *
     * @return \DateTime
     */
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    /**
     * Sets a new dataNascimento
     *
     * @param \DateTime $dataNascimento
     * @return self
     */
    public function setDataNascimento(\DateTime $dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
        return $this;
    }

    /**
     * Gets as municipioResidencia
     *
     * @return string
     */
    public function getMunicipioResidencia()
    {
        return $this->municipioResidencia;
    }

    /**
     * Sets a new municipioResidencia
     *
     * @param string $municipioResidencia
     * @return self
     */
    public function setMunicipioResidencia($municipioResidencia)
    {
        $this->municipioResidencia = $municipioResidencia;
        return $this;
    }


}

