@extends('adminlte::page')

@section('content')
    <title>Editar cobrança</title>
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

    {!! Form::open(['url' => 'financas/'. $financas->id , 'method'=>'put']) !!}<br>

    {{ Form::label('vencimento', 'Vencimento:')}}<br>
    {{ Form::date('vencimento',$financas->vencimento)}}<br>
    
    {!! Form::label('valor', 'Valor:') !!}<br>
    {!! Form::number('valor', $financas->valor) !!}<br>
    
    {!!Form::label('valor_pagos', 'Valor Pago:')!!}<br>
    {!!Form::number('valor_pagos',$financas->valor_pagos)!!}<br>

    {!! Form::label('status', 'Status:') !!}<br>
    {!! Form::select('status', ['Pendente' => 'Pendente', 'Pago' => 'Pago']) !!}<br>
        
    
    {{ Form::submit('Enviar')}}

    {!! Form::close() !!}
<br>
</body>
<footer>
    <a class=" btn btn-primary" href="{{ url('financas/') }}">Voltar</a>
</footer>
@endsection