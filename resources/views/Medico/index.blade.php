@extends('adminlte::page')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<h1>Fichas Medicas</h1>

<div class="container">
    <table class="table table-dark">
        <thead>
                        @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            <tr>
                <th>Nome</th>
                <th>ID</th>
                <th>Ação</th>
                <a class="col-sm btn btn-success" href="{{ url('medico/create')}}">Criar</a>
            </tr>
        </thead>
        <tbody>
            @foreach($fichas as $value)
            <tr>
                <td class="">{{$value->ficha->name ?? 'None'}}</td>
                <td class="">{{ $value->id }}</td>
                <td class="">
                    
                    <a class=" btn btn-primary" href="{{ url('medico/'. $value->id) }}">Vizualizar</a>
                    <a class=" btn btn-warning" href="{{ url('medico/'. $value->id . '/edit') }}">Editar</a>
                    {!! Form::open(['method' => 'DELETE','route' =>['medico.destroy', $value->id],'style'=>'display:inline']) !!}
                    {{Form::submit('Excluir', ['class' => ' btn btn-danger'])}}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection