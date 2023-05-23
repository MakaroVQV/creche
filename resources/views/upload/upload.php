<?php
include_once 'conexao.php';

$titulo = $_POST['titulo'];

$legenda = $_POST['legenda'];

$foto = $_FILES['image']['tmp_name'];

$tamanho_permitido = 1024000; //1 MB
$pasta = 'upload';

if (!empty($foto)){
    $file = getimagesize($foto);

    //TESTA O TAMANHO DO ARQUIVO
    if($_FILES['image']['size'] > $tamanho_permitido){
        echo "erro - arquivo muito grande";
        exit();
    }

    //TESTA A EXTENSÃO DO ARQUIVO
    if(!preg_match('/^image\/(?:gif|jpg|jpeg|png)$/i', $file['mime'])){
        echo "erro - extensão não permitida";
        exit();
    }

    //CAPTURA A EXTENSÃO DO ARQUIVO
    $extensao = str_ireplace("/", "", strchr($file['mime'], "/"));

    //MONTA O CAMINHO DO NOVO DESTINO
    $novoDestino = "{$pasta}/foto_arquivo_".uniqid('', true) . '.' . $extensao;  
    move_uploaded_file ($foto , $novoDestino );

} 


$sql = "INSERT INTO feed (titulo, legenda, foto) values ('$titulo', '$legenda', $foto";

echo $sql;
?>