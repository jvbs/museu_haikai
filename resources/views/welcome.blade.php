@extends('layouts.index')

@section('content')
<section class="jumbotron text-center full-height flex-center position-ref">
    <div class="container">
        <h1 class="jumbotron-heading">
            <i class="fa fa-header" aria-hidden="true"></i> <strong>{{ config('app.name', 'Laravel') }}</strong>
        </h1>
        <p class="lead text-muted">
            Sejam bem-vindos ao Museu Haikai, realizamos suas publicações de obras textuais.
            Venham compartilhar suas reflexões, poesias, frases, pensamentos,
            críticas com os internautas da plataforma.
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
                                    <a href="{{ route('index.artista', $obra->user->id) }}" class="obras-btn btn btn-sm btn-outline-secondary"><i class="fa fa-user"></i> <span class="obra-artista">{{ $obra->user->name }}</span></a>
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
@endsection
