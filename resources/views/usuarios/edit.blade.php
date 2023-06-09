@extends('adminlte::page')

@section('content')
    <title>Visualizar Usuários</title>
</head>
<body>
    <h1>Editar Usuários</h1>
    
    {!! Form::open(['url' => 'usuarios/'. $usuario->id , 'method'=>'put']) !!}<br>
    {{ Form::label('name', 'Nome:')}}<br>
    {{ Form::text('name',$usuario->name)}}<br>
    
    {!! Form::label('email', 'Email') !!}<br>
    {!! Form::email('email',$usuario->email) !!}<br>
    
    {{ Form::label('password', 'Senha:')}}<br>
    {{ Form::password('password')}}<br>

    {{ Form::label('telefone', 'Telefone:')}}<br>
    {{ Form::text('telefone', $usuario->telefone)}}<br>

    {!! Form::label('profile', 'Perfil') !!}<br>
    {!! Form::select('profile', ['admin' => 'Admin', 'usuario' => 'usuario' , 'responsavel' => 'responsavel' ]) !!}<br>
        
    
    {{ Form::submit('Enviar')}}

    {!! Form::close() !!}

</body>

@endsection
