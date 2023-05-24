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

    public function create(string $table, array $rows = [], array $value = []){
        
        $sql = "INSERT INTO {$table} {$rows} VALUES ('{$value}')";

        try{
            $data = $this -> connection_bm -> query($sql) -> insert_id;
        }
        catch(exception $error){
            echo "Erro código: {$error->getcode()} <br>Mensagem: {$error->getMessage()}";
            $data = NULL;
        }
        return $data ?? 0;
    }

    public function read_all($table, $rows_param = []){
        $rows = implode(",", $rows_param);

        $sql = "SELECT {$rows} FROM {$table};";

        try {
            $data = $this -> connection_bm -> query($sql);
        }
        catch(exception $error){
            echo "Erro código: {$error->getcode()} <br>Mensagem: {$error->getmessage()}";
            $data = NULL;
        }
        return $data;
    }

    public function read($table, $rows, $value){

        $sql = "SELECT * FROM {$table} WHERE {$rows} = '{$value}';";

        try {
            $data = $this -> connection_bm -> query($sql);
        }
        catch(exception $error){
            echo "Erro código: {$error->getcode()}<br>Mensagem: {$error->getmessage()}";
            $data = NULL;
        }
        return $data;
    }

    public function update($table, $rows_param = [], $value_param = [], $rows_where = [], $value_where = []){
        //update tabela set rowparam = valueparam where rowset = valueset

        $qtd_rows = count($rows_param);
        $qtd_value = count($value_param);

        if($qtd_rows != $qtd_value){
            throw new Exception("Number of rows does not match the number of values!", 500);
        }

        $rows_param = implode("','", $rows_param);
        $value_param = implode("','", $value_param);

        $sql = "UPDATE {$table} SET ('{$rows_param}') = ('{$value_param}') WHERE";

        if(($qtd_rows && $qtd_value) > 1){
            for($i=0; $i<$qtd_rows; $i++){

                $opr = '';
                if($i<=$qtd_rows-1){
                    $opr = 'AND';
                }
                $sql .= " ('{$rows_where[$i]}') = ('{$value_where[$i]}') $opr";
            }    
        }
        else{
            $sql .= " ('{$rows_where}') = ('{$value_where}')";
        }
      $sql .= ';';

        
       
        try {
            $data = $this -> connection_bm -> query($sql);
        }
        catch(exception$error){
            echo "Erro código: {$error->getcode()}<br>Mensagem: {$error->getmessage()}";
            $data = NULL;
        }
        return $data;
    }

    public function delete($table, $rows, $value){
        $sql = "DELETE FROM {$table} WHERE {$rows} = '{$value}';";

        try {
            $data = $this -> connection_bm -> query($sql);
        }
        catch(exception $error){
            echo "erro código: {$error->getcode()}<br>Mensagem: {$error->getmessage()}";
            $data = NULL;
        }
        return $data;
    }
}

$base_model = new base_model($connection);
$base_model->getconnection();