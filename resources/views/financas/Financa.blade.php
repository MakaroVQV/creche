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
      <a href="{{ url('/financas/Financa')}}"><img src="{{asset('/imagens/icon financeiro cinza.png')}}">
        <p>Financeiro</p></a>
        </div>
      </a>

      <div class="retangulo">
      <a href="{{ url('/home')}}"><img src="{{asset('/imagens/icon home azul.png')}}"><p>Home</p></a>
      </div>

      <div class="retangulo">
      <a href="{{ url('/saude')}}"><img src="{{asset('/imagens/icon saude cinza.png')}}">
        <p>Saúde</p></a>
        </div>


      <div class="retangulo">
      <a href="{{ url('/perfil')}}"><img src="{{asset('/imagens/icon user cinza.png')}}">
        <p>Perfil</p>
      </a>
      </div>

      <div class="retangulo">
      <a href="{{ url('/usuarios/')}}"><img src="{{asset('/imagens/cadeado.png')}}">
      <p>Admin</p>
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
      <!-- Pendentes -->
     <div id="conteudoPendente" class="conteudo">
      <div class="titulo">
        <p>Vencimento</p>
        <p>Valor
        <p>Valor Pago</p>
        <p>Status</p>  
        </p>
      </div>
      @foreach ($financas as $value)
      @if ($value->status == 'pendente')
      <div class="detalhe">
        <p class="data">{{$value->vencimento }}</p>
        <p class="pago1">{{$value->valor}}</p>
        <p class="pago2"></p>
        <p class="pendente">{{$value->status}}</p>
        
        <a href="#" class="imagem-clicavel" onclick="expandirDetalhe(this);">
          <img id="seta-img" src="{{asset('/imagens/seta-azul.png')}}"/>
        </a>
        <div id="conteudo-oculto" class="oculto">
          <!-- Conteúdo oculto -->
         <form action="">
          <div>
            <label for="arquivo">Anexar arquivo <img src="{{asset('/imagens/anexo-cinza.png')}}"></label>
            <input type="file" name="arquivo" id="arquivo">
          </div>
         </form>
        </div>
      </div>
      @endif
      @endforeach

    </div>
    
     <!-- Pagas -->

    <div id="conteudoPagas" class="conteudo">
    <div class="titulo">
      <p>Vencimento</p>
      <p>Valor
      <p>Valor Pago</p>
      <p>Status</p>  
      </p>
    </div>

  @foreach ($financas as $value)
    @if ($value->status == 'pago')
      <div class="detalhe">
        <p class="data">{{$value->vencimento }}</p>
        <p class="pago1">{{$value->valor}}</p>
        <p class="pago2">{{$value->valor}}</p>
        <p class="pagoP">{{$value->status}}</p>
      </div>
    @endif
  @endforeach


    </div>

    <!-- Dados -->

    <div id="conteudoDados" class="conteudo">
      <div class="dados">
        <div class="chave">
          <div class="imagem-pix">
          <img src="{{asset('/imagens/pix.png')}}">
        </div>
        <div class="chave-aleatoria">
          <p>Chave Aleatória:</p>
          <p>1234567891011121314151617181920</p>
        </div>
        </div>
        <div class="agencia">
          <div class="imagem-agencia">
            <img src="{{asset('/imagens/transferencia.png')}}">
            <div class="conta">
              <p>Agência: </p>
              <p>Conta:</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

</body>
</html>
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

function expandirDetalhe() {
  var detalhe = document.querySelector('.detalhe');
  detalhe.classList.toggle('expandido');
}

   
   
            // // document.getElementById('img-1').addEventListener('click', function() {
            // // document.getElementById('menu-lateral').style.left = '0'; 
            // });
          </script>
</html>