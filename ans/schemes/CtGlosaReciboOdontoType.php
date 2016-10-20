<?php

namespace ans\schemes;

/**
 * Class representing CtGlosaReciboOdontoType
 *
 * retorno do recurso de glosa de odonto
 * XSD Type: ct_glosaReciboOdonto
 */
class CtGlosaReciboOdontoType
{

    /**
     * @property string $registroANS
     */
    private $registroANS = null;

    /**
     * @property string $numeroGuiaPrestador
     */
    private $numeroGuiaPrestador = null;

    /**
     * @property string $nomeOperadora
     */
    private $nomeOperadora = null;

    /**
     * @property string $numeroGuiaOperadora
     */
    private $numeroGuiaOperadora = null;

    /**
     * @property string $objetoRecurso
     */
    private $objetoRecurso = null;

    /**
     * @property \ans\schemes\CtGlosaReciboOdontoType\DadosContratadoAType
     * $dadosContratado
     */
    private $dadosContratado = null;

    /**
     * @property integer $numeroDemoPagamentoOdonto
     */
    private $numeroDemoPagamentoOdonto = null;

    /**
     * @property integer $numeroLote
     */
    private $numeroLote = null;

    /**
     * @property integer $numeroProtocolo
     */
    private $numeroProtocolo = null;

    /**
     * @property \ans\schemes\CtGlosaReciboOdontoType\OpcaoRecursoAType $opcaoRecurso
     */
    private $opcaoRecurso = null;

    /**
     * @property \DateTime $dataRecurso
     */
    private $dataRecurso = null;

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
     * Gets as numeroGuiaPrestador
     *
     * @return string
     */
    public function getNumeroGuiaPrestador()
    {
        return $this->numeroGuiaPrestador;
    }

    /**
     * Sets a new numeroGuiaPrestador
     *
     * @param string $numeroGuiaPrestador
     * @return self
     */
    public function setNumeroGuiaPrestador($numeroGuiaPrestador)
    {
        $this->numeroGuiaPrestador = $numeroGuiaPrestador;
        return $this;
    }

    /**
     * Gets as nomeOperadora
     *
     * @return string
     */
    public function getNomeOperadora()
    {
        return $this->nomeOperadora;
    }

    /**
     * Sets a new nomeOperadora
     *
     * @param string $nomeOperadora
     * @return self
     */
    public function setNomeOperadora($nomeOperadora)
    {
        $this->nomeOperadora = $nomeOperadora;
        return $this;
    }

    /**
     * Gets as numeroGuiaOperadora
     *
     * @return string
     */
    public function getNumeroGuiaOperadora()
    {
        return $this->numeroGuiaOperadora;
    }

    /**
     * Sets a new numeroGuiaOperadora
     *
     * @param string $numeroGuiaOperadora
     * @return self
     */
    public function setNumeroGuiaOperadora($numeroGuiaOperadora)
    {
        $this->numeroGuiaOperadora = $numeroGuiaOperadora;
        return $this;
    }

    /**
     * Gets as objetoRecurso
     *
     * @return string
     */
    public function getObjetoRecurso()
    {
        return $this->objetoRecurso;
    }

    /**
     * Sets a new objetoRecurso
     *
     * @param string $objetoRecurso
     * @return self
     */
    public function setObjetoRecurso($objetoRecurso)
    {
        $this->objetoRecurso = $objetoRecurso;
        return $this;
    }

    /**
     * Gets as dadosContratado
     *
     * @return \ans\schemes\CtGlosaReciboOdontoType\DadosContratadoAType
     */
    public function getDadosContratado()
    {
        return $this->dadosContratado;
    }

    /**
     * Sets a new dadosContratado
     *
     * @param \ans\schemes\CtGlosaReciboOdontoType\DadosContratadoAType
     * $dadosContratado
     * @return self
     */
    public function setDadosContratado(\ans\schemes\CtGlosaReciboOdontoType\DadosContratadoAType $dadosContratado)
    {
        $this->dadosContratado = $dadosContratado;
        return $this;
    }

    /**
     * Gets as numeroDemoPagamentoOdonto
     *
     * @return integer
     */
    public function getNumeroDemoPagamentoOdonto()
    {
        return $this->numeroDemoPagamentoOdonto;
    }

    /**
     * Sets a new numeroDemoPagamentoOdonto
     *
     * @param integer $numeroDemoPagamentoOdonto
     * @return self
     */
    public function setNumeroDemoPagamentoOdonto($numeroDemoPagamentoOdonto)
    {
        $this->numeroDemoPagamentoOdonto = $numeroDemoPagamentoOdonto;
        return $this;
    }

    /**
     * Gets as numeroLote
     *
     * @return integer
     */
    public function getNumeroLote()
    {
        return $this->numeroLote;
    }

    /**
     * Sets a new numeroLote
     *
     * @param integer $numeroLote
     * @return self
     */
    public function setNumeroLote($numeroLote)
    {
        $this->numeroLote = $numeroLote;
        return $this;
    }

    /**
     * Gets as numeroProtocolo
     *
     * @return integer
     */
    public function getNumeroProtocolo()
    {
        return $this->numeroProtocolo;
    }

    /**
     * Sets a new numeroProtocolo
     *
     * @param integer $numeroProtocolo
     * @return self
     */
    public function setNumeroProtocolo($numeroProtocolo)
    {
        $this->numeroProtocolo = $numeroProtocolo;
        return $this;
    }

    /**
     * Gets as opcaoRecurso
     *
     * @return \ans\schemes\CtGlosaReciboOdontoType\OpcaoRecursoAType
     */
    public function getOpcaoRecurso()
    {
        return $this->opcaoRecurso;
    }

    /**
     * Sets a new opcaoRecurso
     *
     * @param \ans\schemes\CtGlosaReciboOdontoType\OpcaoRecursoAType $opcaoRecurso
     * @return self
     */
    public function setOpcaoRecurso(\ans\schemes\CtGlosaReciboOdontoType\OpcaoRecursoAType $opcaoRecurso)
    {
        $this->opcaoRecurso = $opcaoRecurso;
        return $this;
    }

    /**
     * Gets as dataRecurso
     *
     * @return \DateTime
     */
    public function getDataRecurso()
    {
        return $this->dataRecurso;
    }

    /**
     * Sets a new dataRecurso
     *
     * @param \DateTime $dataRecurso
     * @return self
     */
    public function setDataRecurso(\DateTime $dataRecurso)
    {
        $this->dataRecurso = $dataRecurso;
        return $this;
    }


}

