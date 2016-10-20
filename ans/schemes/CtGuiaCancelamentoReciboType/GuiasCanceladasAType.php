<?php

namespace ans\schemes\CtGuiaCancelamentoReciboType;

/**
 * Class representing GuiasCanceladasAType
 */
class GuiasCanceladasAType
{

    /**
     * @property
     * \ans\schemes\CtGuiaCancelamentoReciboType\GuiasCanceladasAType\DadosGuiaAType[]
     * $dadosGuia
     */
    private $dadosGuia = null;

    /**
     * Adds as dadosGuia
     *
     * @return self
     * @param
     * \ans\schemes\CtGuiaCancelamentoReciboType\GuiasCanceladasAType\DadosGuiaAType
     * $dadosGuia
     */
    public function addToDadosGuia(\ans\schemes\CtGuiaCancelamentoReciboType\GuiasCanceladasAType\DadosGuiaAType $dadosGuia)
    {
        $this->dadosGuia[] = $dadosGuia;
        return $this;
    }

    /**
     * isset dadosGuia
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDadosGuia($index)
    {
        return isset($this->dadosGuia[$index]);
    }

    /**
     * unset dadosGuia
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDadosGuia($index)
    {
        unset($this->dadosGuia[$index]);
    }

    /**
     * Gets as dadosGuia
     *
     * @return
     * \ans\schemes\CtGuiaCancelamentoReciboType\GuiasCanceladasAType\DadosGuiaAType[]
     */
    public function getDadosGuia()
    {
        return $this->dadosGuia;
    }

    /**
     * Sets a new dadosGuia
     *
     * @param
     * \ans\schemes\CtGuiaCancelamentoReciboType\GuiasCanceladasAType\DadosGuiaAType[]
     * $dadosGuia
     * @return self
     */
    public function setDadosGuia(array $dadosGuia)
    {
        $this->dadosGuia = $dadosGuia;
        return $this;
    }


}

