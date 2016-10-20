<?php

namespace ans\schemes\CtmInternacaoDadosType;

/**
 * Class representing DeclaracoesAType
 */
class DeclaracoesAType
{

    /**
     * @property string $declaracaoNascido
     */
    private $declaracaoNascido = null;

    /**
     * @property string $diagnosticoObito
     */
    private $diagnosticoObito = null;

    /**
     * @property string $declaracaoObito
     */
    private $declaracaoObito = null;

    /**
     * @property string $indicadorDORN
     */
    private $indicadorDORN = null;

    /**
     * Gets as declaracaoNascido
     *
     * @return string
     */
    public function getDeclaracaoNascido()
    {
        return $this->declaracaoNascido;
    }

    /**
     * Sets a new declaracaoNascido
     *
     * @param string $declaracaoNascido
     * @return self
     */
    public function setDeclaracaoNascido($declaracaoNascido)
    {
        $this->declaracaoNascido = $declaracaoNascido;
        return $this;
    }

    /**
     * Gets as diagnosticoObito
     *
     * @return string
     */
    public function getDiagnosticoObito()
    {
        return $this->diagnosticoObito;
    }

    /**
     * Sets a new diagnosticoObito
     *
     * @param string $diagnosticoObito
     * @return self
     */
    public function setDiagnosticoObito($diagnosticoObito)
    {
        $this->diagnosticoObito = $diagnosticoObito;
        return $this;
    }

    /**
     * Gets as declaracaoObito
     *
     * @return string
     */
    public function getDeclaracaoObito()
    {
        return $this->declaracaoObito;
    }

    /**
     * Sets a new declaracaoObito
     *
     * @param string $declaracaoObito
     * @return self
     */
    public function setDeclaracaoObito($declaracaoObito)
    {
        $this->declaracaoObito = $declaracaoObito;
        return $this;
    }

    /**
     * Gets as indicadorDORN
     *
     * @return string
     */
    public function getIndicadorDORN()
    {
        return $this->indicadorDORN;
    }

    /**
     * Sets a new indicadorDORN
     *
     * @param string $indicadorDORN
     * @return self
     */
    public function setIndicadorDORN($indicadorDORN)
    {
        $this->indicadorDORN = $indicadorDORN;
        return $this;
    }


}

