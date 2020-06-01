@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-xs-6 mb-3">
            <div class="card">
                {{-- <img class="card-img-top"
                    src="https://via.placeholder.com/268x130.png"
                    alt="Card image cap"> --}}
                <div class="card-body text-center">
                    <h5 class="card-title">Minhas obras</h5>
                    <p class="card-text">Clique para visualizar as suas obras criadas.</p>
                    <a href="{{ route('admin.obras.show') }}" class="btn btn-primary">Visualizar obras</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-xs-6">
            <div class="card">
                {{-- <img class="card-img-top"
                    src="https://via.placeholder.com/268x130.png"
                    alt="Card image cap"> --}}
                <div class="card-body text-center">
                    <h5 class="card-title">Meu perfil</h5>
                    <p class="card-text">Clique para visualizar informações do seu perfil.</p>
                    <a href="{{ route('admin.perfil.edit', auth()->user()->id) }}" class="btn btn-primary">Meu perfil</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
