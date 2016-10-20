<?php

namespace ans\schemes\CabecalhoTransacaoType;

/**
 * Class representing IdentificacaoTransacaoAType
 */
class IdentificacaoTransacaoAType
{

    /**
     * @property string $tipoTransacao
     */
    private $tipoTransacao = null;

    /**
     * @property string $numeroLote
     */
    private $numeroLote = null;

    /**
     * @property string $competenciaLote
     */
    private $competenciaLote = null;

    /**
     * @property \DateTime $dataRegistroTransacao
     */
    private $dataRegistroTransacao = null;

    /**
     * @property \DateTime $horaRegistroTransacao
     */
    private $horaRegistroTransacao = null;

    /**
     * Gets as tipoTransacao
     *
     * @return string
     */
    public function getTipoTransacao()
    {
        return $this->tipoTransacao;
    }

    /**
     * Sets a new tipoTransacao
     *
     * @param string $tipoTransacao
     * @return self
     */
    public function setTipoTransacao($tipoTransacao)
    {
        $this->tipoTransacao = $tipoTransacao;
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
     * Gets as competenciaLote
     *
     * @return string
     */
    public function getCompetenciaLote()
    {
        return $this->competenciaLote;
    }

    /**
     * Sets a new competenciaLote
     *
     * @param string $competenciaLote
     * @return self
     */
    public function setCompetenciaLote($competenciaLote)
    {
        $this->competenciaLote = $competenciaLote;
        return $this;
    }

    /**
     * Gets as dataRegistroTransacao
     *
     * @return \DateTime
     */
    public function getDataRegistroTransacao()
    {
        return $this->dataRegistroTransacao;
    }

    /**
     * Sets a new dataRegistroTransacao
     *
     * @param \DateTime $dataRegistroTransacao
     * @return self
     */
    public function setDataRegistroTransacao(\DateTime $dataRegistroTransacao)
    {
        $this->dataRegistroTransacao = $dataRegistroTransacao;
        return $this;
    }

    /**
     * Gets as horaRegistroTransacao
     *
     * @return \DateTime
     */
    public function getHoraRegistroTransacao()
    {
        return $this->horaRegistroTransacao;
    }

    /**
     * Sets a new horaRegistroTransacao
     *
     * @param \DateTime $horaRegistroTransacao
     * @return self
     */
    public function setHoraRegistroTransacao(\DateTime $horaRegistroTransacao)
    {
        $this->horaRegistroTransacao = $horaRegistroTransacao;
        return $this;
    }


}

