<?php

namespace ans\schemes;

/**
 * Class representing CtRespostaGlosaGuiaMedicaType
 *
 *
 * XSD Type: ct_respostaGlosaGuiaMedica
 */
class CtRespostaGlosaGuiaMedicaType
{

    /**
     * @property string $numeroGuiaPrestador
     */
    private $numeroGuiaPrestador = null;

    /**
     * @property string $senha
     */
    private $senha = null;

    /**
     * @property string $codGlosa
     */
    private $codGlosa = null;

    /**
     * @property string $justificativaPrestador
     */
    private $justificativaPrestador = null;

    /**
     * @property string $recursoGuiaAcatado
     */
    private $recursoGuiaAcatado = null;

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
     * Gets as senha
     *
     * @return string
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Sets a new senha
     *
     * @param string $senha
     * @return self
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
        return $this;
    }

    /**
     * Gets as codGlosa
     *
     * @return string
     */
    public function getCodGlosa()
    {
        return $this->codGlosa;
    }

    /**
     * Sets a new codGlosa
     *
     * @param string $codGlosa
     * @return self
     */
    public function setCodGlosa($codGlosa)
    {
        $this->codGlosa = $codGlosa;
        return $this;
    }

    /**
     * Gets as justificativaPrestador
     *
     * @return string
     */
    public function getJustificativaPrestador()
    {
        return $this->justificativaPrestador;
    }

    /**
     * Sets a new justificativaPrestador
     *
     * @param string $justificativaPrestador
     * @return self
     */
    public function setJustificativaPrestador($justificativaPrestador)
    {
        $this->justificativaPrestador = $justificativaPrestador;
        return $this;
    }

    /**
     * Gets as recursoGuiaAcatado
     *
     * @return string
     */
    public function getRecursoGuiaAcatado()
    {
        return $this->recursoGuiaAcatado;
    }

    /**
     * Sets a new recursoGuiaAcatado
     *
     * @param string $recursoGuiaAcatado
     * @return self
     */
    public function setRecursoGuiaAcatado($recursoGuiaAcatado)
    {
        $this->recursoGuiaAcatado = $recursoGuiaAcatado;
        return $this;
    }


}

