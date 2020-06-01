@extends('layouts.app')

@section('content')
<div class="container-fluid mb-3">
    <div class="row">

        <div class="col-1">
            <a href="{{ route('admin.home') }}" class="btn btn-sm btn-secondary">Voltar</a>
            {{-- <a class="btn btn-sm btn-primary hidden-print" href="'.$url.'">rrr</a> --}}
        </div>
        <div class="col-11">
            <a href="{{ route('admin.obras.create') }}" class="pull-right btn btn-sm btn-success">Nova Obra</a>
            {{-- <a class="pager-button pull-right btn btn-sm btn-primary hidden-print" href="'.$url.'">rrr</a> --}}
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
                                    <a class="btn btn-sm btn-warning mr-1" href="{{ route('admin.obras.edit', $obra->id) }}">Editar</a>
                                    <form action="{{ route('admin.obras.destroy', $obra->id) }}" onsubmit="return confirm('Você tem certeza que excluir a obra: {{ $obra->nome }}?')" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-circle btn-sm btn-danger ml-1" style="margin-left:2px">Excluir</button>
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
