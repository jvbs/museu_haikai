@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <a class="btn btn-secondary btn-sm" href="{{ url()->previous() }}">Voltar</a>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <strong>Nova Obra</strong>
                    </h5>
                    <form action="{{ route('admin.obras.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input id="nome" type="text"
                                class="form-control @error('nome') is-invalid @enderror"
                                name="nome"
                                caption="nome"
                                value="{{ old('nome') }}">
                                @error('nome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <textarea
                            id="summernote"
                            name="conteudo"
                            class="@error('conteudo') is-invalid @enderror">
                                {{ old('conteudo') }}
                        </textarea>

                            @error('conteudo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- <div class="form-group">
                            <label for="name">Cor</label>
                            <input type="color" name="color" id="color" class="form-control">
                        </div> --}}
                        <div class="form-group pull-right">
                            <button type="submit" class="btn btn-success">Criar obra</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
