<?php

namespace ans\schemes;

/**
 * Class representing CtProtocoloRecursoType
 *
 * estrutura da resposta da operadora a um lote de guias de recurso de glosa de
 * medicina e de odonto
 * XSD Type: ct_protocoloRecurso
 */
class CtProtocoloRecursoType
{

    /**
     * @property string $numeroProtocolo
     */
    private $numeroProtocolo = null;

    /**
     * @property \ans\schemes\CtMotivoGlosaType[] $glosaProtocolo
     */
    private $glosaProtocolo = null;

    /**
     * @property \ans\schemes\CtGuiaRecursoType[] $dadosGuias
     */
    private $dadosGuias = null;

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
     * Adds as glosaProtocolo
     *
     * @return self
     * @param \ans\schemes\CtMotivoGlosaType $glosaProtocolo
     */
    public function addToGlosaProtocolo(\ans\schemes\CtMotivoGlosaType $glosaProtocolo)
    {
        $this->glosaProtocolo[] = $glosaProtocolo;
        return $this;
    }

    /**
     * isset glosaProtocolo
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGlosaProtocolo($index)
    {
        return isset($this->glosaProtocolo[$index]);
    }

    /**
     * unset glosaProtocolo
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGlosaProtocolo($index)
    {
        unset($this->glosaProtocolo[$index]);
    }

    /**
     * Gets as glosaProtocolo
     *
     * @return \ans\schemes\CtMotivoGlosaType[]
     */
    public function getGlosaProtocolo()
    {
        return $this->glosaProtocolo;
    }

    /**
     * Sets a new glosaProtocolo
     *
     * @param \ans\schemes\CtMotivoGlosaType[] $glosaProtocolo
     * @return self
     */
    public function setGlosaProtocolo(array $glosaProtocolo)
    {
        $this->glosaProtocolo = $glosaProtocolo;
        return $this;
    }

    /**
     * Adds as dadosGuias
     *
     * @return self
     * @param \ans\schemes\CtGuiaRecursoType $dadosGuias
     */
    public function addToDadosGuias(\ans\schemes\CtGuiaRecursoType $dadosGuias)
    {
        $this->dadosGuias[] = $dadosGuias;
        return $this;
    }

    /**
     * isset dadosGuias
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDadosGuias($index)
    {
        return isset($this->dadosGuias[$index]);
    }

    /**
     * unset dadosGuias
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDadosGuias($index)
    {
        unset($this->dadosGuias[$index]);
    }

    /**
     * Gets as dadosGuias
     *
     * @return \ans\schemes\CtGuiaRecursoType[]
     */
    public function getDadosGuias()
    {
        return $this->dadosGuias;
    }

    /**
     * Sets a new dadosGuias
     *
     * @param \ans\schemes\CtGuiaRecursoType[] $dadosGuias
     * @return self
     */
    public function setDadosGuias(array $dadosGuias)
    {
        $this->dadosGuias = $dadosGuias;
        return $this;
    }


}

