<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/perfil.css')}}">
    <title>Creche</title>
</head>
   

  <body>


    <!-- Menu acima-->
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
      <a href="{{ url('/calendario')}}"><img src="../imagens/icon calendario cinza.png">
        <p>Calendario</p></a>

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
          

        <!--Formulario-->

        <center><h1>Meus dados</h1></center>
        <br>
        <br>
        <br>

       <center><p class="circulo">CS Carol</p></center><br>

<form>
    <label for="name">Nome Completo:</label>
      <input type="text" id="name" name="name" value="Carolina Souza De Araújo">

    <label for="phone">Telefone:</label>
      <input type="tel" id="phone" name="phone" value="(21) 98765-4321"><br><br>


   <label class="direita" for="email">E-mail:</label>
      <input type="email" id="email" name="email" value="carolinasouzaa@gmail.com"><br><br>

   <label class="direita" for="gender">Gênero:</label>
      <input type="feminino" id="Feminino" name="Feminino" value="Feminino"><br><br>
 
   <input type="submit" value ="Enviar">
</form>


        <!--Menu lateral-->
        
        <script>
            /* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
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

            // constante para os cards cards se abrirem

            
        </script>


</body>