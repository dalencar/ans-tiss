<?php

namespace ans\schemes;

/**
 * Class representing ComunicacaoBeneficiarioWS
 */
class ComunicacaoBeneficiarioWS
{

    /**
     * @property \ans\schemes\CabecalhoTransacaoType $cabecalho
     */
    private $cabecalho = null;

    /**
     * @property \ans\schemes\CtmBeneficiarioComunicacaoType $comunicacaoBeneficiario
     */
    private $comunicacaoBeneficiario = null;

    /**
     * @property string $hash
     */
    private $hash = null;

    /**
     * Gets as cabecalho
     *
     * @return \ans\schemes\CabecalhoTransacaoType
     */
    public function getCabecalho()
    {
        return $this->cabecalho;
    }

    /**
     * Sets a new cabecalho
     *
     * @param \ans\schemes\CabecalhoTransacaoType $cabecalho
     * @return self
     */
    public function setCabecalho(\ans\schemes\CabecalhoTransacaoType $cabecalho)
    {
        $this->cabecalho = $cabecalho;
        return $this;
    }

    /**
     * Gets as comunicacaoBeneficiario
     *
     * @return \ans\schemes\CtmBeneficiarioComunicacaoType
     */
    public function getComunicacaoBeneficiario()
    {
        return $this->comunicacaoBeneficiario;
    }

    /**
     * Sets a new comunicacaoBeneficiario
     *
     * @param \ans\schemes\CtmBeneficiarioComunicacaoType $comunicacaoBeneficiario
     * @return self
     */
    public function setComunicacaoBeneficiario(\ans\schemes\CtmBeneficiarioComunicacaoType $comunicacaoBeneficiario)
    {
        $this->comunicacaoBeneficiario = $comunicacaoBeneficiario;
        return $this;
    }

    /**
     * Gets as hash
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Sets a new hash
     *
     * @param string $hash
     * @return self
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
        return $this;
    }


}

