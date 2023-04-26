<?php

$inicio = '23:30:00';
$fim = '01:10:27';

/*$diferenca = Datetime(fim) - Datetime(inicio); --> faz a mesma coisa que o codigo abaixo*/

$arr_ini = explode(":", $inicio);
$arr_fim = explode(":", $fim);

//23:59:59 --> 86399
//24:00:00 --> 86400
//00:00:00 --> 0

$inicio = ($arr_ini[0]*3600) + ($arr_ini[1]*60) + $arr_ini[2];

$fim = ($arr_fim[0]*3600) + ($arr_fim[1]*60) + $arr_fim[2];

if($inicio > $fim){
    $fim += 86400;
}

$tempo = $fim - $inicio;

$hora = $tempo/3600;
$tempo = $tempo%3600;

$min = $tempo/60;
$tempo = $tempo%60;

$seg = $tempo;

echo "Tempo decorrido: " . intval($hora) . " hora, " . intval($min) . " minutos e {$seg} segundos";
?>