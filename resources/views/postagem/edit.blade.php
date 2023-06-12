@extends('adminlte::page')

@section('content')
    <title>Editar Postagem</title>
</head>
<body>
<h1>Editar</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    {!! Form::open(['url' => 'postagem/'. $postagem->id , 'method'=>'put']) !!}<br>

    {!! Form::label('titulo', 'Título') !!}<br>
    {!! Form::text('titulo', $postagem->titulo) !!}<br>

    {!! Form::label('conteudo', 'Conteudo') !!}<br>
    {!! Form::text('conteudo', $postagem->conteudo) !!}<br>

    {!! Form::submit('Enviar') !!}<br>

    {!! Form::close() !!}

</body>
@endsection