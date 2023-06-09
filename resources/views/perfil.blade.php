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
      <a href="{{ url('/financa')}}"><img src="{{asset('/imagens/icon financeiro cinza.png')}}">
        <p>Calendario</p></a>
        </div>
      </a>

      <div class="retangulo">
      <a href="{{ url('/home')}}"><img src="{{asset('/imagens/icon home cinza.png')}}"><p>Home</p></a>
      </div>

      <div class="retangulo">
      <a href="{{ url('/medico')}}"><img src="{{asset('/imagens/icon saude cinza.png')}}">
        <p>Saúde</p></a>
        </div>


      <div class="retangulo">
      <a href="{{ url('/perfil')}}"><img src="{{asset('/imagens/icon user azul.png')}}">
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

        <!-- Conteúdo -->
       

        <div class="invisivel">
        <div class="cima">
        <div class="circulo"><h2>CS</h2></div>
        <div class="nome"><h3>{{ $usuario->alunos->name ?? 'None'}}</h3>
        </div>
        </div>

        <div class="baixo">
            <div class="left">
            <div class="titulo-1"><p>Nome completo do Responsável</p></div>
            <div class="texto-1"><p>{{ $usuario->name }}</p></div>
            <div class="titulo-2"><p>Email</p></div>
            <div class="texto-2"><p>{{ $usuario->email}}</p></div>
            </div>

            <div class="right">
            <div class="telefone"><p>Telefone</p></div>
            <div class="numero"><img src="{{asset('/imagens/celular.png')}}">
            <p>{{$usuario->telefoneFormatado}}</p></div>
            </div>
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