<pre>
<?php
if (isset($_FILES['arquivo'])) {
    if(count($_FILES['arquivo']['tmp_name']) > 0) {
        for($q = 0; $q < count($_FILES['arquivo']['tmp_name']); $q++) {
            $nomedoarquivo = md5($_FILES['arquivo']['name'][$q].time().rand(0,999)).'.png';
            move_uploaded_file($_FILES['arquivo']['tmp_name'][$q], 'arquivos/'.$nomedoarquivo);
        }
    }
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
