<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">

    <title>Creche</title>
</head>

<body>
    <!-- Menu acima -->
    <div class="container">
        
        <img src="{{ url('/imagens/icon menu.png') }}" alt="Imagem"></div>
        <div class="topo-2"><img src="{{ url('/imagens/creche.png') }}" alt="Imagem"></div>
        <div class="texto">
            <h5><strong>Aluno(a)</strong></h5>
        </div>
        <div class="topo-3"><img src="{{ url('/imagens/icon aluna.png')}}" id="img-3"></div>
    </div>

    <!-- Carrosel -->

    <div class="carousel">
        <div class="carousel-container">
            <div class="carousel-slide">
                <div class="carousel-item">
                    <!-- Div que contem o megafone e texto abaixo-->
                    <div class="image-title">
                        <img src="{{url('/imagens/icon megafone.png') }}" class="megafone">
                        <p>Dia Mundial do Autismo</p>
                    </div>
                    <!-- Div que contem o as imagens central abaixo-->
                    <div class="image-center" id="item-1">
                    <img src="{{ url('/imagens/luis.jpeg') }}" class="img-center">
                        <p>🧩 2 de abril dia mundial do autismo 🧩<br>
                            Um dia especial para pessoas incríveis 💙</p>
                            <img src="{{ url('/imagens/icon curtir.png') }}" class="img-large-1">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="image-title">
                    <img src="{{url('/imagens/icon megafone.png') }}" class="megafone">
                        <p>Dia Mundial da Água</p>
                    </div>
                    <div class="image-center" id="item-2">
                    <img src="{{ url('/imagens/luis.jpeg') }}" class="img-center">
                        <p>Hoje é dia de algo muito importante para todos nós!<br>
                            O objetivo do Dia Mundial da Água é promover<br> conscientização sobre a relevância da água para a nossa<br> sobrevivência e de outros seres vivos.</p>
                            <img src="{{ url('/imagens/icon curtir.png') }}" class="img-large-2">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="image-title">
                    <img src="{{url('/imagens/icon megafone.png') }}" class="megafone">
                        <p>Dia internacional da Mulher</p>
                    </div>
                    <div class="image-center" id="item-3">
                    <img src="{{ url('/imagens/luis.jpeg') }}" class="img-center">
                        <p>Dia 08 de Março - Dia Internacional da Mulher.<br>
                            Nós da Jardim dos Sonhos viemos parabenizar todas as mulheres<br> de dentro e fora da nossa instituição. Mas, principalmente a nossa<br> grande equipe, composta quase que totalmente por excepcionais<br> mulheres!
                        </p>
                        <img src="{{ url('/imagens/icon curtir.png') }}" class="img-large-3">
                        </div>
                    </div>
                </div>
            </div>
            <!--Fim da div que contem o as imagens central-->

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
            <!-- botao JS -->
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

                // // document.getElementById('img-1').addEventListener('click', function() {
                // // document.getElementById('menu-lateral').style.left = '0'; 
                // });
            </script>
</body>
</div>
</body>

</html>
