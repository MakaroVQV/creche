<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/resources/views/css/styleNotificado.css')}}">
    <title>Creche</title>
</head>
<body>
    <div class="container">
    <img src="{{ url('/imagens/creche.png') }}" class="img"> <h5>JARDIM DOS SONHOS</h5>
</div>

    <!-- box -->

<form id="form_2">
    <a class="adm">Seu administrador foi notificado.<br></a>

        <a class="principal"><strong>Somente o seu administrador pode redefinir sua senha.</strong> Para ajuda-lo, enviamos um e-mail ao administrador solicitando uma<br> redefinição de senha.<br>
        A solicitação pode levar algum tempo para ser concluída,<br> dependendo da política de suporte da organização.<br></a>
        <a class="final"><strong>Não recebeu retorno?</strong> Entre em contato com a instituição.</a>
        <span>
            <a><strong>Já tem uma conta? </strong></a><a href="index.html" class="entrar"><strong>Entrar</a></strong>
        </span>
    </form>
    <img src="{{ url('/imagens/new path.png') }}" class="path">
</body>
</html>