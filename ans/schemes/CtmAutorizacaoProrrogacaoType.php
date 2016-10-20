<?php

namespace ans\schemes;

/**
 * Class representing CtmAutorizacaoProrrogacaoType
 *
 *
 * XSD Type: ctm_autorizacaoProrrogacao
 */
class CtmAutorizacaoProrrogacaoType
{

    /**
     * @property \ans\schemes\CtmAutorizacaoServicoType $autorizacaoDosServicos
     */
    private $autorizacaoDosServicos = null;

    /**
     * @property integer $diariasAutorizadas
     */
    private $diariasAutorizadas = null;

    /**
     * @property string $acomodacaoAutorizada
     */
    private $acomodacaoAutorizada = null;

    /**
     * Gets as autorizacaoDosServicos
     *
     * @return \ans\schemes\CtmAutorizacaoServicoType
     */
    public function getAutorizacaoDosServicos()
    {
        return $this->autorizacaoDosServicos;
    }

    /**
     * Sets a new autorizacaoDosServicos
     *
     * @param \ans\schemes\CtmAutorizacaoServicoType $autorizacaoDosServicos
     * @return self
     */
    public function setAutorizacaoDosServicos(\ans\schemes\CtmAutorizacaoServicoType $autorizacaoDosServicos)
    {
        $this->autorizacaoDosServicos = $autorizacaoDosServicos;
        return $this;
    }

    /**
     * Gets as diariasAutorizadas
     *
     * @return integer
     */
    public function getDiariasAutorizadas()
    {
        return $this->diariasAutorizadas;
    }

    /**
     * Sets a new diariasAutorizadas
     *
     * @param integer $diariasAutorizadas
     * @return self
     */
    public function setDiariasAutorizadas($diariasAutorizadas)
    {
        $this->diariasAutorizadas = $diariasAutorizadas;
        return $this;
    }

    /**
     * Gets as acomodacaoAutorizada
     *
     * @return string
     */
    public function getAcomodacaoAutorizada()
    {
        return $this->acomodacaoAutorizada;
    }

    /**
     * Sets a new acomodacaoAutorizada
     *
     * @param string $acomodacaoAutorizada
     * @return self
     */
    public function setAcomodacaoAutorizada($acomodacaoAutorizada)
    {
        $this->acomodacaoAutorizada = $acomodacaoAutorizada;
        return $this;
    }


}

