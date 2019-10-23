<?php
// UTILIZANDO PDO
$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    
    // SELECIONAR
    // $sql = "SELECT * FROM usuarios";
    // $sql = $pdo->query($sql);
    // if ($sql->rowCount() > 0) {
    //     foreach ($sql->fetchAll() as $usuario) {
    //         echo "Nome: ".$usuario["nome"]." - E-mail: ".$usuario["email"]."<br>";
    //     }
    // } else {
    //     echo "Não há usuário cadastrados!";
    // }

    // INSERIR
    // $nome = "Testador 2";
    // $email = "teste2@hotmail.com";
    // $senha = md5("123");
    // $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
    // $sql = $pdo->query($sql);
    // echo "Usuário inserido: ".$pdo->lastInsertId();

    // ATUALIZAR
    // $novaSenha = md5("teste123");

    // $sql = "UPDATE usuarios SET senha = '$novaSenha' Where id = 1";
    // $pdo->query($sql);

    // echo "Usuário alterado com sucesso!";

    // DELETAR
    // $id = 12;

    // $sql = "DELETE FROM usuarios WHERE id = ".$id;
    // $pdo->query($sql);

    // echo "Usuário deletado com sucesso!";

    // PDO: PDOSTATEMENT E BINDS
    $nome = 'Pedro';
    $id = 5;

    $sql = "UPDATE usuarios SET nome = :nome WHERE id = :id";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':id', $id);
    $sql->execute();

    echo "Usuário atualizado com sucesso!";

} catch(PDOException $e) {
    echo "Falhou: ".$e->getMessage();
}

?>
