<?php

namespace ans\schemes;

/**
 * Class representing CtRespostaRecursoGuiaOdontoType
 *
 *
 * XSD Type: ct_respostaRecursoGuiaOdonto
 */
class CtRespostaRecursoGuiaOdontoType
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
     * @property string $nomeBeneficiario
     */
    private $nomeBeneficiario = null;

    /**
     * @property string $codGlosaGuia
     */
    private $codGlosaGuia = null;

    /**
     * @property string $justificativaGuia
     */
    private $justificativaGuia = null;

    /**
     * @property string $recursoAcatadoGuia
     */
    private $recursoAcatadoGuia = null;

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
     * Gets as nomeBeneficiario
     *
     * @return string
     */
    public function getNomeBeneficiario()
    {
        return $this->nomeBeneficiario;
    }

    /**
     * Sets a new nomeBeneficiario
     *
     * @param string $nomeBeneficiario
     * @return self
     */
    public function setNomeBeneficiario($nomeBeneficiario)
    {
        $this->nomeBeneficiario = $nomeBeneficiario;
        return $this;
    }

    /**
     * Gets as codGlosaGuia
     *
     * @return string
     */
    public function getCodGlosaGuia()
    {
        return $this->codGlosaGuia;
    }

    /**
     * Sets a new codGlosaGuia
     *
     * @param string $codGlosaGuia
     * @return self
     */
    public function setCodGlosaGuia($codGlosaGuia)
    {
        $this->codGlosaGuia = $codGlosaGuia;
        return $this;
    }

    /**
     * Gets as justificativaGuia
     *
     * @return string
     */
    public function getJustificativaGuia()
    {
        return $this->justificativaGuia;
    }

    /**
     * Sets a new justificativaGuia
     *
     * @param string $justificativaGuia
     * @return self
     */
    public function setJustificativaGuia($justificativaGuia)
    {
        $this->justificativaGuia = $justificativaGuia;
        return $this;
    }

    /**
     * Gets as recursoAcatadoGuia
     *
     * @return string
     */
    public function getRecursoAcatadoGuia()
    {
        return $this->recursoAcatadoGuia;
    }

    /**
     * Sets a new recursoAcatadoGuia
     *
     * @param string $recursoAcatadoGuia
     * @return self
     */
    public function setRecursoAcatadoGuia($recursoAcatadoGuia)
    {
        $this->recursoAcatadoGuia = $recursoAcatadoGuia;
        return $this;
    }


}

