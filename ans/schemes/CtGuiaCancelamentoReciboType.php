<?php

namespace ans\schemes;

/**
 * Class representing CtGuiaCancelamentoReciboType
 *
 *
 * XSD Type: ct_guiaCancelamentoRecibo
 */
class CtGuiaCancelamentoReciboType
{

    /**
     * @property string $registroANS
     */
    private $registroANS = null;

    /**
     * @property \ans\schemes\CtContratadoDadosType $dadosPrestador
     */
    private $dadosPrestador = null;

    /**
     * @property
     * \ans\schemes\CtGuiaCancelamentoReciboType\GuiasCanceladasAType\DadosGuiaAType[]
     * $guiasCanceladas
     */
    private $guiasCanceladas = null;

    /**
     * Gets as registroANS
     *
     * @return string
     */
    public function getRegistroANS()
    {
        return $this->registroANS;
    }

    /**
     * Sets a new registroANS
     *
     * @param string $registroANS
     * @return self
     */
    public function setRegistroANS($registroANS)
    {
        $this->registroANS = $registroANS;
        return $this;
    }

    /**
     * Gets as dadosPrestador
     *
     * @return \ans\schemes\CtContratadoDadosType
     */
    public function getDadosPrestador()
    {
        return $this->dadosPrestador;
    }

    /**
     * Sets a new dadosPrestador
     *
     * @param \ans\schemes\CtContratadoDadosType $dadosPrestador
     * @return self
     */
    public function setDadosPrestador(\ans\schemes\CtContratadoDadosType $dadosPrestador)
    {
        $this->dadosPrestador = $dadosPrestador;
        return $this;
    }

    /**
     * Adds as dadosGuia
     *
     * @return self
     * @param
     * \ans\schemes\CtGuiaCancelamentoReciboType\GuiasCanceladasAType\DadosGuiaAType
     * $dadosGuia
     */
    public function addToGuiasCanceladas(\ans\schemes\CtGuiaCancelamentoReciboType\GuiasCanceladasAType\DadosGuiaAType $dadosGuia)
    {
        $this->guiasCanceladas[] = $dadosGuia;
        return $this;
    }

    /**
     * isset guiasCanceladas
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuiasCanceladas($index)
    {
        return isset($this->guiasCanceladas[$index]);
    }

    /**
     * unset guiasCanceladas
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuiasCanceladas($index)
    {
        unset($this->guiasCanceladas[$index]);
    }

    /**
     * Gets as guiasCanceladas
     *
     * @return
     * \ans\schemes\CtGuiaCancelamentoReciboType\GuiasCanceladasAType\DadosGuiaAType[]
     */
    public function getGuiasCanceladas()
    {
        return $this->guiasCanceladas;
    }

    /**
     * Sets a new guiasCanceladas
     *
     * @param
     * \ans\schemes\CtGuiaCancelamentoReciboType\GuiasCanceladasAType\DadosGuiaAType[]
     * $guiasCanceladas
     * @return self
     */
    public function setGuiasCanceladas(array $guiasCanceladas)
    {
        $this->guiasCanceladas = $guiasCanceladas;
        return $this;
    }


}

