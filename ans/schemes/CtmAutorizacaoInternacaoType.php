<?php

namespace ans\schemes;

/**
 * Class representing CtmAutorizacaoInternacaoType
 *
 *
 * XSD Type: ctm_autorizacaoInternacao
 */
class CtmAutorizacaoInternacaoType
{

    /**
     * @property \ans\schemes\CtmAutorizacaoServicoType $autorizacaoDosServicos
     */
    private $autorizacaoDosServicos = null;

    /**
     * @property \DateTime $dataProvavelAdmissao
     */
    private $dataProvavelAdmissao = null;

    /**
     * @property integer $qtdDiariasAutorizadas
     */
    private $qtdDiariasAutorizadas = null;

    /**
     * @property string $tipoAcomodacaoAutorizada
     */
    private $tipoAcomodacaoAutorizada = null;

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
     * Gets as dataProvavelAdmissao
     *
     * @return \DateTime
     */
    public function getDataProvavelAdmissao()
    {
        return $this->dataProvavelAdmissao;
    }

    /**
     * Sets a new dataProvavelAdmissao
     *
     * @param \DateTime $dataProvavelAdmissao
     * @return self
     */
    public function setDataProvavelAdmissao(\DateTime $dataProvavelAdmissao)
    {
        $this->dataProvavelAdmissao = $dataProvavelAdmissao;
        return $this;
    }

    /**
     * Gets as qtdDiariasAutorizadas
     *
     * @return integer
     */
    public function getQtdDiariasAutorizadas()
    {
        return $this->qtdDiariasAutorizadas;
    }

    /**
     * Sets a new qtdDiariasAutorizadas
     *
     * @param integer $qtdDiariasAutorizadas
     * @return self
     */
    public function setQtdDiariasAutorizadas($qtdDiariasAutorizadas)
    {
        $this->qtdDiariasAutorizadas = $qtdDiariasAutorizadas;
        return $this;
    }

    /**
     * Gets as tipoAcomodacaoAutorizada
     *
     * @return string
     */
    public function getTipoAcomodacaoAutorizada()
    {
        return $this->tipoAcomodacaoAutorizada;
    }

    /**
     * Sets a new tipoAcomodacaoAutorizada
     *
     * @param string $tipoAcomodacaoAutorizada
     * @return self
     */
    public function setTipoAcomodacaoAutorizada($tipoAcomodacaoAutorizada)
    {
        $this->tipoAcomodacaoAutorizada = $tipoAcomodacaoAutorizada;
        return $this;
    }


}

