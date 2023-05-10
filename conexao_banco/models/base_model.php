<?php

require_once '../conexao/banco_dados.php';

abstract class base_model { //abstract --> porque servira de base para outras class
    public $connection_bm;
    
    public function __construct($connection_param = NULL) {
        // uses database php_lab
        $this->connection_bm = $connection_param;
    }

    public function getconnection(){
            return $this->connection_bm;
    }

    public function create(string $table_name, $rows = [], array $data = []) : int{
        
        $sql = "INSERT INTO '{$table_name}' '{$rows}' VALUES ({$data})";

        $id = $this->connection_bm->execute_query($sql)->insert_id;

        return $id ?? 0;
    }
}

$base_model = new base_model($connection);
$base_model->getconnection();