<?php

namespace ans\schemes;

/**
 * Class representing CtRespostaRecursoItemOdontoType
 *
 *
 * XSD Type: ct_respostaRecursoItemOdonto
 */
class CtRespostaRecursoItemOdontoType
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
     * @property
     * \ans\schemes\CtRespostaRecursoItemOdontoType\RecursoProcedimentoAType[]
     * $recursoProcedimento
     */
    private $recursoProcedimento = null;

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
     * Adds as recursoProcedimento
     *
     * @return self
     * @param \ans\schemes\CtRespostaRecursoItemOdontoType\RecursoProcedimentoAType
     * $recursoProcedimento
     */
    public function addToRecursoProcedimento(\ans\schemes\CtRespostaRecursoItemOdontoType\RecursoProcedimentoAType $recursoProcedimento)
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
     * @return \ans\schemes\CtRespostaRecursoItemOdontoType\RecursoProcedimentoAType[]
     */
    public function getRecursoProcedimento()
    {
        return $this->recursoProcedimento;
    }

    /**
     * Sets a new recursoProcedimento
     *
     * @param \ans\schemes\CtRespostaRecursoItemOdontoType\RecursoProcedimentoAType[]
     * $recursoProcedimento
     * @return self
     */
    public function setRecursoProcedimento(array $recursoProcedimento)
    {
        $this->recursoProcedimento = $recursoProcedimento;
        return $this;
    }


}

