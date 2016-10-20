<?php

namespace ans\schemes\CtGlosaReciboOdontoType\OpcaoRecursoAType;

/**
 * Class representing RecursoGuiaAType
 */
class RecursoGuiaAType
{

    /**
     * @property \ans\schemes\CtRespostaRecursoGuiaOdontoType
     * $respostaRecursoGuiaOdonto
     */
    private $respostaRecursoGuiaOdonto = null;

    /**
     * @property \ans\schemes\CtRespostaRecursoItemOdontoType
     * $respostaRecursoItemOdonto
     */
    private $respostaRecursoItemOdonto = null;

    /**
     * Gets as respostaRecursoGuiaOdonto
     *
     * @return \ans\schemes\CtRespostaRecursoGuiaOdontoType
     */
    public function getRespostaRecursoGuiaOdonto()
    {
        return $this->respostaRecursoGuiaOdonto;
    }

    /**
     * Sets a new respostaRecursoGuiaOdonto
     *
     * @param \ans\schemes\CtRespostaRecursoGuiaOdontoType $respostaRecursoGuiaOdonto
     * @return self
     */
    public function setRespostaRecursoGuiaOdonto(\ans\schemes\CtRespostaRecursoGuiaOdontoType $respostaRecursoGuiaOdonto)
    {
        $this->respostaRecursoGuiaOdonto = $respostaRecursoGuiaOdonto;
        return $this;
    }

    /**
     * Gets as respostaRecursoItemOdonto
     *
     * @return \ans\schemes\CtRespostaRecursoItemOdontoType
     */
    public function getRespostaRecursoItemOdonto()
    {
        return $this->respostaRecursoItemOdonto;
    }

    /**
     * Sets a new respostaRecursoItemOdonto
     *
     * @param \ans\schemes\CtRespostaRecursoItemOdontoType $respostaRecursoItemOdonto
     * @return self
     */
    public function setRespostaRecursoItemOdonto(\ans\schemes\CtRespostaRecursoItemOdontoType $respostaRecursoItemOdonto)
    {
        $this->respostaRecursoItemOdonto = $respostaRecursoItemOdonto;
        return $this;
    }


}

