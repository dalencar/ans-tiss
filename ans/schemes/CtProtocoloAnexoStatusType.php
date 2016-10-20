<?php

namespace ans\schemes;

/**
 * Class representing CtProtocoloAnexoStatusType
 *
 * estrutura utilizada na resposta da operadora sobre a situação do protocolo
 * XSD Type: ct_protocoloAnexoStatus
 */
class CtProtocoloAnexoStatusType
{

    /**
     * @property string $identificacaoOperadora
     */
    private $identificacaoOperadora = null;

    /**
     * @property \ans\schemes\CtContratadoDadosType $dadosPrestador
     */
    private $dadosPrestador = null;

    /**
     * @property \ans\schemes\CtProtocoloAnexoStatusType\LoteAnexoAType $loteAnexo
     */
    private $loteAnexo = null;

    /**
     * Gets as identificacaoOperadora
     *
     * @return string
     */
    public function getIdentificacaoOperadora()
    {
        return $this->identificacaoOperadora;
    }

    /**
     * Sets a new identificacaoOperadora
     *
     * @param string $identificacaoOperadora
     * @return self
     */
    public function setIdentificacaoOperadora($identificacaoOperadora)
    {
        $this->identificacaoOperadora = $identificacaoOperadora;
        return $this;
    }

    /**
     * Gets as dadosPrestador
     *
     * @return \ans\schemes\CtContratadoDadosType
     */
    public function getDadosPrestador()
    {
        return $this->dadosPrestador;
    }

    /**
     * Sets a new dadosPrestador
     *
     * @param \ans\schemes\CtContratadoDadosType $dadosPrestador
     * @return self
     */
    public function setDadosPrestador(\ans\schemes\CtContratadoDadosType $dadosPrestador)
    {
        $this->dadosPrestador = $dadosPrestador;
        return $this;
    }

    /**
     * Gets as loteAnexo
     *
     * @return \ans\schemes\CtProtocoloAnexoStatusType\LoteAnexoAType
     */
    public function getLoteAnexo()
    {
        return $this->loteAnexo;
    }

    /**
     * Sets a new loteAnexo
     *
     * @param \ans\schemes\CtProtocoloAnexoStatusType\LoteAnexoAType $loteAnexo
     * @return self
     */
    public function setLoteAnexo(\ans\schemes\CtProtocoloAnexoStatusType\LoteAnexoAType $loteAnexo)
    {
        $this->loteAnexo = $loteAnexo;
        return $this;
    }


}

