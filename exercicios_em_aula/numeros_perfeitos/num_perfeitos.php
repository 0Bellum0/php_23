<?php

$num = $_GET['numero'] ?? 0;
$i = 1;
$soma = 0;

while($i<=$num/2){
    if($num%$i==0){
        $soma += $i;
    }
    $i++;
}

if($soma==$num){
    echo "{$num} é um numero perfeito!";
}
else{
    echo "{$num} não é um número perfeito";
}
?>