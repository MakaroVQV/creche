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

        <!-- Posters -->
        @foreach($postagem as $value)
        <div class="posters">
            <div class="titulo">
                <img src="{{asset('/imagens/megafone.png')}}">
            </div>
            <center>
                <p>{{ $value->titulo }}</p>
            </center>
            <div class="imagem-centro">
                <img src="{{asset('/imagens/luis.jpg')}}">
            </div>
            <div class="descricao">
                <p>{{ $value->conteudo }}</p>
            </div>
        </div>
        @endforeach

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



        // // document.getElementById('img-1').addEventListener('click', function() {
        // // document.getElementById('menu-lateral').style.left = '0'; 
        // });
    </script>

</body>