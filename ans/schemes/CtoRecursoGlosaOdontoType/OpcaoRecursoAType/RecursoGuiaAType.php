<?php

namespace ans\schemes\CtoRecursoGlosaOdontoType\OpcaoRecursoAType;

/**
 * Class representing RecursoGuiaAType
 */
class RecursoGuiaAType
{

    /**
     * @property string $numeroGuiaOrigem
     */
    private $numeroGuiaOrigem = null;

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
     * @property
     * \ans\schemes\CtoRecursoGlosaOdontoType\OpcaoRecursoAType\RecursoGuiaAType\RecursoProcedimentoAType[]
     * $recursoProcedimento
     */
    private $recursoProcedimento = null;

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
     * Adds as recursoProcedimento
     *
     * @return self
     * @param
     * \ans\schemes\CtoRecursoGlosaOdontoType\OpcaoRecursoAType\RecursoGuiaAType\RecursoProcedimentoAType
     * $recursoProcedimento
     */
    public function addToRecursoProcedimento(\ans\schemes\CtoRecursoGlosaOdontoType\OpcaoRecursoAType\RecursoGuiaAType\RecursoProcedimentoAType $recursoProcedimento)
    {
        $this->recursoProcedimento[] = $recursoProcedimento;
        return $this;
    }

    /**
     * isset recursoProcedimento
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRecursoProcedimento($index)
    {
        return isset($this->recursoProcedimento[$index]);
    }

    /**
     * unset recursoProcedimento
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRecursoProcedimento($index)
    {
        unset($this->recursoProcedimento[$index]);
    }

    /**
     * Gets as recursoProcedimento
     *
     * @return
     * \ans\schemes\CtoRecursoGlosaOdontoType\OpcaoRecursoAType\RecursoGuiaAType\RecursoProcedimentoAType[]
     */
    public function getRecursoProcedimento()
    {
        return $this->recursoProcedimento;
    }

    /**
     * Sets a new recursoProcedimento
     *
     * @param
     * \ans\schemes\CtoRecursoGlosaOdontoType\OpcaoRecursoAType\RecursoGuiaAType\RecursoProcedimentoAType[]
     * $recursoProcedimento
     * @return self
     */
    public function setRecursoProcedimento(array $recursoProcedimento)
    {
        $this->recursoProcedimento = $recursoProcedimento;
        return $this;
    }


}

