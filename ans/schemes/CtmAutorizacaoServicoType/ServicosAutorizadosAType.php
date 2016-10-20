<?php

namespace ans\schemes\CtmAutorizacaoServicoType;

/**
 * Class representing ServicosAutorizadosAType
 */
class ServicosAutorizadosAType
{

    /**
     * @property \ans\schemes\CtProcedimentoAutorizadoType $servicoAutorizado
     */
    private $servicoAutorizado = null;

    /**
     * Gets as servicoAutorizado
     *
     * @return \ans\schemes\CtProcedimentoAutorizadoType
     */
    public function getServicoAutorizado()
    {
        return $this->servicoAutorizado;
    }

    /**
     * Sets a new servicoAutorizado
     *
     * @param \ans\schemes\CtProcedimentoAutorizadoType $servicoAutorizado
     * @return self
     */
    public function setServicoAutorizado(\ans\schemes\CtProcedimentoAutorizadoType $servicoAutorizado)
    {
        $this->servicoAutorizado = $servicoAutorizado;
        return $this;
    }


}

