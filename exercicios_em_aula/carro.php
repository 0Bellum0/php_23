<?php

// Construir um carro.

// declarar componentes|atributos
$pneus = 4;
$stepePneu = 1;
$motor = '1.8';
$cambio = 'auto';
$farois = 'esq|dir';
$espelhos = 'retrovisor ext|retrovisor Int';
$bancos = 'motorista|passageiros';
$rodas = 'Aluminio|ferro';
$portas = 5;
$pintura = 'bege';
$chave = 'canivete';
$escapamento = 'esportivo';
$placa = 'mercosul';
$parachoques = 'dianteiro|traseiro';
$freio = 'ABS';
$embreagem = 'dupla embreagem';
$numero_chassi = 'ABC123456879';

$nome = 'supra';
$marca = 'Toyota';
$ano = 2023;
$modelo = 2024;
$valor = 100000;
$ipva = 33.3;
$multa = 0;
$seguro = 5000;

$proprietario = 'Beto';
$cnh_proprietario = 'AB';
$cnh_validade = '01/02/2024';


$ficha_tecnica = [
    'pneus' => $pneus, // 4
    'stepePneu' => $stepePneu, //1
    'motor' => $motor,
    'cambio' => $cambio,
    'farois' => $farois,
    'espelhos' => $espelhos,
    'bancos' => $bancos,
    'rodas' => $rodas,
    'portas' => $portas,
    'pintura' => $pintura,
    'chave' => $chave,
    'escapamento' => $escapamento,
    'placa' => $placa,
    'parachoques' => $parachoques,
    'freio' => $freio, // ABS
    'embreagem' => $embreagem,
    'numero_chassi' => $numero_chassi,
];

$ficha_complementar = [
    'nome' => $nome,
    'marca' => $marca,
    'ano' => $ano,
    'modelo' => $modelo,
    'valor' => $valor,
    'ipva' => $ipva,
    'multa' => $multa,
    'seguro' => $seguro,
];

$ficha_proprietario = [
    'proprietario' => $proprietario,
    'cnh_proprietario' => $cnh_proprietario,
    'cnh_validade' => $cnh_validade,
];

$ficha_completa = array_merge($ficha_complementar, $ficha_tecnica);


echo "<b>Ficha completa:</b><br>";

foreach ($ficha_completa as $descricao => $componente) {
    echo $descricao . ": " . $componente . '<br>'; // freio: ABS
}




echo "<br><b>Proprietario:</b><br>";
foreach ($ficha_proprietario as $descricao => $componente) {
    echo $descricao . ": " . $componente . '<br>'; // freio: ABS
}


$limiteManutencao = 1000;

$kmInicial = 1000;
$kmFinal = 2000;


$ficha_manutencao = [
    'kmInicial' => $kmInicial,
    'kmFinal' => $kmFinal,
];

$diferencaKM = ($ficha_manutencao['kmFinal'] - $ficha_manutencao['kmInicial']);
$fazer_manutencao = $diferencaKM >= $limiteManutencao; // True|False

if ($fazer_manutencao) {
    echo "<br><b>Fazer manutenção, passou do limite de {$limiteManutencao} km.</b><br>";
    
}

$lista_pecas_manutencao = [
    'farois' => $farois,
    'espelhos' => $espelhos,
    'escapamento' => $escapamento,
    'freios' => $freio,
    'embreagem' => $embreagem,
];

foreach($lista_pecas_manutencao as $item => $peca){
    echo $item . ": " . $peca . '<br>';
}

$vida_pneu = 75000;
$vida_motor = 750000;
$vida_cambio = 250000;
$vida_farois = 300000;
$vida_freio = 100000;
$vida_embreagem = 120000;

$vida_util = [
    'pneus' => $vida_pneu,
    'motor' => $vida_motor,
    'cambio' => $vida_cambio,
    'farois' => $vida_farois,
    'freio' => $vida_freio,
    'embreagem' => $vida_embreagem,
];

foreach($vida_util as $parte => $km_troca){
    if($kmFinal>=$km_troca){
        echo "{$parte}: Necessita manutencao!<br>";
    }
    else{
        echo "{$parte}: {$km_troca} km<br>";
    }
}