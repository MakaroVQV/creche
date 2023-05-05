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

  <!--Ficha, Atestado e cardápio-->

  <div class="invisible">
        <div class="cards" id="ficha-medica">
          <img src="{{asset('/imagens/icon ficha medica.png')}}">
          <p>Ficha Médica</p>
          <div class="texto-expandido">
            <h1>Resumo</h1>
            <div class="detalhe">
                <div class="info"><img src="{{asset('/imagens/boneco.png')}}"><p>Atura e peso</p></div><div class="centro-info"><p class="numero">109</p><p class="cm">Cm</p></a></div><div class="data">fev de 2023</div></div>
            <div class="detalhe">
                <div class="info"><img src="{{asset('/imagens/amendoim.png')}}"><p>Alergias</p></div> <div class="data">fev de 2023</div></div>
            <div class="detalhe">
                <div class="info"><img src="{{asset('/imagens/pilula.png')}}"><p>Medicamentos</p></div> <div class="data">fev de 2023</div></div>
            <div class="detalhe">
                <div class="info"><img src="{{asset('/imagens/sangue.png')}}"><p>Tipo Sanguíneo</p></div> <div class="data">fev de 2023</div></div>
            <div class="detalhe">
                <div class="info"><img src="{{asset('/imagens/vacinacao.png')}}"><p>Vacinas</p></div> <div class="data">fev de 2023</div></div>
            <div class="detalhe">
                <div class="info"><img src="{{asset('/imagens/marcador.png')}}"><p>Observações</p></div> <div class="data">fev de 2023</div></div>
          </div>
        </div>

    <div class="cards">
      <img src="{{asset('/imagens/icon atestados.png')}}">
      <p>Atestado</p>
      <div class="texto-expandido">
        <div class="atestado">
         <div class="box"><p><strong>Atestado de Aptidão Física</strong></p></div> 
          <div class="meu-arquivo">
            <p><strong>atestado_cardio.pdf</strong></p>
          <a href="{{ url('/imagens/luis.png')}}" target="_target">
            <img src="{{asset('/imagens/nuvem.png')}}">
          </a>
        </div>
      </div>
      </div>
    </div>

    <div class="cards">
      <img src="{{asset('/imagens/icon cardapio.png')}}">
      <p>Cardápio</p>
      <div class="texto-expandido">
        <p>Aqui está o texto expandido para a Cardápio.</p>
      </div>
    </div>
  </div>

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

// constante para os cards cards se abrirem

const cards = document.querySelectorAll('.cards');

cards.forEach(card => {
  card.addEventListener('click', () => {
    const textoExpandido = card.querySelector('.texto-expandido');
    card.classList.toggle('expandido');
    textoExpandido.classList.toggle('mostrar');
    card.classList.toggle('card-normal'); // Adicione essa linha para alternar entre as classes
  });
});

const card = document.querySelector('.cards');
let count = 0;

card.addEventListener('click', () => {
  count++;
  if (count === 9) {
    card.classList.add('animate');
  }
});


        // // document.getElementById('img-1').addEventListener('click', function() {
        // // document.getElementById('menu-lateral').style.left = '0'; 
        // });
      </script>

  
</body>