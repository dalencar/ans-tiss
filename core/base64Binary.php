<?php

namespace anstiss\core;

class base64Binary {

    /**
     * 
     * @var ID $id
     * @access public
     */
    public $id = null;

    /**
     * 
     * @param ID $id
     * @access public
     */
    public function __construct($id) {
        $this->id = $id;
    }

}
