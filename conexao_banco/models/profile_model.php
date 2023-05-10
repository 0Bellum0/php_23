<?php

class profile_model extends base_model {

    public function read_user($id){
        
        $rows = ['name', 'username'];
        $data = ['root', 'root'];

        $idprofile = $this->create("profile", $rows, $data);

        return $idprofile;
    }
}