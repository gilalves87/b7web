<?php
try {
    $pdo = new PDO("mysql:dbname=projeto_ordenar;host:localhost", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro: ".$e->getMessage();
}
if (isset($_GET['ordem']) && empty($_GET['ordem']) == false) {
    $ordem = addslashes($_GET['ordem']);
    $sql = "SELECT * FROM usuarios ORDER BY ".$ordem;    
} else {
    $ordem = "";
    $sql = "SELECT * FROM usuarios";
}
?>

<form method="get">
    <select name="ordem" onchange="this.form.submit()">
        <option value=""></option>
        <option value="nome" <?php echo ($ordem == "nome") ? 'selected="selected"' : ''; ?>>Pelo nome</option>
        <option value="idade" <?php echo ($ordem == "idade") ? 'selected="selected"' : ''; ?>>Pela idade</option>
    </select>
</form>
<table border="1" width="400">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php

        
        $sql = $pdo->query($sql);
        if ($sql->rowCount() > 0) {
            foreach ($sql->fetchAll() as $usuario) {
                ?>
                    <tr>
                        <td><?php echo $usuario['nome']; ?></td>
                        <td><?php echo $usuario['idade']; ?></td>
                    </tr>
                <?php
            }
        }
    ?>
</table>
