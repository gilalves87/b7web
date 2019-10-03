<?php   
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

    echo "Absoluto de 10 é ".abs(10);
    echo "<br>";
    echo "O arredondamento de 5.99 é ".round(5.99); 
    echo "<br>";
    echo ceil(2.01); // arredonda para cima
    echo "<br>";
    echo floor(2.9999); // arredonda para baixo
    echo "<br>";
    $nome = array("Gilberto", "Pedro", "Lucas", "Aline");
    $chave = rand(0, 3); // gera valores aleatórios entre os números informados
    echo "O sorteado é: ".$nome[$chave];


    echo "<br><br><br><br>";

?>