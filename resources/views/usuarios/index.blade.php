@extends('adminlte::page')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<h1>Visualizar Usuários</h1>

<div class="container">
    <table class="table table-dark">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Perfil</th>
                <th>Ação</th>
                <a class="col-sm btn btn-success" href="{{ url('usuarios/create')}}">Criar</a>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td class="">{{ $user->name }}</td>
                <td class="">{{ $user->profile }}</td>
                <td>  
                    <a class=" btn btn-primary" href="{{ url('usuarios/'. $user->id) }}">Vizualizar</a>
                    <a class=" btn btn-warning" href="{{ url('usuarios/'. $user->id . '/edit') }}">Editar</a>
                    {!! Form::open(['method' => 'DELETE','route' =>['usuarios.destroy', $user->id],'style'=>'display:inline']) !!}
                    {{Form::submit('Excluir', ['class' => ' btn btn-danger'])}}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection