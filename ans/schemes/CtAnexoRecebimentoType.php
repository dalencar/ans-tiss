<?php

namespace ans\schemes;

/**
 * Class representing CtAnexoRecebimentoType
 *
 * estrutura de recibo do recebimento de um lote de anexos dos prestadores
 * XSD Type: ct_anexoRecebimento
 */
class CtAnexoRecebimentoType
{

    /**
     * @property string $nrProtocoloRecebimento
     */
    private $nrProtocoloRecebimento = null;

    /**
     * @property \DateTime $dataEnvioAnexo
     */
    private $dataEnvioAnexo = null;

    /**
     * @property string $numeroLote
     */
    private $numeroLote = null;

    /**
     * @property string $registroANS
     */
    private $registroANS = null;

    /**
     * @property \ans\schemes\CtContratadoDadosType $dadosPrestador
     */
    private $dadosPrestador = null;

    /**
     * @property integer $qtAnexosClinicos
     */
    private $qtAnexosClinicos = null;

    /**
     * @property \ans\schemes\CtAnexoRecebimentoType\AnexosClinicosAType[]
     * $anexosClinicos
     */
    private $anexosClinicos = null;

    /**
     * @property string $observacao
     */
    private $observacao = null;

    /**
     * Gets as nrProtocoloRecebimento
     *
     * @return string
     */
    public function getNrProtocoloRecebimento()
    {
        return $this->nrProtocoloRecebimento;
    }

    /**
     * Sets a new nrProtocoloRecebimento
     *
     * @param string $nrProtocoloRecebimento
     * @return self
     */
    public function setNrProtocoloRecebimento($nrProtocoloRecebimento)
    {
        $this->nrProtocoloRecebimento = $nrProtocoloRecebimento;
        return $this;
    }

    /**
     * Gets as dataEnvioAnexo
     *
     * @return \DateTime
     */
    public function getDataEnvioAnexo()
    {
        return $this->dataEnvioAnexo;
    }

    /**
     * Sets a new dataEnvioAnexo
     *
     * @param \DateTime $dataEnvioAnexo
     * @return self
     */
    public function setDataEnvioAnexo(\DateTime $dataEnvioAnexo)
    {
        $this->dataEnvioAnexo = $dataEnvioAnexo;
        return $this;
    }

    /**
     * Gets as numeroLote
     *
     * @return string
     */
    public function getNumeroLote()
    {
        return $this->numeroLote;
    }

    /**
     * Sets a new numeroLote
     *
     * @param string $numeroLote
     * @return self
     */
    public function setNumeroLote($numeroLote)
    {
        $this->numeroLote = $numeroLote;
        return $this;
    }

    /**
     * Gets as registroANS
     *
     * @return string
     */
    public function getRegistroANS()
    {
        return $this->registroANS;
    }

    /**
     * Sets a new registroANS
     *
     * @param string $registroANS
     * @return self
     */
    public function setRegistroANS($registroANS)
    {
        $this->registroANS = $registroANS;
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
     * Gets as qtAnexosClinicos
     *
     * @return integer
     */
    public function getQtAnexosClinicos()
    {
        return $this->qtAnexosClinicos;
    }

    /**
     * Sets a new qtAnexosClinicos
     *
     * @param integer $qtAnexosClinicos
     * @return self
     */
    public function setQtAnexosClinicos($qtAnexosClinicos)
    {
        $this->qtAnexosClinicos = $qtAnexosClinicos;
        return $this;
    }

    /**
     * Adds as anexosClinicos
     *
     * @return self
     * @param \ans\schemes\CtAnexoRecebimentoType\AnexosClinicosAType $anexosClinicos
     */
    public function addToAnexosClinicos(\ans\schemes\CtAnexoRecebimentoType\AnexosClinicosAType $anexosClinicos)
    {
        $this->anexosClinicos[] = $anexosClinicos;
        return $this;
    }

    /**
     * isset anexosClinicos
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAnexosClinicos($index)
    {
        return isset($this->anexosClinicos[$index]);
    }

    /**
     * unset anexosClinicos
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAnexosClinicos($index)
    {
        unset($this->anexosClinicos[$index]);
    }

    /**
     * Gets as anexosClinicos
     *
     * @return \ans\schemes\CtAnexoRecebimentoType\AnexosClinicosAType[]
     */
    public function getAnexosClinicos()
    {
        return $this->anexosClinicos;
    }

    /**
     * Sets a new anexosClinicos
     *
     * @param \ans\schemes\CtAnexoRecebimentoType\AnexosClinicosAType[] $anexosClinicos
     * @return self
     */
    public function setAnexosClinicos(array $anexosClinicos)
    {
        $this->anexosClinicos = $anexosClinicos;
        return $this;
    }

    /**
     * Gets as observacao
     *
     * @return string
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * Sets a new observacao
     *
     * @param string $observacao
     * @return self
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;
        return $this;
    }


}

