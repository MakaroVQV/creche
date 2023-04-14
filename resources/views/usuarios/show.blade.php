@extends('adminlte::page')

@section('content')

<head>
    <title>Visualizar Usuários</title>
</head>
<body>
    <h1>Visualizar Usuários</h1>
<b>ID:</b>       {{$usuario->id }}   <br>
<b>Nome:</b>     {{$usuario->name }} <br>
<b>Email:</b>    {{$usuario->email }} <br>
<b>Perfil:</b>   {{$usuario->profile}} <br>

</body>
@endsection