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
                                <td class="d-flex">
                                    <a class="btn btn-sm btn-warning" href="{{ route('admin.obras.edit', $obra->id) }}">Editar</a>
                                    <form action="{{ route('admin.obras.destroy', $obra->id) }}" onsubmit="return confirm('Você tem certeza que excluir {{ $obra->nome }}?')" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-circle btn-sm btn-danger" style="margin-left:2px">Excluir</button>
                                    </form>
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
