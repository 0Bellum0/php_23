<?php

$numero = 50;
$vet_par = [];
$vet_impar = [];

while($numero<=300000){
    if($numero%2==0){
        $vet_par = array_push([$numero]);
        /*$vet_par[] = [$numero]; mesma coisa*/
    }
    else{
        $vet_impar = array_push([$numero]);
        /*$vet_impar[] = [$numero]; mesma coisa*/
    }
    $numero++;
}

print_r($vet_par);

echo "<br>";

print_r($vet_impar);

/*echo "Pares: {$vet_par}<br>"; --> Não rola? */

/*var_dump($vet_par, $vet_impar); --> Se quiser printar varias variáveis e valores e por a vai, pode ir adicionando...*/

?>