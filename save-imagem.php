<?php
if(isset($_FILES['arquivo'])){

var_dump($_FILES['arquivo']);

$diretorio = "_arquivo/".$ultimo_id."/"; //define o diretorio para onde enviaremos o arquivo
mkdir($diretorio, 0755);
var_dump($diretorio);

move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$nome_imagem); //efetua o upload

// $sql_code = "INSERT INTO tutorial (codigo, arquivo, data) VALUES(null, '$novo_nome', NOW())";
}

?>
