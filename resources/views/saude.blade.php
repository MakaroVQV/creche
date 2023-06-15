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
        <div class="retangulo">
          <a href="{{ url('/calendario')}}"><img src="{{asset('/imagens/icon calendario cinza.png')}}">
            <p>Calendario</p>
          </a>
        </div>

        <div class="retangulo">
          <a href="{{ url('/financas/Financa')}}"><img src="{{asset('/imagens/icon financeiro cinza.png')}}">
            <p>Financeiro</p>
          </a>
        </div>
        </a>

        <div class="retangulo">
          <a href="{{ url('/home')}}"><img src="{{asset('/imagens/icon home azul.png')}}">
            <p>Home</p>
          </a>
        </div>

        <div class="retangulo">
          <a href="{{ url('/saude')}}"><img src="{{asset('/imagens/icon saude cinza.png')}}">
            <p>Saúde</p>
          </a>
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
        <a href="{{ url('logout')}}"><img src="{{asset('/imagens/sair.png')}}" class="sair">
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
      @foreach($fichas as $value)
      <div class="cards" id="ficha-medica">
        <img src="{{asset('/imagens/icon ficha medica.png')}}">
        <p>Ficha Médica</p>
        <div class="texto-expandido">
          <h1>Resumo</h1>
          <div class="detalhe">
            <div class="info"><img src="{{asset('/imagens/boneco.png')}}">
              <p class="altura-peso">Altura e peso</p>
            </div>

            <div class="centro-info">
              <p class="numero"><strong>{{$value->altura}}</strong></p>
              <p class="cm">cm</p>
              <p class="numero"><strong>{{$value->peso}}</strong></p>
              <div class="kg">
                <p>kg</p>
              </div>
            </div>
            <div class="data">fev de 2023</div>

          </div>

          <div class="detalhe">
            <div class="info"><img src="{{asset('/imagens/amendoim.png')}}">
              <p>Alergias</p>
            </div>
            <div class="centro-info">
              <div class="alergias">
                <p>{{$value->alergias}}</p>
              </div>
            </div>
            <div class="data">fev de 2023</div>
          </div>

          <div class="detalhe">
            <div class="info"><img src="{{asset('/imagens/pilula.png')}}">
              <p>Medicamentos</p>
            </div>
            <div class="centro-info">
              <div class="medicamentos">
                <p>{{$value->medicamentos}}</p>
              </div>
            </div>
            <div class="data">fev de 2023</div>
          </div>

          <div class="detalhe">
            <div class="info"><img src="{{asset('/imagens/sangue.png')}}">
              <p>Tipo Sanguineo</p>
            </div>
            <div class="centro-info">
              <div class="sangue">
                <p class="o">{{$value->tipo_sanguineo}}</p>
              </div>
            </div>
            <div class="data">fev de 2023</div>
          </div>

          <div class="detalhe">
            <div class="info"><img src="{{asset('/imagens/vacinacao.png')}}">
              <p>Vacinas</p>
            </div>
            <div class="vacinas">
              <div class="sarampo">
                <p>Sarampo</p>
              </div>
              <div class="febre">
                <p>Febre Amarela</p>
              </div>
            </div>
            <div class="data">fev de 2023</div>
          </div>

          <div class="detalhe">
            <div class="info"><img src="{{asset('/imagens/marcador.png')}}">
              <p>Observações</p>
            </div>
            <div class="centro-info">
              <div class="observacao">
                <p>{{$value->observacoes}}</p>
              </div>
            </div>
            <div class="data">fev de 2023</div>
          </div>
        </div>
      </div>
      @endforeach


      <div class="cards" id="divClicavel">
          <img src="{{asset('/imagens/icon atestados.png')}}">
          <p>Atestado</p>
          <div class="texto-expandido">
            <form action="{{ route('upload_docs') }}" method="post" enctype="multipart/form-data" class="my-4">
              @csrf
              <div class="form-group">
                <label for="document">
                <input type="file" name="document" id="document" class="form-control-file">
            </label>
              </div>
              <label for="submit">
             <button type="submit" class="btn btn-primary" id="botao">Enviar</button>
            </label>
           </form>
          </div>
        </div>

      <div class="cards">
        <img src="{{asset('/imagens/icon cardapio.png')}}">
        <p>Cardápio</p>
        <div class="texto-expandido">
          <div class="cardapio">
            <p><strong>Colocação</strong></p>
            <div class="descricao">
              <p>Mini pão francês com manteiga;<br> Café com leite</p>
            </div>
          </div>
          <div class="cardapio">
            <p><strong>Lanche da manhã</strong></p>
            <div class="descricao">
              <p>Biscoito maionese;<br> Suco de maracujá</p>
            </div>
          </div>
          <div class="cardapio">
            <p><strong>Almoço</strong></p>
            <div class="descricao">
              <p>Arroz, Feijão preto, Carne moída, Macarrão a bolonhesa;<br><br>
                Suco: Limonada;<br><br>
                Sobremesa: Maçã
              </p>
            </div>
          </div>
          <div class="cardapio">
            <p><strong>Lanche da Tarde</strong></p>
            <div class="descricao">
              <p>Duo de frutas (maçã e banana)</p>
            </div>
          </div>
        </div>
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

      const cards = document.querySelectorAll('.cards');

cards.forEach(card => {
card.addEventListener('click', () => {
const textoExpandido = card.querySelector('.texto-expandido');
card.classList.toggle('expandido');
textoExpandido.classList.toggle('mostrar');
card.classList.toggle('card-normal');
});
});

var divClicavel = document.getElementById('divClicavel');
var elementosInternos = divClicavel.querySelectorAll('input, button, select, label'); // Adicione outros elementos internos, se necessário

elementosInternos.forEach(elemento => {
elemento.addEventListener('click', function(event) {
event.stopPropagation();
});
});

function validarFormulario() {
var inputFile = document.getElementById('document');
if (inputFile.files.length === 0) {
alert('Selecione um arquivo');
return false;
} else {
var botaoEnviar = document.getElementById('botao');
botaoEnviar.innerText = 'Enviado';
var imagemEnviado = document.createElement('img');
imagemEnviado.src = './imagem/salvo.png'; // Defina o caminho para a imagem desejada
var divBotao = document.getElementById('divClicavel');
divBotao.appendChild(imagemEnviado);
return true;
}
}

      // // document.getElementById('img-1').addEventListener('click', function() {
      // // document.getElementById('menu-lateral').style.left = '0'; 
      // });
    </script>


</body>