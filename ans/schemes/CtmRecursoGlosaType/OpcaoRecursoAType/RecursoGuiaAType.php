<?php

namespace ans\schemes\CtmRecursoGlosaType\OpcaoRecursoAType;

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
     * @property
     * \ans\schemes\CtmRecursoGlosaType\OpcaoRecursoAType\RecursoGuiaAType\OpcaoRecursoGuiaAType
     * $opcaoRecursoGuia
     */
    private $opcaoRecursoGuia = null;

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
     * Gets as opcaoRecursoGuia
     *
     * @return
     * \ans\schemes\CtmRecursoGlosaType\OpcaoRecursoAType\RecursoGuiaAType\OpcaoRecursoGuiaAType
     */
    public function getOpcaoRecursoGuia()
    {
        return $this->opcaoRecursoGuia;
    }

    /**
     * Sets a new opcaoRecursoGuia
     *
     * @param
     * \ans\schemes\CtmRecursoGlosaType\OpcaoRecursoAType\RecursoGuiaAType\OpcaoRecursoGuiaAType
     * $opcaoRecursoGuia
     * @return self
     */
    public function setOpcaoRecursoGuia(\ans\schemes\CtmRecursoGlosaType\OpcaoRecursoAType\RecursoGuiaAType\OpcaoRecursoGuiaAType $opcaoRecursoGuia)
    {
        $this->opcaoRecursoGuia = $opcaoRecursoGuia;
        return $this;
    }


}

