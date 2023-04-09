<!DOCTYPE html>
<html>
<head>
    <title>Visualizar Usuários</title>
</head>
<body>
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
                <td>{{ $user->nome }}</td>
                <td>
                    <a href="{{ url('usuarios/'. $user->id) }}">Vizualizar </a>
                    <a href="{{ url('usuarios/'. $user->id . '/edit') }}">Editar </a>
                    {!! Form::open(['method' => 'DELETE','route' =>['usuarios.destroy', $user->id],'style'=>'display:inline']) !!}
                    {{Form::submit('Excluir')}}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
