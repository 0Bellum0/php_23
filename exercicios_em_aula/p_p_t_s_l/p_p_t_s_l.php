<?php

$vet = array("Papel", "Pedra", "Tesoura", "spock", "Lagarto");

//$N = count($vet);

//strcasecmp();
$c = 0;
$j = 0;
$cp = 0;

$op1 = $_GET['escolha'];

while($c!=3){

    $op2 = rand(0, 4);

    if($op1==0 && $op2==1 || 
       $op1==1 && $op2==2 || 
       $op1==2 && $op2==1 || 
       $op1==3 && $op2==2 || 
       $op1==3 && $op2==1 || 
       $op1==4 && $op2==3 || 
       $op1==4 && $op2==0){
        
        echo "{$vet[$op1]} ganhou de {$vet[$op2]}!<br>";
        $c++;
        $j++;
    }
    else if($op1==$op2){
        echo "{$vet[$op1]} empatou com {$vet[$op2]}!<br>";
        continue;
    }
    else{
        echo "{$vet[$op1]} perdeu para {$vet[$op2]}!<br>";
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