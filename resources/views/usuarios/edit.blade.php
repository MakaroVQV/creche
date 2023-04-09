<!DOCTYPE html>
<html>
<head>
    <title>Visualizar Usuários</title>
</head>
<body>
    <h1>Editar Usuários</h1>
    
    {!! Form::open(['url' => 'usuarios/'. $usuario->id , 'method'=>'put']) !!}<br>
    {{ Form::label('nome', 'Nome:')}}<br>
    {{ Form::text('nome',$usuario->nome)}}<br>
    
    {!! Form::label('email', 'Email') !!}<br>
    {!! Form::email('email',$usuario->email) !!}<br>
    
    {{ Form::label('password', 'Senha:')}}<br>
    {{ Form::text('password',$usuario->password)}}<br>

    {!! Form::label('profile', 'Perfil') !!}<br>
    {!! Form::select('profile', ['admin' => 'Admin', 'usuario' => 'usuario' , 'responsavel' => 'responsavel' ]) !!}<br>
        
    
    {{ Form::submit('Enviar')}}

    {!! Form::close() !!}

</body>
</html>
