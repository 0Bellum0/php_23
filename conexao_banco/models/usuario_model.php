<?php

class UsuarioModel extends BaseModel {

    // cRud
    public function readUsuario($id) {
        // SELECT * FROM usuarios WHERE id = 10
        $usuario = $this->bancoSelecionado->select()->where("id = {$id}");
        // SELECT id, email FROM usuarios WHERE id = 10
        $usuario = $this->bancoSelecionado->select(["id", "email"])->where("id = {$id}");
        // SELECT id, email FROM usuarios WHERE nome LIKE '%pedro%' AND sobrenome LIKE '%cabral%'
        $usuario = $this->bancoSelecionado->select(["id", "email"])
            ->where(["nome LIKE '%{$nome}%' AND "])
            ->andWhere(["sobrenome LIKE '%{$sobrenome}%' AND "]);
    }
}

// O.R.M Object Relational Model
// Framework: laraval - codeigniter - symfony - cakePhp