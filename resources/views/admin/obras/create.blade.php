@extends('layouts.app')

@section('content')
<script src="{{ asset('js/localStorage.js') }}" defer></script>
<script src="{{ asset('js/color.js') }}" defer></script>
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
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-xs-12">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <strong>Nova Obra</strong>
                    </h5>
                    <form id="form-obra" onload="load()" action="{{ route('admin.obras.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input
                                id="nome"
                                type="text"
                                class="form-control @error('nome') is-invalid @enderror"
                                name="nome"
                                caption="nome"
                                placeholder="Título da Obra">
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
                                value="10"
                                style="width: 100%"/>
                            <div class="timer-group pl-3 pr-3 pt-2 d-flex">
                                <span class="pr-2 h5" id="timer-caption">5</span>
                                <strong>segundos</strong>
                            </div>
                        </div>
                        <div class="form-group">
                            <select
                                class="form-control @error('color_id') is-invalid @enderror"
                                name="color_id"
                                id="color-input">
                                <option value="">---SELECIONE UMA COR---</option>
                                @foreach ($cores as $cor)
                                    <option
                                        style="background-color: {{ $cor->background_color }};
                                        color: {{ $cor->font_color }}
                                        padding: 10px 0"
                                        value="{{ $cor->id }}">
                                        {{-- {{ $cor->id}} --}}
                                    </option>
                                @endforeach
                            </select>

                            @error('color_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success pull-right ml-2"><strong>Cadastrar</strong></button>
                            <a class="btn btn-danger pull-right" href="{{ route('admin.obras.show') }}" style="color:#fff"><strong>Cancelar</strong></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
