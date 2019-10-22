<?php
require_once 'config.php';
$id = 0;
if(isset($_GET['id']) && empty($_GET['id']) == false) {
    $id = addslashes($_GET['id']);
}    
if(isset($_POST['nome']) && empty($_POST['nome']) == false) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));
    $sql = "UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE id = :id";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':id', $id);
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':senha', $senha);
    $sql->execute();
    header("Location: index.php");
}
$sql = "SELECT * FROM usuarios WHERE id = :id";
$sql = $pdo->prepare($sql);
$sql->bindValue(':id', $id);
$sql->execute();
if($sql->rowCount() > 0) {
    $dado = $sql->fetch();
} else {
    header("Location: index.php");
}
?>

<form action="" method="post">
    Nome: </br>
        <input type="text" name="nome" value="<?php echo $dado['nome']; ?>"></br>
    E-mail: </br>
        <input type="text" name="email" value="<?php echo $dado['email']; ?>"></br>
    Senha:</br>
        <input type="password" name="senha" id=""></br>
    <p><input type="submit" value="Atualizar"></p>

</form>