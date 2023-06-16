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

    {!! Form::open(['url' => 'cardapio/'. $cardapio->id , 'method'=>'put']) !!}<br>

    {!! Form::label('colacao', 'Colação') !!}<br>
    {!! Form::text('colacao', $cardapio->colacao) !!}<br>

    {!! Form::label('lanche_manha', 'Lanche da Manhã') !!}<br>
    {!! Form::text('lanche_manha', $cardapio->lanche_manha) !!}<br>

    {!! Form::label('almoco', 'Almoço') !!}<br>
    {!! Form::text('almoco', $cardapio->almoco) !!}<br>

    {!! Form::label('lanche_tarde', 'Lanche da Tarde') !!}<br>
    {!! Form::text('lanche_tarde', $cardapio->lanche_tarde) !!}<br>

    {!! Form::submit('Enviar') !!}<br>

    {!! Form::close() !!}

</body>
@endsection