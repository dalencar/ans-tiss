<?php

namespace ans\schemes\CtRespostaGlosaType;

/**
 * Class representing ReciboGlosaStatusAType
 */
class ReciboGlosaStatusAType
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
     * @property string $nrProtocoloSituacaoRecursoGlosa
     */
    private $nrProtocoloSituacaoRecursoGlosa = null;

    /**
     * @property \DateTime $dataSituacao
     */
    private $dataSituacao = null;

    /**
     * @property string $situacaoProtocolo
     */
    private $situacaoProtocolo = null;

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
     * Gets as nrProtocoloSituacaoRecursoGlosa
     *
     * @return string
     */
    public function getNrProtocoloSituacaoRecursoGlosa()
    {
        return $this->nrProtocoloSituacaoRecursoGlosa;
    }

    /**
     * Sets a new nrProtocoloSituacaoRecursoGlosa
     *
     * @param string $nrProtocoloSituacaoRecursoGlosa
     * @return self
     */
    public function setNrProtocoloSituacaoRecursoGlosa($nrProtocoloSituacaoRecursoGlosa)
    {
        $this->nrProtocoloSituacaoRecursoGlosa = $nrProtocoloSituacaoRecursoGlosa;
        return $this;
    }

    /**
     * Gets as dataSituacao
     *
     * @return \DateTime
     */
    public function getDataSituacao()
    {
        return $this->dataSituacao;
    }

    /**
     * Sets a new dataSituacao
     *
     * @param \DateTime $dataSituacao
     * @return self
     */
    public function setDataSituacao(\DateTime $dataSituacao)
    {
        $this->dataSituacao = $dataSituacao;
        return $this;
    }

    /**
     * Gets as situacaoProtocolo
     *
     * @return string
     */
    public function getSituacaoProtocolo()
    {
        return $this->situacaoProtocolo;
    }

    /**
     * Sets a new situacaoProtocolo
     *
     * @param string $situacaoProtocolo
     * @return self
     */
    public function setSituacaoProtocolo($situacaoProtocolo)
    {
        $this->situacaoProtocolo = $situacaoProtocolo;
        return $this;
    }


}

