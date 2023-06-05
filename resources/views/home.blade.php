<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/menuStyle.css')}}">
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
      <div class="retangulo">
      <a href="{{ url('/calendario')}}"><img src="{{asset('/imagens/icon calendario cinza.png')}}">
        <p>Calendario</p></a>
        </div>
        
        <div class="retangulo">
      <a href="#" onclick="toggleSubMenu('subMenuFinanca')">
        <img src="{{asset('/imagens/icon financeiro cinza.png')}}">
        <div class="esquerda"><img src="{{asset('/imagens/icon seta cinza.png')}}" id="seta1"></div>
        <p>Financeiro</p>
        </div>
        <div id="subMenuFinanca" class="sub-menu">
          <div class="div-container">
            <a href="{{ url('/financa#pendentes')}}">Pendentes</a>
            <a href="{{ url('/financa#pagas')}}">Pagas</a>
            <a href="{{ url('/financa#dados')}}">Dados</a>
          </div>
        </div>
      </a>

      <div class="retangulo">
      <a href="{{ url('/home')}}"><img src="{{asset('/imagens/icon home azul.png')}}"><p>Home</p></a>
      </div>

      <div class="retangulo">
      <a href="#" onclick="toggleSubMenu('subMenuMedico')">
        <img src="{{asset('/imagens/icon saude cinza.png')}}">
        <p>Saude</p>
        </div>

        <div id="subMenuMedico" class="sub-menu">
          <div class="div-container">
            <a href="{{ url('/medico#ficha-medica')}}">Ficha Médica</a>
            <a href="{{ url('/medico#atestados')}}">Atestados</a>
            <a href="{{ url('/medico#cardapio')}}">Cardápio</a>
          </div>
        </div>


      <div class="retangulo">
      <a href="{{ url('/perfil')}}"><img src="{{asset('/imagens/icon user cinza.png')}}">
        <p>Perfil</p>
      </a>
      </div>
    </div>

    <!-- Footer do menu lateral -->
    <div class="footer-menu">
      <a href="{{ url('logout')}}"><img src="{{asset('/imagens/sair.png')}}" class="sair"><p>Sair</p></a>
    </div>
  
    <div class="copyriht"> 
      <img src="{{asset('/imagens/icon_copyright.png')}}" class="copyright">
      <p><strong>2023 FROM NEWPATH</strong></p>
    </div>
  </div>


        <!-- Posters -->
        <div class="posters">
            <div class="titulo-1">
                <img src="{{asset('/imagens/megafone.png')}}">
                <p>Dia Mundial da Água</p>
            </div>
            <div class="imagem-centro">
                <img src="{{asset('/imagens/luis.jpeg')}}">
            </div>
            <div class="descricao">
                <p>Hoje é dia de algo muito importante para todos nós!
                    O objetivo do Dia Mundial da Água é promover conscientização sobre a relevância da água para a nossa sobrevivência e de outros seres vivos.</p>
                <div class="curtir">
                    <img src="{{asset('/imagens/coracao.png')}}" class="coracao">
                    <p>Curtir</p>
                </div>
            </div>
        </div>

        <div class="posters">
            <div class="titulo-2">
                <img src="{{asset('/imagens/megafone.png')}}" alt="">
                <p>Dia internacional da Mulher</p>
            </div>
            <div class="imagem-centro">
                <img src="{{asset('/imagens/luis.jpeg')}}">
            </div>
            <div class="descricao">
                <p>Nós da Jardim dos Sonhos viemos parabenizar todas as mulheres de dentro e fora da nossa instituição. Mas, principalmente a nossa grande equipe, composta quase que totalmente por excepcionais mulheres!</p>
                <div class="curtir">
                    <img src="{{asset('/imagens/coracao.png')}}" class="coracao">
                    <p>Curtir</p>
                </div>
            </div>
        </div>

        <div class="posters">
            <div class="titulo-3">
                <img src="{{asset('/imagens/megafone.png')}}" alt="">
                <p>Dia Mundial do Autismo</p>
            </div>
            <div class="imagem-centro">
                <img src="{{asset('/imagens/luis.jpeg')}}">
            </div>
            <center>
            <div class="descricao">
                <p>🧩 2 de abril dia mundial do autismo 🧩<br>
                    Um dia especial para pessoas incríveis 💙</p>
                    <center>
                <div class="curtir">
                    <img src="{{asset('/imagens/coracao.png')}}" class="coracao">
                    <p>Curtir</p>
                </div>
            </div>
        </div>
    </div>

    <!--Footer-->
    <div class="footer"></div>

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