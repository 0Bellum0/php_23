<?php
// Variaveis para conexao com o banco.
$hostname = "localhost";
$username = "aluno";
$password = "qwe123!";
$database = "aluno";
$port = 3306; /*--> padrao sql | 5432 --> padrao do postgress*/


try {
    $connection = mysqli_connect(
        $hostname,
        $username,
        $password,
        $database,
        $port
    );
} catch (Exception $error ){
    echo "ERRO codigo: {$error->getCode()} <br> mensagem: {$error->getMessage()}";
    $connection = NULL;
    // echo "ERRO codigo: " . $error->getCode() . " <br> mensagem: " . $error->getMessage();
    // echo "ERRO: {$error}";
}