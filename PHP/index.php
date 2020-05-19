<?php
$lista = [
    'nome' => 'Gilberto',
    'idade' => 32,
    'atributos' => [
        'forca' => 70,
        'agilidade' => 80,
        'destreza' => 50
    ],
    'vida' => 1000,
    'mana' => 985
];

echo "NOME: ".$lista['nome']."</br>";
echo "FORÇA: ".$lista['atributos']['forca']."</br>";
echo "VIDA: ".$lista['vida']."</br>";

echo "<p><strong>Condicional IF </strong></p>";

$idade = 40;

// Se idade for maior ou igual a 18 entao
// - mostrar na tela "Maior de idade"
// caso contrario
// - mostrar na tela "Menor de idade"

if($idade > 18) {
    echo "Maior de idade";
} 
else {
    echo "Menor de idade";
}

// x < y
// x > y

// x == y
// x != y

// x >= y
// x <= y

//=========================//================//
echo "<p><strong>Condicional Ternário </strong></p>";

// (CONDICAO) ? RESULTADO POSITIVO : RESULTADO NEGATIVO;

echo ($idade < 18) ? 'Menor de idade' : 'Maior de idade';


//=========================//================//
echo "<p><strong>Condicional NULL CAO </strong></p>";

// (CONDICAO) ?? RESULTADO NEGATIVO;
$nome = 'Gilberto';

$nomeCompleto = $nome ?? 'Visitante';
$nomeCompleto .= $sobreNome ?? '';

echo $nomeCompleto;

//=========================//================//
echo "<p><strong>Condicional Switch </strong></p>";

$tipo = 'texto';

switch($tipo) {
    case 'foto': 
        echo 'Exibindo foto';
    break;

    case 'video':
        echo 'Exibindo video';
    break;

    case 'texto':
        echo 'Exibindo texto';
    break;
}


//=========================//================//