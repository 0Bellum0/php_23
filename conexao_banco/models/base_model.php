<?php

class BaseModel {
    public $bancoSelecionado;
    
    public function __construct() {
        // uses database php_lab
        $this->bancoSelecionado = "php_23";
    }
}