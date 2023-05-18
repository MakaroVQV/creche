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
          

        <!--Formulario-->

        <center><h1>Meus dados</h1></center>
        <br>
        <br>
        <br>

    <center><p class="circulo">CS Carol</p></center><br>
<div class="container">
<form>
    <div class="direita">
    <label for="name">Nome Completo:</label>
        <input type="text" id="name" name="name" value="Carolina Souza De Araújo">
    <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" value="carolinasouzaa@gmail.com"><br><br>
    <label for="gender">Gênero:</label>
        <input type="feminino" id="Feminino" name="Feminino" value="Feminino"><br><br>
    </div>
    <div class="esquerda">
    <label for="phone">Telefone:</label>
        <input type="tel" id="phone" name="phone" value="(21) 98765-4321"><br><br>
    </div>
    <div id="botao">
        <input id="enviar" type="submit" value ="Enviar">
    </div>
    
</form>
</div>


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

            <div class="copSyriht">
                <img src="{{asset('/imagens/icon_copyright.png')}}" class="copyright">
                <p><strong>2023 FROM NEWPATH</strong></p>
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