<?php

namespace ans\schemes;

/**
 * Class representing CtRecursoGlosaRecebimentoType
 *
 *
 * XSD Type: ct_recursoGlosaRecebimento
 */
class CtRecursoGlosaRecebimentoType
{

    /**
     * @property string $nrProtocoloRecursoGlosa
     */
    private $nrProtocoloRecursoGlosa = null;

    /**
     * @property \DateTime $dataEnvioRecurso
     */
    private $dataEnvioRecurso = null;

    /**
     * @property \DateTime $dataRecebimentoRecurso
     */
    private $dataRecebimentoRecurso = null;

    /**
     * @property string $numeroLote
     */
    private $numeroLote = null;

    /**
     * @property string $registroANS
     */
    private $registroANS = null;

    /**
     * @property \ans\schemes\CtContratadoDadosType $dadosPrestador
     */
    private $dadosPrestador = null;

    /**
     * @property string $nrProtocoloRecursado
     */
    private $nrProtocoloRecursado = null;

    /**
     * @property \ans\schemes\CtRecursoGlosaRecebimentoType\RecursoProtocoloAType
     * $recursoProtocolo
     */
    private $recursoProtocolo = null;

    /**
     * @property integer $qtGuiasRecurso
     */
    private $qtGuiasRecurso = null;

    /**
     * @property \ans\schemes\CtRecursoGlosaRecebimentoType\GuiasRecursoAType[]
     * $guiasRecurso
     */
    private $guiasRecurso = null;

    /**
     * @property string $observacao
     */
    private $observacao = null;

    /**
     * @property float $valorTotalRecursado
     */
    private $valorTotalRecursado = null;

    /**
     * Gets as nrProtocoloRecursoGlosa
     *
     * @return string
     */
    public function getNrProtocoloRecursoGlosa()
    {
        return $this->nrProtocoloRecursoGlosa;
    }

    /**
     * Sets a new nrProtocoloRecursoGlosa
     *
     * @param string $nrProtocoloRecursoGlosa
     * @return self
     */
    public function setNrProtocoloRecursoGlosa($nrProtocoloRecursoGlosa)
    {
        $this->nrProtocoloRecursoGlosa = $nrProtocoloRecursoGlosa;
        return $this;
    }

    /**
     * Gets as dataEnvioRecurso
     *
     * @return \DateTime
     */
    public function getDataEnvioRecurso()
    {
        return $this->dataEnvioRecurso;
    }

    /**
     * Sets a new dataEnvioRecurso
     *
     * @param \DateTime $dataEnvioRecurso
     * @return self
     */
    public function setDataEnvioRecurso(\DateTime $dataEnvioRecurso)
    {
        $this->dataEnvioRecurso = $dataEnvioRecurso;
        return $this;
    }

    /**
     * Gets as dataRecebimentoRecurso
     *
     * @return \DateTime
     */
    public function getDataRecebimentoRecurso()
    {
        return $this->dataRecebimentoRecurso;
    }

    /**
     * Sets a new dataRecebimentoRecurso
     *
     * @param \DateTime $dataRecebimentoRecurso
     * @return self
     */
    public function setDataRecebimentoRecurso(\DateTime $dataRecebimentoRecurso)
    {
        $this->dataRecebimentoRecurso = $dataRecebimentoRecurso;
        return $this;
    }

    /**
     * Gets as numeroLote
     *
     * @return string
     */
    public function getNumeroLote()
    {
        return $this->numeroLote;
    }

    /**
     * Sets a new numeroLote
     *
     * @param string $numeroLote
     * @return self
     */
    public function setNumeroLote($numeroLote)
    {
        $this->numeroLote = $numeroLote;
        return $this;
    }

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
     * Gets as nrProtocoloRecursado
     *
     * @return string
     */
    public function getNrProtocoloRecursado()
    {
        return $this->nrProtocoloRecursado;
    }

    /**
     * Sets a new nrProtocoloRecursado
     *
     * @param string $nrProtocoloRecursado
     * @return self
     */
    public function setNrProtocoloRecursado($nrProtocoloRecursado)
    {
        $this->nrProtocoloRecursado = $nrProtocoloRecursado;
        return $this;
    }

    /**
     * Gets as recursoProtocolo
     *
     * @return \ans\schemes\CtRecursoGlosaRecebimentoType\RecursoProtocoloAType
     */
    public function getRecursoProtocolo()
    {
        return $this->recursoProtocolo;
    }

    /**
     * Sets a new recursoProtocolo
     *
     * @param \ans\schemes\CtRecursoGlosaRecebimentoType\RecursoProtocoloAType
     * $recursoProtocolo
     * @return self
     */
    public function setRecursoProtocolo(\ans\schemes\CtRecursoGlosaRecebimentoType\RecursoProtocoloAType $recursoProtocolo)
    {
        $this->recursoProtocolo = $recursoProtocolo;
        return $this;
    }

    /**
     * Gets as qtGuiasRecurso
     *
     * @return integer
     */
    public function getQtGuiasRecurso()
    {
        return $this->qtGuiasRecurso;
    }

    /**
     * Sets a new qtGuiasRecurso
     *
     * @param integer $qtGuiasRecurso
     * @return self
     */
    public function setQtGuiasRecurso($qtGuiasRecurso)
    {
        $this->qtGuiasRecurso = $qtGuiasRecurso;
        return $this;
    }

    /**
     * Adds as guiasRecurso
     *
     * @return self
     * @param \ans\schemes\CtRecursoGlosaRecebimentoType\GuiasRecursoAType
     * $guiasRecurso
     */
    public function addToGuiasRecurso(\ans\schemes\CtRecursoGlosaRecebimentoType\GuiasRecursoAType $guiasRecurso)
    {
        $this->guiasRecurso[] = $guiasRecurso;
        return $this;
    }

    /**
     * isset guiasRecurso
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuiasRecurso($index)
    {
        return isset($this->guiasRecurso[$index]);
    }

    /**
     * unset guiasRecurso
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuiasRecurso($index)
    {
        unset($this->guiasRecurso[$index]);
    }

    /**
     * Gets as guiasRecurso
     *
     * @return \ans\schemes\CtRecursoGlosaRecebimentoType\GuiasRecursoAType[]
     */
    public function getGuiasRecurso()
    {
        return $this->guiasRecurso;
    }

    /**
     * Sets a new guiasRecurso
     *
     * @param \ans\schemes\CtRecursoGlosaRecebimentoType\GuiasRecursoAType[]
     * $guiasRecurso
     * @return self
     */
    public function setGuiasRecurso(array $guiasRecurso)
    {
        $this->guiasRecurso = $guiasRecurso;
        return $this;
    }

    /**
     * Gets as observacao
     *
     * @return string
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * Sets a new observacao
     *
     * @param string $observacao
     * @return self
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;
        return $this;
    }

    /**
     * Gets as valorTotalRecursado
     *
     * @return float
     */
    public function getValorTotalRecursado()
    {
        return $this->valorTotalRecursado;
    }

    /**
     * Sets a new valorTotalRecursado
     *
     * @param float $valorTotalRecursado
     * @return self
     */
    public function setValorTotalRecursado($valorTotalRecursado)
    {
        $this->valorTotalRecursado = $valorTotalRecursado;
        return $this;
    }


}

