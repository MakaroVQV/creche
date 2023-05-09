<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('/css/medico.css')}}">
  <title>Creche</title>
</head>

<body>
   <!-- Menu acima-->
   <div class="main">
        <navbar class="navbar">
            <div class="esquerda-nav">
                <div onclick="openNav()"><img src="{{asset('/imagens/icon menu.png')}}" class="menu-azul"></div>
                <div><img src="{{asset('/imagens/creche.png')}}" class="logo-navbar"></div>
            </div>
            <div class="direita-nav">
                <div class="texto-user">
                    <h5><strong>Aluno(a)</strong></h5>
                </div>
                <div><img src="{{asset('/imagens/icon aluna.png')}}" class="logo-user"></div>
            </div>
        </navbar>

        <!--Menu lateral-->
        <div id="mySidenav" class="sidenav">
            <div class="side">
                <a href="javascript:void(0)" onclick="closeNav()"><img src="{{asset('/imagens/icon menu.png')}}" class="menu-cinza"></a>
                <div><img src="{{asset('/imagens/creche.png')}}" class="logo-sidebar"></div>
            </div>
            <div class="iten-menu">
            <a href="{{ url('/calendar')}}"><img src="{{asset('/imagens/icon calendario cinza.png')}}">
                    <p>Calendario</p>
                </a>
                <a href="{{ url('/Financa')}}"><img src="{{asset('/imagens/icon financeiro cinza.png')}}">
                    <p>Financeiro</p>
                </a>
                <a href="{{ url('/home')}}"><img src="{{asset('/imagens/icon home azul.png')}}">
                    <p>Home</p>
                </a>
                <a href="{{ url('/medico')}}"><img src="{{asset('/imagens/icon saude cinza.png')}}">
                    <p>Saude</p>
                </a>
                <a href="{{ url('/perfil')}}"><img src="{{asset('/imagens/icon user cinza.png')}}">
                    <p>Perfil</p>
                </a>
            </div>
            <!--Footer do menu lateral-->
            <div class="footer-menu">
                <a href="index.html"><img src="{{asset('/imagens/sair.png')}}" class="sair">
                    <p>Sair</p>
                </a>
            </div>

            <div class="copyriht">
                <img src="{{asset('/imagens/icon_copyright.png')}}" class="copyright">
                <p><strong>2023 FROM NEWPATH</strong></p>
            </div>
        </div>


        