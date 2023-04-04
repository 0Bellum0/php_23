<?php

$numero = 50;
$vet_par = [];
$vet_impar = [];

while($numero<=300){
    if($numero%2==0){
        array_push($vet_par, $numero);
        /*$vet_par[] = [$numero]; mesma coisa*/
    }
    else{
        array_push($vet_impar, $numero);
        /*$vet_impar[] = [$numero]; mesma coisa*/
    }
    $numero++;
}

echo "Pares: " . implode(",", $vet_par) . " ";

echo "Impares: " . implode(",", $vet_impar) . " ";

/*print_r($vet_par);

echo "<br>";

print_r($vet_impar);*/

/*echo "Pares: {$vet_par}<br>"; --> Não rola? */

/*var_dump($vet_par, $vet_impar); --> Se quiser printar varias variáveis e valores e por a vai, pode ir adicionando...*/

?>