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

//=========================//================//=========================//================//
echo "<p><strong>Condicional Ternário </strong></p>";

// (CONDICAO) ? RESULTADO POSITIVO : RESULTADO NEGATIVO;

echo ($idade < 18) ? 'Menor de idade' : 'Maior de idade';


//=========================//================//=========================//================//
echo "<p><strong>Condicional NULL CAO </strong></p>";

// (CONDICAO) ?? RESULTADO NEGATIVO;
$nome = 'Gilberto';

$nomeCompleto = $nome ?? 'Visitante';
$nomeCompleto .= $sobreNome ?? '';

echo $nomeCompleto;

//=========================//================//=========================//================//
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


//=========================//================//=========================//================//
echo "<p><strong>Loop While </strong></p>";

$numero = 0;

while($numero <= 10) {
    echo $numero."</br>";
    $numero += 1;
}

//=========================//================//=========================//================//
echo "<p><strong>Loop For </strong></p>";

// for($numero = 0; $numero <= 10; $numero += 1) {
//     echo $numero."</br>";
// }

for($i=0;$i<=10;$i++) {
    echo $i."</br>";
}

//=========================//================//=========================//================//
echo "<p><strong>Loop Foreach </strong></p>";

$ingredientes = [
    'açucar', 
    'farinha de trigo', 
    'ovo', 
    'leite', 
    'fermento em pó',
    'corante'
];

echo "<ul>";
foreach($ingredientes as $valor) {
    echo "<li>".$valor."</li>";
}
echo "</ul>";

//=========================//================//=========================//================//
echo "<p><strong>Exercício 01 - Loop </strong></p>";

// for($a=1;$a<=10;$a++) {
//     for($i=1;$i<=10;$i++) {
//         echo "-";
//     }
//     echo "</br>";
// }

echo "<p><strong>Exercício 02 - Loop </strong></p>";


$soma=1;
$count=1;

while($count < 21){
    for($num = 1; $num < $soma; $num++){
        echo '-';
       }
       echo '</br>';
    $count++;
    $soma++;       
}


//=========================//================//=========================//================//

echo "<p><strong>Funções </strong></p>";

function subsequente() {
    for($q=0;$q<10;$q++) {
        echo $q."</br>";
    }
    echo "<hr>";
}
 
subsequente();
subsequente();
subsequente();
//=========================//================//=========================//================//