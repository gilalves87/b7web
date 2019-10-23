<pre>
<?php
if (isset($_FILES['arquivos'])) {

    // Envio de 1 único arquivo
    $nome = $_FILES['arquivos']['name']; // arquivo.png

    // Envio de múltiplos arquivos
    $nome = $_FILES['arquivo']['name']; // ARRAY
}
?>
</pre>
<form method="post" enctype="multipart/form-data">
    <p>
        <h1>Envio de múltiplos arquivos</h1>
    </p>

    <p>
        <input type="file" name="arquivo[]" multiple><br><br>

        <input type="submit" value="Enviar Arquivos">
    
    </p>        
</form>
