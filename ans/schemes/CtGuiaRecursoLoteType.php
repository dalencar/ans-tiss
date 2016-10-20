<?php

namespace ans\schemes;

/**
 * Class representing CtGuiaRecursoLoteType
 *
 * lote de recurso de glosa
 * XSD Type: ct_guiaRecursoLote
 */
class CtGuiaRecursoLoteType
{

    /**
     * @property \ans\schemes\CtoRecursoGlosaOdontoType[] $guiaRecursoGlosaOdonto
     */
    private $guiaRecursoGlosaOdonto = null;

    /**
     * @property \ans\schemes\CtmRecursoGlosaType[] $guiaRecursoGlosa
     */
    private $guiaRecursoGlosa = null;

    /**
     * Adds as guiaRecursoGlosaOdonto
     *
     * @return self
     * @param \ans\schemes\CtoRecursoGlosaOdontoType $guiaRecursoGlosaOdonto
     */
    public function addToGuiaRecursoGlosaOdonto(\ans\schemes\CtoRecursoGlosaOdontoType $guiaRecursoGlosaOdonto)
    {
        $this->guiaRecursoGlosaOdonto[] = $guiaRecursoGlosaOdonto;
        return $this;
    }

    /**
     * isset guiaRecursoGlosaOdonto
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuiaRecursoGlosaOdonto($index)
    {
        return isset($this->guiaRecursoGlosaOdonto[$index]);
    }

    /**
     * unset guiaRecursoGlosaOdonto
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuiaRecursoGlosaOdonto($index)
    {
        unset($this->guiaRecursoGlosaOdonto[$index]);
    }

    /**
     * Gets as guiaRecursoGlosaOdonto
     *
     * @return \ans\schemes\CtoRecursoGlosaOdontoType[]
     */
    public function getGuiaRecursoGlosaOdonto()
    {
        return $this->guiaRecursoGlosaOdonto;
    }

    /**
     * Sets a new guiaRecursoGlosaOdonto
     *
     * @param \ans\schemes\CtoRecursoGlosaOdontoType[] $guiaRecursoGlosaOdonto
     * @return self
     */
    public function setGuiaRecursoGlosaOdonto(array $guiaRecursoGlosaOdonto)
    {
        $this->guiaRecursoGlosaOdonto = $guiaRecursoGlosaOdonto;
        return $this;
    }

    /**
     * Adds as guiaRecursoGlosa
     *
     * @return self
     * @param \ans\schemes\CtmRecursoGlosaType $guiaRecursoGlosa
     */
    public function addToGuiaRecursoGlosa(\ans\schemes\CtmRecursoGlosaType $guiaRecursoGlosa)
    {
        $this->guiaRecursoGlosa[] = $guiaRecursoGlosa;
        return $this;
    }

    /**
     * isset guiaRecursoGlosa
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuiaRecursoGlosa($index)
    {
        return isset($this->guiaRecursoGlosa[$index]);
    }

    /**
     * unset guiaRecursoGlosa
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuiaRecursoGlosa($index)
    {
        unset($this->guiaRecursoGlosa[$index]);
    }

    /**
     * Gets as guiaRecursoGlosa
     *
     * @return \ans\schemes\CtmRecursoGlosaType[]
     */
    public function getGuiaRecursoGlosa()
    {
        return $this->guiaRecursoGlosa;
    }

    /**
     * Sets a new guiaRecursoGlosa
     *
     * @param \ans\schemes\CtmRecursoGlosaType[] $guiaRecursoGlosa
     * @return self
     */
    public function setGuiaRecursoGlosa(array $guiaRecursoGlosa)
    {
        $this->guiaRecursoGlosa = $guiaRecursoGlosa;
        return $this;
    }


}

