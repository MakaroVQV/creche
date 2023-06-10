@extends('adminlte::page')

@section('content')
    <title>...</title>
</head>
<body>
    <h1>Edit</h1>
    
    {!! Form::open(['url' => 'financas/'. $financas->id , 'method'=>'put']) !!}<br>

    {{ Form::label('vencimento', 'Vencimento:')}}<br>
    {{ Form::text('vencimento',$financas->vencimento)}}<br>
    
    {!! Form::label('valor', 'Valor:') !!}<br>
    {!! Form::text('valor', $financas->valor) !!}<br>
    
    {!!Form::label('valor_pagos', 'Valor Pago:')!!}<br>
    {!!Form::text('valor_pagos',$financas->valor_pagos)!!}<br>

    {!! Form::label('status', 'Status:') !!}<br>
    {!! Form::select('status', ['Pendente' => 'Pendente', 'Pago' => 'Pago']) !!}<br>
        
    
    {{ Form::submit('Enviar')}}

    {!! Form::close() !!}

</body>

@endsection