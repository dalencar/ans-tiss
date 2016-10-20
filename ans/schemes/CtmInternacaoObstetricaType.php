<?php

namespace ans\schemes;

/**
 * Class representing CtmInternacaoObstetricaType
 *
 *
 * XSD Type: ctm_internacaoObstetrica
 */
class CtmInternacaoObstetricaType
{

    /**
     * @property boolean $emGestacao
     */
    private $emGestacao = null;

    /**
     * @property boolean $transtornoMaterno
     */
    private $transtornoMaterno = null;

    /**
     * @property boolean $complicacaoPuerperio
     */
    private $complicacaoPuerperio = null;

    /**
     * @property boolean $atendimentoRNSalaParto
     */
    private $atendimentoRNSalaParto = null;

    /**
     * @property boolean $complicacaoNeonatal
     */
    private $complicacaoNeonatal = null;

    /**
     * @property boolean $baixoPeso
     */
    private $baixoPeso = null;

    /**
     * @property \ans\schemes\CtmInternacaoObstetricaType\TipoPartoAType $tipoParto
     */
    private $tipoParto = null;

    /**
     * Gets as emGestacao
     *
     * @return boolean
     */
    public function getEmGestacao()
    {
        return $this->emGestacao;
    }

    /**
     * Sets a new emGestacao
     *
     * @param boolean $emGestacao
     * @return self
     */
    public function setEmGestacao($emGestacao)
    {
        $this->emGestacao = $emGestacao;
        return $this;
    }

    /**
     * Gets as transtornoMaterno
     *
     * @return boolean
     */
    public function getTranstornoMaterno()
    {
        return $this->transtornoMaterno;
    }

    /**
     * Sets a new transtornoMaterno
     *
     * @param boolean $transtornoMaterno
     * @return self
     */
    public function setTranstornoMaterno($transtornoMaterno)
    {
        $this->transtornoMaterno = $transtornoMaterno;
        return $this;
    }

    /**
     * Gets as complicacaoPuerperio
     *
     * @return boolean
     */
    public function getComplicacaoPuerperio()
    {
        return $this->complicacaoPuerperio;
    }

    /**
     * Sets a new complicacaoPuerperio
     *
     * @param boolean $complicacaoPuerperio
     * @return self
     */
    public function setComplicacaoPuerperio($complicacaoPuerperio)
    {
        $this->complicacaoPuerperio = $complicacaoPuerperio;
        return $this;
    }

    /**
     * Gets as atendimentoRNSalaParto
     *
     * @return boolean
     */
    public function getAtendimentoRNSalaParto()
    {
        return $this->atendimentoRNSalaParto;
    }

    /**
     * Sets a new atendimentoRNSalaParto
     *
     * @param boolean $atendimentoRNSalaParto
     * @return self
     */
    public function setAtendimentoRNSalaParto($atendimentoRNSalaParto)
    {
        $this->atendimentoRNSalaParto = $atendimentoRNSalaParto;
        return $this;
    }

    /**
     * Gets as complicacaoNeonatal
     *
     * @return boolean
     */
    public function getComplicacaoNeonatal()
    {
        return $this->complicacaoNeonatal;
    }

    /**
     * Sets a new complicacaoNeonatal
     *
     * @param boolean $complicacaoNeonatal
     * @return self
     */
    public function setComplicacaoNeonatal($complicacaoNeonatal)
    {
        $this->complicacaoNeonatal = $complicacaoNeonatal;
        return $this;
    }

    /**
     * Gets as baixoPeso
     *
     * @return boolean
     */
    public function getBaixoPeso()
    {
        return $this->baixoPeso;
    }

    /**
     * Sets a new baixoPeso
     *
     * @param boolean $baixoPeso
     * @return self
     */
    public function setBaixoPeso($baixoPeso)
    {
        $this->baixoPeso = $baixoPeso;
        return $this;
    }

    /**
     * Gets as tipoParto
     *
     * @return \ans\schemes\CtmInternacaoObstetricaType\TipoPartoAType
     */
    public function getTipoParto()
    {
        return $this->tipoParto;
    }

    /**
     * Sets a new tipoParto
     *
     * @param \ans\schemes\CtmInternacaoObstetricaType\TipoPartoAType $tipoParto
     * @return self
     */
    public function setTipoParto(\ans\schemes\CtmInternacaoObstetricaType\TipoPartoAType $tipoParto)
    {
        $this->tipoParto = $tipoParto;
        return $this;
    }


}

