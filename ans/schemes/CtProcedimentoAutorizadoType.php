<?php

namespace ans\schemes;

/**
 * Class representing CtProcedimentoAutorizadoType
 *
 *
 * XSD Type: ct_procedimentoAutorizado
 */
class CtProcedimentoAutorizadoType
{

    /**
     * @property \ans\schemes\CtProcedimentoDadosType $procedimento
     */
    private $procedimento = null;

    /**
     * @property integer $quantidadeSolicitada
     */
    private $quantidadeSolicitada = null;

    /**
     * @property integer $quantidadeAutorizada
     */
    private $quantidadeAutorizada = null;

    /**
     * @property float $valorSolicitado
     */
    private $valorSolicitado = null;

    /**
     * @property float $valorAutorizado
     */
    private $valorAutorizado = null;

    /**
     * @property string $opcaoFabricante
     */
    private $opcaoFabricante = null;

    /**
     * @property string $registroANVISA
     */
    private $registroANVISA = null;

    /**
     * @property string $codigoRefFabricante
     */
    private $codigoRefFabricante = null;

    /**
     * @property string $autorizacaoFuncionamento
     */
    private $autorizacaoFuncionamento = null;

    /**
     * @property \ans\schemes\CtMotivoGlosaType[] $motivosNegativa
     */
    private $motivosNegativa = null;

    /**
     * Gets as procedimento
     *
     * @return \ans\schemes\CtProcedimentoDadosType
     */
    public function getProcedimento()
    {
        return $this->procedimento;
    }

    /**
     * Sets a new procedimento
     *
     * @param \ans\schemes\CtProcedimentoDadosType $procedimento
     * @return self
     */
    public function setProcedimento(\ans\schemes\CtProcedimentoDadosType $procedimento)
    {
        $this->procedimento = $procedimento;
        return $this;
    }

    /**
     * Gets as quantidadeSolicitada
     *
     * @return integer
     */
    public function getQuantidadeSolicitada()
    {
        return $this->quantidadeSolicitada;
    }

    /**
     * Sets a new quantidadeSolicitada
     *
     * @param integer $quantidadeSolicitada
     * @return self
     */
    public function setQuantidadeSolicitada($quantidadeSolicitada)
    {
        $this->quantidadeSolicitada = $quantidadeSolicitada;
        return $this;
    }

    /**
     * Gets as quantidadeAutorizada
     *
     * @return integer
     */
    public function getQuantidadeAutorizada()
    {
        return $this->quantidadeAutorizada;
    }

    /**
     * Sets a new quantidadeAutorizada
     *
     * @param integer $quantidadeAutorizada
     * @return self
     */
    public function setQuantidadeAutorizada($quantidadeAutorizada)
    {
        $this->quantidadeAutorizada = $quantidadeAutorizada;
        return $this;
    }

    /**
     * Gets as valorSolicitado
     *
     * @return float
     */
    public function getValorSolicitado()
    {
        return $this->valorSolicitado;
    }

    /**
     * Sets a new valorSolicitado
     *
     * @param float $valorSolicitado
     * @return self
     */
    public function setValorSolicitado($valorSolicitado)
    {
        $this->valorSolicitado = $valorSolicitado;
        return $this;
    }

    /**
     * Gets as valorAutorizado
     *
     * @return float
     */
    public function getValorAutorizado()
    {
        return $this->valorAutorizado;
    }

    /**
     * Sets a new valorAutorizado
     *
     * @param float $valorAutorizado
     * @return self
     */
    public function setValorAutorizado($valorAutorizado)
    {
        $this->valorAutorizado = $valorAutorizado;
        return $this;
    }

    /**
     * Gets as opcaoFabricante
     *
     * @return string
     */
    public function getOpcaoFabricante()
    {
        return $this->opcaoFabricante;
    }

    /**
     * Sets a new opcaoFabricante
     *
     * @param string $opcaoFabricante
     * @return self
     */
    public function setOpcaoFabricante($opcaoFabricante)
    {
        $this->opcaoFabricante = $opcaoFabricante;
        return $this;
    }

    /**
     * Gets as registroANVISA
     *
     * @return string
     */
    public function getRegistroANVISA()
    {
        return $this->registroANVISA;
    }

    /**
     * Sets a new registroANVISA
     *
     * @param string $registroANVISA
     * @return self
     */
    public function setRegistroANVISA($registroANVISA)
    {
        $this->registroANVISA = $registroANVISA;
        return $this;
    }

    /**
     * Gets as codigoRefFabricante
     *
     * @return string
     */
    public function getCodigoRefFabricante()
    {
        return $this->codigoRefFabricante;
    }

    /**
     * Sets a new codigoRefFabricante
     *
     * @param string $codigoRefFabricante
     * @return self
     */
    public function setCodigoRefFabricante($codigoRefFabricante)
    {
        $this->codigoRefFabricante = $codigoRefFabricante;
        return $this;
    }

    /**
     * Gets as autorizacaoFuncionamento
     *
     * @return string
     */
    public function getAutorizacaoFuncionamento()
    {
        return $this->autorizacaoFuncionamento;
    }

    /**
     * Sets a new autorizacaoFuncionamento
     *
     * @param string $autorizacaoFuncionamento
     * @return self
     */
    public function setAutorizacaoFuncionamento($autorizacaoFuncionamento)
    {
        $this->autorizacaoFuncionamento = $autorizacaoFuncionamento;
        return $this;
    }

    /**
     * Adds as motivoNegativa
     *
     * @return self
     * @param \ans\schemes\CtMotivoGlosaType $motivoNegativa
     */
    public function addToMotivosNegativa(\ans\schemes\CtMotivoGlosaType $motivoNegativa)
    {
        $this->motivosNegativa[] = $motivoNegativa;
        return $this;
    }

    /**
     * isset motivosNegativa
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMotivosNegativa($index)
    {
        return isset($this->motivosNegativa[$index]);
    }

    /**
     * unset motivosNegativa
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMotivosNegativa($index)
    {
        unset($this->motivosNegativa[$index]);
    }

    /**
     * Gets as motivosNegativa
     *
     * @return \ans\schemes\CtMotivoGlosaType[]
     */
    public function getMotivosNegativa()
    {
        return $this->motivosNegativa;
    }

    /**
     * Sets a new motivosNegativa
     *
     * @param \ans\schemes\CtMotivoGlosaType[] $motivosNegativa
     * @return self
     */
    public function setMotivosNegativa(array $motivosNegativa)
    {
        $this->motivosNegativa = $motivosNegativa;
        return $this;
    }


}

