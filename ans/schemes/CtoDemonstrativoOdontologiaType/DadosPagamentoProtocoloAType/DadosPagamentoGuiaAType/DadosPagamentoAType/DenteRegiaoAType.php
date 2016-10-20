<?php

namespace ans\schemes\CtoDemonstrativoOdontologiaType\DadosPagamentoProtocoloAType\DadosPagamentoGuiaAType\DadosPagamentoAType;

/**
 * Class representing DenteRegiaoAType
 */
class DenteRegiaoAType
{

    /**
     * @property string $codDente
     */
    private $codDente = null;

    /**
     * @property string $codRegiao
     */
    private $codRegiao = null;

    /**
     * Gets as codDente
     *
     * @return string
     */
    public function getCodDente()
    {
        return $this->codDente;
    }

    /**
     * Sets a new codDente
     *
     * @param string $codDente
     * @return self
     */
    public function setCodDente($codDente)
    {
        $this->codDente = $codDente;
        return $this;
    }

    /**
     * Gets as codRegiao
     *
     * @return string
     */
    public function getCodRegiao()
    {
        return $this->codRegiao;
    }

    /**
     * Sets a new codRegiao
     *
     * @param string $codRegiao
     * @return self
     */
    public function setCodRegiao($codRegiao)
    {
        $this->codRegiao = $codRegiao;
        return $this;
    }


}

