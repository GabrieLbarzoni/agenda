<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $__env->yieldContent('titulo'); ?></title>
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
        <script src="<?php echo e(asset('js/viaCep.js')); ?>"></script>
        <script src="<?php echo e(asset('js/login.js')); ?>"></script>


    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light navbar-laravel" style="background-color: rgba(0, 0, 0, 0.05)">
                <div class="container">
                    <a class="navbar-brand" href="/login">Login</a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Agenda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/create">Cadastrar Contato</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <?php echo $__env->yieldContent('content'); ?>
        <footer>
            <div class="text-center p-3">
                <p>© 2023 Copyright GabrieL</p>
            </div>
        </footer>
    </body>
</html>
<?php /**PATH D:\Users\Gabriel Lucas\Desktop\Desafio - Agenda\agenda-app\agenda-app\resources\views/layouts/main.blade.php ENDPATH**/ ?>