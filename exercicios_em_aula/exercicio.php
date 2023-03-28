<?php

$numero = 50;

while($numero<=300000){
    if($numero%2==0){
        echo "{$numero} eh par!";
    }
    else{
        echo "{$numero} nao eh par!";
    }
    $numero++;
}

?>