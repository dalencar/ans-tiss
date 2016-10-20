<?php

namespace ans\schemes\CtMonitoramentoGuiaType;

/**
 * Class representing DadosBeneficiarioAType
 */
class DadosBeneficiarioAType
{

    /**
     * @property
     * \ans\schemes\CtMonitoramentoGuiaType\DadosBeneficiarioAType\IdentBeneficiarioAType
     * $identBeneficiario
     */
    private $identBeneficiario = null;

    /**
     * @property string $numeroRegistroPlano
     */
    private $numeroRegistroPlano = null;

    /**
     * Gets as identBeneficiario
     *
     * @return
     * \ans\schemes\CtMonitoramentoGuiaType\DadosBeneficiarioAType\IdentBeneficiarioAType
     */
    public function getIdentBeneficiario()
    {
        return $this->identBeneficiario;
    }

    /**
     * Sets a new identBeneficiario
     *
     * @param
     * \ans\schemes\CtMonitoramentoGuiaType\DadosBeneficiarioAType\IdentBeneficiarioAType
     * $identBeneficiario
     * @return self
     */
    public function setIdentBeneficiario(\ans\schemes\CtMonitoramentoGuiaType\DadosBeneficiarioAType\IdentBeneficiarioAType $identBeneficiario)
    {
        $this->identBeneficiario = $identBeneficiario;
        return $this;
    }

    /**
     * Gets as numeroRegistroPlano
     *
     * @return string
     */
    public function getNumeroRegistroPlano()
    {
        return $this->numeroRegistroPlano;
    }

    /**
     * Sets a new numeroRegistroPlano
     *
     * @param string $numeroRegistroPlano
     * @return self
     */
    public function setNumeroRegistroPlano($numeroRegistroPlano)
    {
        $this->numeroRegistroPlano = $numeroRegistroPlano;
        return $this;
    }


}

