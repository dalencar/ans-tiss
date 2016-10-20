<?php

namespace ans\schemes\CtmRecursoGlosaType\OpcaoRecursoAType;

/**
 * Class representing RecursoProtocoloAType
 */
class RecursoProtocoloAType
{

    /**
     * @property string $codigoGlosaProtocolo
     */
    private $codigoGlosaProtocolo = null;

    /**
     * @property string $justificativaProtocolo
     */
    private $justificativaProtocolo = null;

    /**
     * Gets as codigoGlosaProtocolo
     *
     * @return string
     */
    public function getCodigoGlosaProtocolo()
    {
        return $this->codigoGlosaProtocolo;
    }

    /**
     * Sets a new codigoGlosaProtocolo
     *
     * @param string $codigoGlosaProtocolo
     * @return self
     */
    public function setCodigoGlosaProtocolo($codigoGlosaProtocolo)
    {
        $this->codigoGlosaProtocolo = $codigoGlosaProtocolo;
        return $this;
    }

    /**
     * Gets as justificativaProtocolo
     *
     * @return string
     */
    public function getJustificativaProtocolo()
    {
        return $this->justificativaProtocolo;
    }

    /**
     * Sets a new justificativaProtocolo
     *
     * @param string $justificativaProtocolo
     * @return self
     */
    public function setJustificativaProtocolo($justificativaProtocolo)
    {
        $this->justificativaProtocolo = $justificativaProtocolo;
        return $this;
    }


}

