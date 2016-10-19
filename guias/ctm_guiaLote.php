<?php

namespace anstiss\guias;

class ctm_guiaLote {

    /**
     * 
     * @var string $numeroLote
     * @see st_texto12
     * @access public
     */
    public $numeroLote = null;

    /**
     * 
     * @var guiasTISS $guiasTISS
     * @access public
     */
    public $guiasTISS = null;

    /**
     * 
     * @param string $numeroLote
     * @param guiasTISS $guiasTISS
     * @access public
     */
    public function __construct($numeroLote, $guiasTISS) {
        $this->numeroLote = $numeroLote;
        $this->guiasTISS = $guiasTISS;
    }

}
