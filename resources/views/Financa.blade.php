<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/financa.css') }}">
    <script src="{{ asset('js.js') }}"></script>
    <title>Creche</title>
</head>
<body>
   <!-- Menu acima-->
<div class="main">
  <navbar class="navbar">
    <div class="esquerda-nav">
    <div onclick="openNav()"><img src="{{ asset('imagens/icon menu.png') }}" class="menu-azul"></div>
      <div><img src="{{ asset('imagens/creche.png') }}" class="logo-navbar"></div>
    </div>
    <div class="direita-nav">
      <div class="texto-user"><h5><strong>Aluno(a)</strong></h5></div>
      <div><img src="{{ asset('imagens/icon aluna.png') }}" class="logo-user"></div>
    </div>
  </navbar>
  
    <!--Menu lateral-->
    <div id="mySidenav" class="sidenav">
      <div class="side">
        <a href="javascript:void(0)" onclick="closeNav()"><img src="{{ asset('imagens/icon menu.png') }}" class="menu-cinza"></a>
        <div><img src="{{ asset('imagens/creche.png') }}" class="logo-sidebar"></div>
      </div>
      <div class="iten-menu">
        <a href="#"><img src="{{ asset('imagens/icon calendario cinza.png') }}">
          <p>Calendario</p></a>
  
        <a href="#" onclick="toggleSubMenu('subMenuFinanca')">
          <img src="{{ asset('imagens/icon financeiro cinza.png') }}">
          <div class="esquerda"><img src="{{ asset('imagens/icon seta cinza.png') }}" id="seta1"></div>
          <p>Financeiro</p>
          <div id="subMenuFinanca" class="sub-menu">
            <div class="div-container">

              <a href="{{ route('financa') }}">Pendentes</a>
              <a href="{{ route('financa') }}">Pagos</a>
              <a href="{{ route('financa') }}">Dados</a>

              
            </div>
          </div>
        </a>
        <a href="{{ route('home') }}"><img src="{{ asset('imagens/icon home azul.png') }}"><p>Home</p></a>
  
        <a href="#" onclick="toggleSubMenu('subMenuMedico')">
          <img src="{{ asset('imagens/icon saude cinza.png') }}">
          <div class="esquerda"><img src="{{ asset('imagens/icon seta cinza.png') }}" id="seta2"></div>
          <p>Saude</p>
          <div id="subMenuMedico" class="sub-menu">
            <div class="div-container">
              <a href="{{ route('medico') }}">Ficha Médica</a>
              <a href="#">Atestados</a>
              <a href="#">Cardápio</a>
            </div>
          </div>
        </a>
  
        <a href="#" onclick="toggleSubMenu('subMenuPerfil')">
          <img src="{{ asset('imagens/icon user cinza.png') }}">
          <div class="esquerda"><img src="{{ asset('imagens/icon seta cinza.png') }}" id="seta3"></div>
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
        <a href="{{ route('home') }}"><img src="{{ asset('imagens/sair.png') }}" class="sair"><p>Sair</p></a>
      </div>
    
      <div class="copyriht"> 
        <img src="{{ asset('imagens/icon copyright preto.png') }}" class="copyright">
        <p><strong>2023 FROM NEWPATH</strong></p>
      </div>
    </div>
  
     <!--Financeiro: Pendentes, Pagas e Dados-->

     <div class="financa">
      <a href="#pendente" id="pendentes" class="opcao" onclick="toggleConteudo('conteudoPendente', this);">
        <p>Pendentes</p>
      </a>
    
      <a href="#pagas" id="pagas" class="opcao" onclick="toggleConteudo('conteudoPagas', this);">
        <p>Pagas</p>
      </a>
    
      <a href="#dados" id="dados" class="opcao" onclick="toggleConteudo('conteudoDados', this);">
        <p>Dados</p>
      </a>
    </div>

     <!-- Conteúdo invisível -->

     <div id="conteudoPendente" class="conteudo">
      <div class="titulo">
        <p>Vencimento</p>
        <p>Valor
        <p>Valor Pago</p>
        <p>Status</p>  
        </p>
      </div>
      <div class="detalhe">
        <p class="data">15/06/2023</p>
        <p class="pago1">R$ 700,00</p>
        <p class="pago2"></p>
        <p class="pendente">Pendente</p>
        <a href="#" class="imagem-clicavel" onclick="expandirDetalhe(this);">
          <img src="{{ asset('imagens/seta-azul.png') }}"/>
        </a>
      </div>
    </div>
    
    <div id="conteudoPagas" class="conteudo">
    <div class="titulo">
      <p>Vencimento</p>
      <p>Valor
      <p>Valor Pago</p>
      <p>Status</p>  
      </p>
    </div>

    <div class="detalhe">
      <p class="data">15/06/2023</p>
      <p class="pago1">R$ 700,00</p>
      <p class="pago2">R$ 700,00</p>
      <p class="pagoP">Pago</p>
    </div>
    <div class="detalhe">
      <p class="data">15/05/2023</p>
      <p class="pago1">R$ 700,00</p>
      <p class="pago2">R$ 700,00</p>
      <p class="pagoP">Pago</p>
    </div>
    <div class="detalhe">
      <p class="data">15/04/2023</p>
      <p class="pago1">R$ 700,00</p>
      <p class="pago2">R$ 700,00</p>
      <p class="pagoP">Pago</p>
    </div>
    <div class="detalhe">
      <p class="data">15/03/2023</p>
      <p class="pago1">R$ 700,00</p>
      <p class="pago2">R$ 700,00</p>
      <p class="pagoP">Pago</p>
    </div>

    </div>

    <div id="conteudoDados" class="conteudo">
      <p>Conteúdo dos Dados</p>
    </div>

</div>
</body>
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

//Abre o conteúdo de pagamento
function toggleConteudo(id, link) {
  var conteudo = document.getElementById(id);
  var links = document.getElementsByClassName('opcao');

  for (var i = 0; i < links.length; i++) {
    links[i].classList.remove('selecionado');
  }

  link.classList.add('selecionado');

  var conteudos = document.getElementsByClassName('conteudo');

  for (var i = 0; i < conteudos.length; i++) {
    if (conteudos[i].id === id) {
      conteudos[i].classList.toggle('expandido');
    } else {
      conteudos[i].classList.remove('expandido');
    }
  }
}

   
   
            // // document.getElementById('img-1').addEventListener('click', function() {
            // // document.getElementById('menu-lateral').style.left = '0'; 
            // });
          </script>
</html>