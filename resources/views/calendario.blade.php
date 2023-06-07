<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('/css/calendario.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
      <a href="{{ url('/calendario')}}"><img src="{{asset('/imagens/icon calendario azul.png')}}">
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
        <p>Calendario</p></a>
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



    <!-- Footer do menu lateral -->
    <div class="footer-menu">
      <a href="index.html"><img src="{{ asset('imagens/sair.png') }}" class="sair"><p>Sair</p></a>
    </div>

      <div class="copyriht"> 
      <img src="{{asset('/imagens/icon_copyright.png')}}" class="copyright">
      <p><strong>2023 FROM NEWPATH</strong></p>
    </div>
    </div>
    <div class="container">


      <table class="table table-white table-striped">
        <thead>
          <tr>
            <th scope="col">Evento</th>
            <th scope="col">Começo</th>
            <th scope="col">Término</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($eventos as $value)
          <tr>
            <td scope="row">{{ $value->title }}</td>
            <td scope="row">{{ $value-> start }}</td>
            <td scope="row">{{ $value-> end }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>

    </div>

    <div class="circulo"></div>
    <div class="circulo-2"></div>

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