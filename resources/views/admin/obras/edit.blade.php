@extends('layouts.app')

@section('content')
<style>
    @media(max-width:582px){
        #timer-area {
            display: block !important;
        }
    }
</style>
<div class="container-fluid">
    <a class="btn btn-secondary btn-sm" href="{{ route('admin.obras.show') }}">Voltar</a>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <strong>Editar Obra</strong>
                    </h5>
                    <form action="{{ route('admin.obras.update', $obra->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <input id="nome" type="text"
                                class="form-control @error('nome') is-invalid @enderror"
                                name="nome"
                                caption="nome"
                                value="{{ old('nome') ?? $obra->nome }}">
                                @error('nome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <textarea
                                id="summernote"
                                name="conteudo"
                                class="@error('conteudo') is-invalid @enderror">
                                    {{ old('conteudo') ?? $obra->conteudo }}
                            </textarea>

                            @error('conteudo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div id="timer-area" class="form-group d-flex">
                            <label class="pt-2 pr-2" for="timer">Duração:</label>
                            <input
                                type="range"
                                id="timer"
                                name="timer"
                                min="5"
                                max="60"
                                value="{{ old('timer') ?? $obra->timer }}"
                                style="width: 100%"/>
                            <div class="timer-group pl-3 pr-3 pt-2 d-flex">
                                <span class="pr-2 h5" id="timer-caption">5</span>
                                <strong>segundos</strong>
                            </div>
                        </div>

                        <div class="form-group pull-right">
                            <button type="submit" class="btn btn-success">Editar obra</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
