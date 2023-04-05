<?php

$primos = [];

for($numero=2; $numero<=100; $numero++){
    for($i=1, $cont=0; $i<=$numero; $i++){
        if($numero%$i==0){
            $cont++;
        }
        else if($cont>2){
            break;
        }
    }
    if($cont==2){
        array_push($primos, $numero);
    }
}

echo "Primos: " . implode("," ,$primos);

//Vai gerar todos os primos de 0 a 100 || Funciona :)

?>