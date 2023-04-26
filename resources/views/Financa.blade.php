<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/resources/views/css/financa.css')}}">
    <title>Creche</title>
</head>
<body>
  <!-- Menu acima-->
<div class="main">
<navbar class="navbar">
  <div class="esquerda-nav">
    <div onclick="openNav()"><img src="{{ url('/imagens/icon menu.png') }}" class="menu-azul"></div>
    <div><img src="{{ url('/imagens/creche.png') }}" class="logo-navbar"></div>
  </div>
  <div class="direita-nav">
    <div class="texto-user"><h5><strong>Aluno(a)</strong></h5></div>
    <div><img src="{{ url('/imagens/icon aluna.png') }}" class="logo-user"></div>
  </div>
</navbar>

  <!--Menu lateral-->
<div id="mySidenav" class="sidenav">
  <div class="side">
    <a href="javascript:void(0)" onclick="closeNav()"><img src="{{ url('/imagens/icon menu.png') }}" class="menu-cinza"></a>
    <div><img src="{{ url('/imagens/creche.png') }}" class="logo-sidebar"></div>
  </div>
  <a href="javascript:void(0)" onclick="closeNav()"><img src="{{ url('/imagens/seta-azul.png') }}" class="seta-azul"></a>
  <div class="iten-menu">
    <a href="#"><img src="{{ url('/imagens/icon calendario cinza.png') }}">Calendario</a>
    <a href="#"><img src="{{ url('/imagens/icon financeiro cinza.png') }}">Financeiro</a>
    <a href="menuPrincipal.html"><img src="{{ url('/imagens/icon home azul.png') }}">Home</a>
    <a href="#"><img src="{{ url('/imagens/icon saude cinza.png') }}">Saude</a>
    <a href="#"><img src="{{ url('/imagens/icon menu.png') }}">Perfil</a>
  </div>
</div>
  <!--Ficha, Atestado e cardápio-->

    <div class="invisible">
    <div class="cards">
        <img src="{{ url('/imagens/icon ficha medica.png') }}"> <p>Ficha Médica</p>
    </div>

    <div class="cards">
      <img src="{{ url('/imagens/icon atestados.png') }}"> <p>Atestado</p>
    </div>

    <div class="cards">
      <img src="{{ url('/imagens/icon cardapio.png') }}"> <p>Cardápio</p>
    </div>   
  </div>

<script>
    /* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
    function openNav() {
      document.getElementById("mySidenav").style.width = "170px";
      document.getElementById("main").style.marginLeft = "170px";
      document.body.style.backgroundColor = "rgba(0,0,0,0.0)";
    }
    
    /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft = "0";
      document.body.style.backgroundColor = "white";
    }
            // // document.getElementById('img-1').addEventListener('click', function() {
            // // document.getElementById('menu-lateral').style.left = '0'; 
            // });
          </script>
          </body>