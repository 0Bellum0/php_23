<?php

class staff_model extends base_model {

    private $table = "staff_info";
    private $rows;

    public function __construct(){
        $this -> rows = [
            'staff_id',
            'staff_status',
            'staff_name',
            'staff_mail',
            'staff_pass',
            'staff_fullname',
            'staff_nationality',
            'staff_adress',
            'staff_cep',
            'staff_cpf',
            'staff_phone',
            'staff_estado_civil',
            'staff_rank',
            'department_id',
            'log_first',
            'log_last'
        ];
    }

    public function read_all_staff(){
        return $this -> read_all($this -> table, $this -> rows);
    }

    public function update_staff(){
        return $this -> update($this -> table, $this -> rows, $this -> , $this -> , $this ->);
    }

    public function delete_staff(){
        return $this -> delete($this -> table, $this -> rows, $this ->);
    }
}

$staff_model = new staff_model();