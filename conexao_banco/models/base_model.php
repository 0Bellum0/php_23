<?php

require_once '../conexao/banco_dados.php';

abstract class base_model { //abstract --> porque servira de base para outras class
    public $connection_bm;
    
    public function __construct($connection_param = NULL) {
        // uses database php_lab
        $this -> connection_bm = $connection_param;
    }

    public function getconnection(){
            return $this -> connection_bm;
    }

    public function create(string $table, $rows = [], array $value = []){
        
        $sql = "INSERT INTO '{$table}' '{$rows}' VALUES ({$value})";

        $data = $this -> connection_bm -> query($sql) -> insert_id;

        return $data ?? 0;
    }

    public function read_all($table, $rows_param = []){
        $rows = implode(",", $rows_param);

        $sql = "SELECT '{$rows}' FROM '{$table}';";

        $data = $this -> connection_bm -> query($sql);

        return $data;
    }

    public function read($table, $rows, $value){

        $sql = "SELECT * FROM '{$table}' WHERE '{$rows}' = '{$value}';";

        $data = $this -> connection_bm -> query($sql);

        return $data;
    }

    public function update($table, $rows_param = [], $value_param = [], $rows_where, $value_where){

        $rows = implode(",", $rows_param);

        $sql = "UPDATE '{$table}'";

        $qtd_rows = count($rows_param);
        $qtd_value = count($value_param);

        if($qtd_rows != $qtd_value){
            throw new Exception("Number of rows does not match the number of values!", 500);
        }

        $sql .= "WHERE '{$rows_where}' = '{$value_where}';";

        $data = $this -> connection_bm -> query($sql);

        return $data;
    }

    public function delete($table, $rows, $value){
        $sql = "DELETE FROM '{$table}' WHERE '{$rows}' = '{$value}';";

        $data = $this -> connection_bm -> query($sql);

        return $data;
    }
}

$base_model = new base_model($connection);
$base_model->getconnection();