<?php
session_start();

if (isset($_POST['email']) && empty($_POST['email']) == false) {
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));

    $dsn = "mysql:dbname=blog;host=localhost";
    $dbuser = "root";
    $dbpass = "";
    
    try {
        $db = new PDO($dsn, $dbuser, $dbpass);

        $sql = $db->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

        if ($sql->rowCount() > 0) {

            $dado = $sql->fetch();

            $_SESSION['id'] = $dado['id'];

            header("Location: index.php");
        }

    } catch (PDOException $e) {
        echo "Falhou a conexão: ".$e->getMessage();
    }

}
?>

Página de Login

<form method="post">

    E-mail: </br>
        <input type="text" name="email" ></br>
    Senha:</br>
        <input type="password" name="senha" ></br>

    <input type="submit" value="Entrar">

</form>