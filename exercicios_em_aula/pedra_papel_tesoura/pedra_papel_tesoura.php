<?php

$vet = array("Papel", "Pedra", "Tesoura");

//$N = count($vet);

//strcasecmp();
$c = 0;
$j = 0;
$cp = 0;

$op1 = $_GET['escolha'];

while($c!=3){

    $op2 = rand(0, 2);

    if($op1==0 && $op2==1 || $op1==1 && $op2==2 || $op1==2 && $op2==1){
        echo "{$vet[$op1]} ganhou!<br>";
        $c++;
        $j++;
    }
    else if($op1==$op2){
        echo "Empate!<br>";
        continue;
    }
    else{
        echo "{$vet[$op1]} Perdeu!<br>";
        $c++;
        $cp++;
    }
}

if($j>$cp){
    echo "<hr>Jogador ganhou!";
}
else{
    echo "<hr>Computador ganhou!";
}
?>