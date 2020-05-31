<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <style>
            :root {
            --jumbotron-padding-y: 3rem;
            }

            .jumbotron {
                padding-top: var(--jumbotron-padding-y);
                padding-bottom: var(--jumbotron-padding-y);
                margin-bottom: 0;
                background-color: #fff;
            }
            @media (min-width: 768px) {
                .jumbotron {
                    padding-top: calc(var(--jumbotron-padding-y) * 2);
                    padding-bottom: calc(var(--jumbotron-padding-y) * 2);
                }
            }

            .jumbotron p:last-child {
                margin-bottom: 0;
            }

            .jumbotron-heading {
                font-weight: 300;
            }

            .jumbotron .container {
                max-width: 40rem;
            }

            footer {
                padding-top: 3rem;
                padding-bottom: 3rem;
            }

            footer p {
                margin-bottom: .25rem;
            }

            .box-shadow {
                box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05);
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
        </style>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                    <a class="navbar-brand" href="#"><i class="fa fa-header" aria-hidden="true"></i> <strong>{{ config('app.name', 'Laravel') }}</strong></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse collapse justify-content-between" id="navbarNav">
                        <ul class="navbar-nav mr-auto"></ul>
                        <ul class="navbar-nav">
                            @if (Route::has('login'))
                                @auth
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.home') }}">Área Administrativa</a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">Entrar</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">Registre-se</a>
                                        </li>
                                    @endif
                                @endauth
                            @endif
                        <ul>
                    </div>
                </div>
            </nav>
        </header>
        <main role="main">
            <section class="jumbotron text-center full-height flex-center position-ref">
                <div class="container">
                    <h1 class="jumbotron-heading">
                        <i class="fa fa-header" aria-hidden="true"></i> <strong>{{ config('app.name', 'Laravel') }}</strong>
                    </h1>
                    <p class="lead text-muted">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, porro sequi, quis quod explicabo
                        dolores, quam enim quibusdam necessitatibus et perspiciatis nobis delectus a voluptate odio deleniti.
                        Commodi, nostrum rerum.
                    </p>
                    <p>
                        <a href="#obras" class="btn btn-secondary my-2">Ver Obras</a>
                    </p>
                </div>
            </section>
            <div class="album py-5 bg-light" id="obras">
                <div class="container">
                    <div class="row">
                        @foreach ($obras as $obra)
                            <div class="col-md-4">
                                <div class="card mb-4 box-shadow">
                                    <div class="card-body">
                                        <p class="card-text">{{ $obra->nome }}</p>
                                        <div class="justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary"><i class="fa fa-eye"></i> Visualizar obra</button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary"><i class="fa fa-user"></i> {{ $obra->user->name }}</button>
                                            </div>
                                            <div class="info d-flex">
                                                <small class="text-muted">{{ $obra->timer }} segundos</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </main>
        <footer class="text-muted bg-white">
            <div class="container">
                <p class="float-right">
                    <a href="#">Voltar ao topo</a>
                </p>
                <p>
                    <i class="fa fa-header" aria-hidden="true"></i>
                    {{ config('app.name', 'Laravel') }} &copy; {{ date('Y') }}  -
                    Todos os direitos reservados.</p>
            </div>
        </footer>
    </body>
</html>
