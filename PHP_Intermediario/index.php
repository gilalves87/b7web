<?php   
    header("Content-Type: text/html; charset=utf-8");

    echo "<p><strong> FOR </strong></p>";
    $x = 1;
    while($x <= 10) {
        echo "X é igual a ".$x."<br>";
        $x++;
    }

    echo "<hr>";

    echo "<p><strong> WHILE </strong></p>";
    for($y = 1; $y <= 10; $y++) {
        echo "X é igual a ".$y."<br>";
    }

    echo "<hr>";

    echo "<p><strong> FOREACH </strong></p>";
    echo "<p><strong> EX 01 </strong></p>";

    $nomes = array(
        array("nome"=>"Gilberto", "idade"=>100),
        array("nome"=>"José", "idade"=>65),
        array("nome"=>"Fulano", "idade"=>45),
        array("nome"=>"Cicrano", "idade"=>70)
    );
    foreach($nomes as $aluno) {
        echo "Aluno: ".$aluno["nome"]." - Idade: ".$aluno["idade"]."</br>";
    }

    echo "<hr>";
    echo "<p><strong> EX 02 </strong></p>";

    $aluno = array(
        "nome" => "Gilberto",
        "idade" => 90,
        "estado" => "MG",
        "pais" => "Brasil"
    );

    foreach($aluno as $chave => $dado) {
        echo $chave." = ".$dado."</br>";
    }

    echo "<hr>";
    echo "<p><strong> FUNÇÕES DE DATA E TEMPO </strong></p>";
    date_default_timezone_set('America/Sao_Paulo');
    $dataatual =  new DateTime();

    echo $dataatual->format("d/m/Y H:i:s");
    echo "<br><br>";

    $t = time();
    echo $t;

    echo "<br><br>";

    $dataproxima = date("d/m/Y", strtotime("+2 days", 0));
    echo $dataproxima;
    
    echo "<hr>";
    echo "<p><strong> FUNÇÕES MATEMÁTICAS </strong></p>";

    echo "Função abs() Absoluto de -10 é ".abs(-10);
    echo "<br>";
    echo "Função round() arredondamento de 5.99 = ".round(5.99); 
    echo "<br>";
    echo "Função ceil() arredonda para cima 2.01 = ".ceil(2.01); // arredonda para cima
    echo "<br>";
    echo "Função floor() arredonda para baixo 2.9999 = ".floor(2.9999); // arredonda para baixo
    echo "<br>";
    $nome = array("Gilberto", "Pedro", "Lucas", "Aline");
    $chave = rand(0, 3); // gera valores aleatórios entre os números informados
    echo "O sorteado é: ".$nome[$chave];

    echo "<hr>";
    echo "<p><strong> MANIPULAÇÃO DE TEXTO </strong></p>";

    $nome = "Gilberto Martins";

    $x = explode(" ", $nome);
    print_r($x);
    echo "<br>";

    $array = array("Gilberto", "Alves", "Martins");
    $nomeCompleto = implode(" ", $array);

    echo $nomeCompleto;
    echo "<br><br>";

    $numero = number_format(45468.369742147, 2, ",", ".");
    echo $numero;

    echo "<br><br>";

    $texto = "O rato roeu a roupa!";

    $string = str_replace("roeu", "comeu", $texto);
    echo $string;

    echo "<br><br>";

    echo strtolower("FRASE CONVERTIDA PARA MINUSCULA"); // Converte a frase para minúscula
    echo "<br><br>";
    echo strtoupper("frase convertida para maiuscula"); // Converte a frase para maiúscula
    echo "<br><br>";
    
    $texto2 = "Gilberto";
    $x2 = substr($texto2, 0, 3); // Pega uma parte do string
    echo $x2;

    echo "<br><br>";
    $nome2 = "gilberto";
    $nome3 = "gilberto alves martins";
    echo ucfirst($nome2); // Converte a primeira letra para maiusculo
    echo "<br><br>";
    echo ucwords($nome3); // Converte a primeira letra para maiusculo de cada palavra

    echo "<br><br>";

    echo "<hr>";
    echo "<p><strong> MANIPULAÇÃO DE ARRAYS </strong></p>";
    
    $array = array(
        "nome" => "Gilberto",
        "idade" => 32,
        "cidade" => "Esmeraldas",
        "pais" => "Brasil"
    );

    $array2 = array_keys($array);// Pega os índices do array
    $array3 = array_values($array);// Pega os valores do array
    print_r($array2);
    echo "<br><br>";
    print_r($array3);

    echo "<br><br>";
    // array_pop($array); // Remove o último valor do array
    // array_shift($array); // Remove o primeiro valor do array
    asort($array);// Ordena o array em ordem alfabetica
    arsort($array);// Ordena o array em ordem alfabetica decrescente
    print_r($array);

    echo "<br><br>";
    echo "Total de registros do array: ".count($array);

    echo "<br><br>";
    $array4 = array(
        "José",
        "Antônio",
        "Maria",
        "Gilberto"
    );

    if(in_array("Fulano", $array4)){
        echo "O vencedor foi Fulano";
    } else {
        echo "Esse nome não existe no cadastro";
    }

    echo "<hr>";
    echo "<p><strong> INTRODUÇÃO À CRIPTOGRAFIA </strong></p>";

    $nome4 = "Gilberto";
    $nome5 = md5($nome4);
    $nome6 = base64_encode($nome4);
    $retornaNome6 = "R2lsYmVydG8=";

    echo "Nome original: ".$nome4."</br>";
    echo "Nome criptografado md5: ".$nome5."</br>";// Criptografia irreversível
    echo "Nome criptografado base64_encode: ".$nome6."</br>";// Criptografia reversível
    echo "Nome descriptografado base64_decode: ".base64_decode($retornaNome6);

    echo "<hr>";
    echo "<p><strong> SESSÃO / COOKIE </strong></p>";

    // Gerar uma sessão (salvo no servidor) 
    session_start();
    $_SESSION["teste"] = "Gilberto Martins";
    echo "Meu nome é: ".$_SESSION["teste"];
    // Gerar um cookie (salvo no navegador)
    setcookie("meuteste", "Aline", time()+3600);
    echo "<br>";
    echo "meu cookie é de: ".$_COOKIE["meuteste"];

    echo "<br><br><br><br>";
?>