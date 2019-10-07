<?php
    $meuArray = Array();

    $file = fopen('tbl_usuarios.csv', 'r');

    while(($line = fgetcsv($file)) !== false) {
        $meuArray[] = $line;
    }
    fclose($file);
    print_r($meuArray);

    echo "<br><br>";

    // foreach ($meuArray as $linha) {
    //     echo $linha[0]."<br>";
    //     echo $linha[1]."<br>";
    //     echo $linha[2]."<br>";
    // }