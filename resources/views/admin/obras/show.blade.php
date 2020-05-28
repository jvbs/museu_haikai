@extends('layouts.app')

@section('content')
<div class="container-fluid ">
    <div class="row">

        <div class="col-1">
            <a href="{{ url()->previous() }}" class="pt-12 pull-right btn btn-sm btn-secondary">Voltar</a>
        </div>
        <div class="col-1 offset-10">
            <a href="{{ route('admin.obras.create') }}" class="pt-12 pull-right btn btn-sm btn-success">Nova Obra</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">

        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>Título da Obra</th>
                        <th>Ações</th>
                    </thead>
                    <tbody>
                        @foreach ($obras as $obra)
                            <tr>
                                <td>{{ $obra->nome }}</td>
                                <td>
                                    <a class="btn btn-warning" href="{{ route('admin.obras.edit', $obra->id) }}">Editar</a>
                                    <a class="btn btn-danger" href="#">Excluir</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
