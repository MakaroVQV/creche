<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('/css/financa.css')}}">
  <title>Creche</title>
</head>

<body>

    <!--Menu lateral-->
    <div id="mySidenav" class="sidenav">
      <div class="side">
        <a href="javascript:void(0)" onclick="closeNav()"><img src="{{asset('/imagens/icon menu.png')}}" class="menu-cinza"></a>
        <div><img src="{{asset('/imagens/creche.png')}}" class="logo-sidebar"></div>
      </div>
      <div class="iten-menu">
        <a href="{{ url('/calendario')}}"><img src="{{asset('/imagens/icon calendario cinza.png')}}">
          <p>Calendario</p>
        </a>
        <a href="{{ url('/financa')}}"><img src="{{asset('/imagens/icon financeiro cinza.png')}}">
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

      <a href="#" onclick="toggleSubMenu('subMenuFinanca')">
        <img src="{{asset('/imagens/icon financeiro cinza.png')}}">
        <div class="esquerda"><img src="{{asset('/imagens/icon seta cinza.png')}}" id="seta1"></div>
        <p>Financeiro</p>
        <div id="subMenuFinanca" class="sub-menu">
          <div class="div-container">
            <a href="{{ url('/financa#pendentes')}}">Pendentes</a>
            <a href="{{ url('/financa#pagas')}}">Pagas</a>
            <a href="{{ url('/financa#dados')}}">Dados</a>
          </div>
        </div>
      </a>
      <a href="{{ url('/home')}}"><img src="{{asset('/imagens/icon home azul.png')}}"><p>Home</p></a>

      <a href="#" onclick="toggleSubMenu('subMenuMedico')">
        <img src="{{asset('/imagens/icon saude cinza.png')}}">
        <div class="esquerda"><img src="{{asset('imagens/icon seta cinza.png')}}" id="seta2"></div>
        <p>Saude</p>
        <div id="subMenuMedico" class="sub-menu">
          <div class="div-container">
            <a href="{{ url('/medico#ficha-medica')}}">Ficha Médica</a>
            <a href="{{ url('/medico#atestados')}}">Atestados</a>
            <a href="{{ url('/medico#cardapio')}}">Cardápio</a>
          </div>
        </div>
      </a>

      <a href="#" onclick="toggleSubMenu('subMenuPerfil')">
        <img src="{{asset('/imagens/icon user cinza.png')}}">
        <div class="esquerda"><img src="{{asset('/imagens/icon seta cinza.png')}}" id="seta3"></div>
        <p>Perfil</p>
        <div id="subMenuPerfil" class="sub-menu">
          <div class="div-container">
            <a href="#">Meus Dados</a>
            <a href="#">Configurações</a>
            <a href="#">Ajuda</a>
          </div>
        </div>
      </a>
    </div>
    <!-- Footer do menu lateral -->
    <div class="footer-menu">
      <a href="{{ url('logout')}}"><img src="{{asset('/imagens/sair.png')}}" class="sair"><p>Sair</p></a>
    </div>
  
    <div class="copyriht"> 
      <img src="{{asset('/imagens/icon copyright preto.png')}}" class="copyright">
      <p><strong>2023 FROM NEWPATH</strong></p>
    </div>
  </div>

    <!--Financeiro: Pendentes, Pagas e Dados-->

    <div class="financa">

      <a href="#pendente">
        <p>Pendentes</p>

      </a>

      <a href="#pagas">
        <p>Pagas</p>

      </a>

      <a href="#dados">
        <p>Dados</p>
      </a>

    </div>

    <div id="conteudo">





    
    </div>



    <script>
      /* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
      function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.0)";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
  document.body.style.backgroundColor = "white";
}

function toggleSubMenu(subMenuId) {
  var subMenu = document.getElementById(subMenuId);
  var isOpen = subMenu.classList.contains('open');

  // Fecha todos os submenus
  var subMenus = document.getElementsByClassName("sub-menu");
  for (var i = 0; i < subMenus.length; i++) {
    subMenus[i].classList.remove('open');
    subMenus[i].style.display = "none";
  }

  // Abre ou fecha o submenu atual
  if (!isOpen) {
    subMenu.classList.add('open');
    subMenu.style.display = "block";
  }
}
      // // document.getElementById('img-1').addEventListener('click', function() {
      // // document.getElementById('menu-lateral').style.left = '0'; 
      // });
    </script>
</body>