<?php

namespace ans\schemes;

/**
 * Class representing CtProtocoloStatusType
 *
 * estrutura utilizada na resposta da operadora sobre a situação do protocolo
 * XSD Type: ct_protocoloStatus
 */
class CtProtocoloStatusType
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
     * @property \ans\schemes\CtProtocoloStatusType\LoteAType $lote
     */
    private $lote = null;

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
     * Gets as lote
     *
     * @return \ans\schemes\CtProtocoloStatusType\LoteAType
     */
    public function getLote()
    {
        return $this->lote;
    }

    /**
     * Sets a new lote
     *
     * @param \ans\schemes\CtProtocoloStatusType\LoteAType $lote
     * @return self
     */
    public function setLote(\ans\schemes\CtProtocoloStatusType\LoteAType $lote)
    {
        $this->lote = $lote;
        return $this;
    }


}

