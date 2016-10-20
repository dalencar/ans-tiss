<?php

namespace ans\schemes;

/**
 * Class representing CtGuiaRecursoType
 *
 * estrutura utilizada no retorno do recurso de glosa
 * XSD Type: ct_guiaRecurso
 */
class CtGuiaRecursoType
{

    /**
     * @property string $numeroProtocolo
     */
    private $numeroProtocolo = null;

    /**
     * @property string $numDemoAnalisePagto
     */
    private $numDemoAnalisePagto = null;

    /**
     * @property string $numeroGuiaRecurso
     */
    private $numeroGuiaRecurso = null;

    /**
     * @property string $numeroGuiaOrigem
     */
    private $numeroGuiaOrigem = null;

    /**
     * @property \ans\schemes\CtMotivoGlosaType[] $motivosGlosa
     */
    private $motivosGlosa = null;

    /**
     * Gets as numeroProtocolo
     *
     * @return string
     */
    public function getNumeroProtocolo()
    {
        return $this->numeroProtocolo;
    }

    /**
     * Sets a new numeroProtocolo
     *
     * @param string $numeroProtocolo
     * @return self
     */
    public function setNumeroProtocolo($numeroProtocolo)
    {
        $this->numeroProtocolo = $numeroProtocolo;
        return $this;
    }

    /**
     * Gets as numDemoAnalisePagto
     *
     * @return string
     */
    public function getNumDemoAnalisePagto()
    {
        return $this->numDemoAnalisePagto;
    }

    /**
     * Sets a new numDemoAnalisePagto
     *
     * @param string $numDemoAnalisePagto
     * @return self
     */
    public function setNumDemoAnalisePagto($numDemoAnalisePagto)
    {
        $this->numDemoAnalisePagto = $numDemoAnalisePagto;
        return $this;
    }

    /**
     * Gets as numeroGuiaRecurso
     *
     * @return string
     */
    public function getNumeroGuiaRecurso()
    {
        return $this->numeroGuiaRecurso;
    }

    /**
     * Sets a new numeroGuiaRecurso
     *
     * @param string $numeroGuiaRecurso
     * @return self
     */
    public function setNumeroGuiaRecurso($numeroGuiaRecurso)
    {
        $this->numeroGuiaRecurso = $numeroGuiaRecurso;
        return $this;
    }

    /**
     * Gets as numeroGuiaOrigem
     *
     * @return string
     */
    public function getNumeroGuiaOrigem()
    {
        return $this->numeroGuiaOrigem;
    }

    /**
     * Sets a new numeroGuiaOrigem
     *
     * @param string $numeroGuiaOrigem
     * @return self
     */
    public function setNumeroGuiaOrigem($numeroGuiaOrigem)
    {
        $this->numeroGuiaOrigem = $numeroGuiaOrigem;
        return $this;
    }

    /**
     * Adds as motivosGlosa
     *
     * @return self
     * @param \ans\schemes\CtMotivoGlosaType $motivosGlosa
     */
    public function addToMotivosGlosa(\ans\schemes\CtMotivoGlosaType $motivosGlosa)
    {
        $this->motivosGlosa[] = $motivosGlosa;
        return $this;
    }

    /**
     * isset motivosGlosa
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMotivosGlosa($index)
    {
        return isset($this->motivosGlosa[$index]);
    }

    /**
     * unset motivosGlosa
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMotivosGlosa($index)
    {
        unset($this->motivosGlosa[$index]);
    }

    /**
     * Gets as motivosGlosa
     *
     * @return \ans\schemes\CtMotivoGlosaType[]
     */
    public function getMotivosGlosa()
    {
        return $this->motivosGlosa;
    }

    /**
     * Sets a new motivosGlosa
     *
     * @param \ans\schemes\CtMotivoGlosaType[] $motivosGlosa
     * @return self
     */
    public function setMotivosGlosa(array $motivosGlosa)
    {
        $this->motivosGlosa = $motivosGlosa;
        return $this;
    }


}

