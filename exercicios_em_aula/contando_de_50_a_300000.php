<?php

$numero = 50;
$vet_par = [];
$vet_impar = [];

while($numero<=300000){
    if($numero%2==0){
        $vet_par = array_push([$numero]);
        //$vet_par[] = [$numero];
    }
    else{
        $vet_impar = array_push([$numero]);
        //$vet_impar[] = [$numero];
    }
    $numero++;
}

?>