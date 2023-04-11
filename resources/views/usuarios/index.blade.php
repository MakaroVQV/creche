@extends('adminlte::page')

@section('content')

    <h1>Visualizar Usuários</h1>
    <a href="{{ url('usuarios/create')}}">CRIAR</a>
    @if (session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ url('usuarios/'. $user->id) }}">Vizualizar </a>
                    <a class="btn btn-warning" href="{{ url('usuarios/'. $user->id . '/edit') }}">Editar </a>
                    {!! Form::open(['method' => 'DELETE','route' =>['usuarios.destroy', $user->id],'style'=>'display:inline']) !!}
                    {{Form::submit('Excluir', ['class' => 'btn btn-danger'])}}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
