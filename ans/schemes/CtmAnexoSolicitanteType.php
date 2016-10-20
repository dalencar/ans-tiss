<?php

namespace ans\schemes;

/**
 * Class representing CtmAnexoSolicitanteType
 *
 *
 * XSD Type: ctm_anexoSolicitante
 */
class CtmAnexoSolicitanteType
{

    /**
     * @property string $nomeContratado
     */
    private $nomeContratado = null;

    /**
     * @property string $telefoneCirurgiao
     */
    private $telefoneCirurgiao = null;

    /**
     * @property string $emailCirurgiao
     */
    private $emailCirurgiao = null;

    /**
     * Gets as nomeContratado
     *
     * @return string
     */
    public function getNomeContratado()
    {
        return $this->nomeContratado;
    }

    /**
     * Sets a new nomeContratado
     *
     * @param string $nomeContratado
     * @return self
     */
    public function setNomeContratado($nomeContratado)
    {
        $this->nomeContratado = $nomeContratado;
        return $this;
    }

    /**
     * Gets as telefoneCirurgiao
     *
     * @return string
     */
    public function getTelefoneCirurgiao()
    {
        return $this->telefoneCirurgiao;
    }

    /**
     * Sets a new telefoneCirurgiao
     *
     * @param string $telefoneCirurgiao
     * @return self
     */
    public function setTelefoneCirurgiao($telefoneCirurgiao)
    {
        $this->telefoneCirurgiao = $telefoneCirurgiao;
        return $this;
    }

    /**
     * Gets as emailCirurgiao
     *
     * @return string
     */
    public function getEmailCirurgiao()
    {
        return $this->emailCirurgiao;
    }

    /**
     * Sets a new emailCirurgiao
     *
     * @param string $emailCirurgiao
     * @return self
     */
    public function setEmailCirurgiao($emailCirurgiao)
    {
        $this->emailCirurgiao = $emailCirurgiao;
        return $this;
    }


}

