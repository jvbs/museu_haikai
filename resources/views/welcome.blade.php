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
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/index.js') }}" defer></script>
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
                                        @php $rand =  rand(0, (count($cores)-1)) @endphp
                                        <p class="card-text obra-titulo" style="background-color: {{ $cores[$rand]->background_color }}; color: {{ $cores[$rand]->font_color }}" >{{ $obra->nome }}</p>
                                        <textarea type="text" class="obra-conteudo d-none">
                                            {{ $obra->conteudo }}
                                        </textarea>
                                        <div class="justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <a class="obras-btn btn btn-sm btn-outline-secondary open-modal"><i class="fa fa-eye"></i> Visualizar obra</a>
                                                <a href="#" class="obras-btn btn btn-sm btn-outline-secondary"><i class="fa fa-user"></i> <span class="obra-artista">{{ $obra->user->name }}</span></a>
                                            </div>
                                            <div class="info d-flex mt-2">
                                                <small class="text-muted"><span class="obra-timer">{{ $obra->timer }}</span> segundos</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="modal fade" id="modal-obra" tabindex="-1" role="dialog" aria-labelledby="modal-obraTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitle"></h5>
                                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button> --}}
                                </div>
                                <div class="modal-body" id="modalBody"></div>
                                <div class="modal-footer">
                                    <i class="fa fa-clock-o"></i><span class="mr-auto" id="modalTimer"></span>
                                    <i class="fa fa-user"></i><span id="modalArtista"></span>
                                </div>
                            </div>
                        </div>
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
