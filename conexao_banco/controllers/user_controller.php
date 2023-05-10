<?php

class user_controller {
 
    public function readUsuario($id) {
        $user = $this->user_model->readUsuario(10);
    }
}