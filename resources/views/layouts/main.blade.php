<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('titulo')</title>
        <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/3771/3771338.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">


        <!-- BootStrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/style.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

        <!-- JS -->
        <script src="{{ asset('js/viaCep.js')}}"></script>
        <script src="{{ asset('js/login.js')}}"></script>
        <script src="{{ asset('js/excluir.js')}}"></script>


    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-laravel">
                <div class="container">
                    <ul class="navbar-nav d-flex">
                        @auth
                        <li class="nav-item">
                            <a class="navbar-brand" href="/">Bem-vindo a sua Agenda, {{ auth()->user()->name }}.</a>
                        </li>
                        <li class="nav-item ml-auto">
                            <form action="/logout" method="POST">
                                @csrf
                                <a class="btn btn-danger navbar-link" href="/logout" onclick="event.preventDefault();  window.location.href = '/login' this.closest('form').submit();">Sair</a>
                            </form>
                        </li>
                        @endauth
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="/login"><strong>Entre na sua Agenda ou</strong></a>
                        </li>
                        <li class="nav-item ml-auto">
                            <a class="nav-link btn btn-outline-secondary" href="/register">Registre-se</a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                        <p class="msg">{{ session('msg')}}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>
        <footer>
            <div class="text-center p-3">
                <p>© 2023 Copyright GabrieL</p>
            </div>
        </footer>
    </body>
</html>
