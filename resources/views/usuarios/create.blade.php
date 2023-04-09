<!DOCTYPE html>
<html>
<head>
    <title>Visualizar Usuários</title>
</head>
<body>
    <h1>Criar Usuários</h1>
    
    {!! Form::open(['url' => 'usuarios/create']) !!}<br>
    {{ Form::label('nome', 'Nome:')}}<br>
    {{ Form::text('nome')}}<br>
    
    {!! Form::label('email', 'Email') !!}<br>
    {!! Form::email('email') !!}<br>
    
    {{ Form::label('password', 'Senha:')}}<br>
    {{ Form::password('password')}}<br>

    {!! Form::label('profile', 'Perfil') !!}<br>
    {!! Form::select('profile', ['admin' => 'Admin', 'usuario' => 'usuario' , 'responsavel' => 'responsavel' ]) !!}<br>
        
    
    {{ Form::submit('Enviar')}}

    {!! Form::close() !!}

</body>
</html>
