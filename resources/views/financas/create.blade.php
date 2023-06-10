@extends('adminlte::page')

@section('content')

    <title>Financeiro</title>
</head>
<body>
    <h1>Financeiro</h1>
    {!! Form::open(['url' => 'financas/create']) !!}<br>

    {!! Form::label('responsavel', 'Responsavel:') !!}<br>
    {!! Form::select('responsavel_id', $responsavel ) !!}<br>

    {{ Form::label('vencimento', 'Vencimento:')}}<br>
    {{ Form::text('vencimento')}}<br>
    
    {!! Form::label('valor', 'Valor:') !!}<br>
    {!! Form::text('valor') !!}<br>
    
    {{ Form::label('valor_pagos', 'Valor Pago:')}}<br>
    {{ Form::text('valor_pagos')}}<br>

    {!! Form::label('status', 'Status:') !!}<br>
    {!! Form::select('status', ['Pendente' => 'Pendente', 'Pago' => 'Pago']) !!}<br>
        
    
    {{ Form::submit('Enviar')}}

    {!! Form::close() !!}
</body>

@endsection