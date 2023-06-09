@extends('adminlte::page')

@section('content')

    <title>Visualizar Usuários</title>
</head>
<body>
    <h1>Criar Usuários</h1>
    
    {!! Form::open(['url' => 'usuarios/create']) !!}<br>
    {{ Form::label('name', 'Nome:')}}<br>
    {{ Form::text('name')}}<br>
    
    {!! Form::label('email', 'Email') !!}<br>
    {!! Form::email('email') !!}<br>
    
    {{ Form::label('password', 'Senha:')}}<br>
    {{ Form::password('password')}}<br>

    {{ Form::label('telefone', 'Telefone:')}}<br>
    {{ Form::text('telefone')}}<br>

    {!! Form::label('profile', 'Perfil') !!}<br>
    {!! Form::select('profile', ['admin' => 'Admin', 'usuario' => 'usuario' , 'responsavel' => 'responsavel' ]) !!}<br>
        
    
    {{ Form::submit('Enviar')}}

    {!! Form::close() !!}

</body>

@endsection
