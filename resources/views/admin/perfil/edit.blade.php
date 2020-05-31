@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <a class="btn btn-secondary btn-sm" href="{{ route('admin.home') }}">Voltar</a>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <strong>Editar Perfil</strong>
                    </h5>
                    <form action="{{ route('admin.perfil.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input id="name" type="text"
                            class="form-control @error('name') is-invalid @enderror"
                            name="name"
                            caption="name"
                            value="{{ old('name') ?? $user->name }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input id="email" type="text"
                            class="form-control @error('email') is-invalid @enderror"
                            name="email"
                            caption="email"
                            value="{{ old('email') ?? $user->email }}">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="site">Site</label>
                            <input id="site" type="text"
                            class="form-control @error('site') is-invalid @enderror"
                            name="site"
                            caption="site"
                            value="{{ old('site') ?? $user->site }}">
                            @error('site')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="aboutme">Sobre mim</label>
                            <textarea id="aboutme" type="text"
                            class="form-control @error('aboutme') is-invalid @enderror"
                            name="aboutme"
                            caption="aboutme"
                            rows="4">{{ old('aboutme') ?? $user->aboutme }}</textarea>
                            @error('aboutme')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group pull-right">
                            <button type="submit" class="btn btn-success">Editar perfil</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
