<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form name="CadastroAlunos" type="text" method="post" enctype="multipart/form-data" action="upload.php">
        <label for="email">* Título</label>
        <input type="text" name="Titulo" placeholder="Título">
        <label for="email">* Legenda</label>
        <input type="text" name="texto" placeholder="Legenda">
        <label for="email">Imagem</label>
        <input type="file" name="image" placeholder="Imagem">
            <input type="submit" value="Enviar"/>
  </form>
</body>
</html>