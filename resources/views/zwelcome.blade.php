<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('admin/login') }}">Entrar como usuário</a>
                        <a href="{{ url('admin/login') }}">Entrar como Empresa</a>
                        <a href="{{ url('/register') }}">Novo Registro</a>
                        <a href="{{ route('contato') }}">Contato</a>
                        <a href="{{ url('/sobre') }}">Sobre</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <h7>Empresários!  </h7><br>
                    <h7>Cadastre sua lanchonete, anuncie seus produtos e acompanhe as suas avaliações recebidas. </h7><br>
                    <h7>Usuários! </h7><br>
                    <h7>Cadastre-se, avelie os serviços das lanchonetes e escolha as melhores opções.  </h7><br>
                </div>

                <div class="links">
                    <img src="img/imagem aerea unb1.jpg" width="400" alt="Imagem aérea da UnB." />
                    <!--<a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>-->
                </div>
            </div>
        </div>
    </body>
</html>
