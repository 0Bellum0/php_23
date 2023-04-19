<?php

$inicio = '12:30:00';
$fim = '13:50:00';

/*$diferenca = Datetime(fim) - Datetime(inicio); --> faz a mesma coisa que o codigo abaixo*/

$arr_ini = explode(":", $inicio);
$arr_fim = explode(":", $fim);

$h_ini = $arr_ini[0];
$min_ini = $arr_ini[1];
$seg_ini = $arr_ini[2];

$h_fim = $arr_fim[0];
$min_fim = $arr_fim[1];
$seg_fim = $arr_fim[2];

$inicio = ($arr_ini[0]*3600) + ($arr_ini[1]*60) + $arr_ini[2];

$fim = ($arr_fim[0]*3600) + ($arr_fim[1]*60) + $arr_fim[2];

$tempo = $fim - $inicio;

$hora = $tempo/3600;
$tempo = $tempo%3600;

$min = $tempo/60;
$tempo = $tempo%60;

$seg = $tempo;
?>