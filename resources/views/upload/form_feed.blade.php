<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="" href="{{asset('/upload/upload.php')}}">
    <link rel="stylesheet" href="{{asset('public/css/formularios.css')}}">
    <title>Postagem Feed</title>
</head>
<body>
    <form name="CadastroAlunos" type="text" method="post" enctype="multipart/form-data" action="upload.php">
        <div class="titulo">
        <label for="titulo">Título</label>
        <input type="text" name="titulo" placeholder="Título" required>
        </div>
        <div class="legenda">
        <label for="legenda">Legenda</label>
        <input type="text" name="legenda" placeholder="Legenda" required>
        </div>
        <div class="iamge">
        <label for="image">Imagem</label>
        <input type="file" name="image" placeholder="Imagem">
            <input type="submit" value="Enviar"/>
        </div>
  </form>
</body>
</html>