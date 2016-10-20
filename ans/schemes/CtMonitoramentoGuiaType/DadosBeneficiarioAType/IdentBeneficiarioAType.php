<?php

namespace ans\schemes\CtMonitoramentoGuiaType\DadosBeneficiarioAType;

/**
 * Class representing IdentBeneficiarioAType
 */
class IdentBeneficiarioAType
{

    /**
     * @property string $numeroCartaoNacionalSaude
     */
    private $numeroCartaoNacionalSaude = null;

    /**
     * @property
     * \ans\schemes\CtMonitoramentoGuiaType\DadosBeneficiarioAType\IdentBeneficiarioAType\DadosSemCartaoAType
     * $dadosSemCartao
     */
    private $dadosSemCartao = null;

    /**
     * Gets as numeroCartaoNacionalSaude
     *
     * @return string
     */
    public function getNumeroCartaoNacionalSaude()
    {
        return $this->numeroCartaoNacionalSaude;
    }

    /**
     * Sets a new numeroCartaoNacionalSaude
     *
     * @param string $numeroCartaoNacionalSaude
     * @return self
     */
    public function setNumeroCartaoNacionalSaude($numeroCartaoNacionalSaude)
    {
        $this->numeroCartaoNacionalSaude = $numeroCartaoNacionalSaude;
        return $this;
    }

    /**
     * Gets as dadosSemCartao
     *
     * @return
     * \ans\schemes\CtMonitoramentoGuiaType\DadosBeneficiarioAType\IdentBeneficiarioAType\DadosSemCartaoAType
     */
    public function getDadosSemCartao()
    {
        return $this->dadosSemCartao;
    }

    /**
     * Sets a new dadosSemCartao
     *
     * @param
     * \ans\schemes\CtMonitoramentoGuiaType\DadosBeneficiarioAType\IdentBeneficiarioAType\DadosSemCartaoAType
     * $dadosSemCartao
     * @return self
     */
    public function setDadosSemCartao(\ans\schemes\CtMonitoramentoGuiaType\DadosBeneficiarioAType\IdentBeneficiarioAType\DadosSemCartaoAType $dadosSemCartao)
    {
        $this->dadosSemCartao = $dadosSemCartao;
        return $this;
    }


}

