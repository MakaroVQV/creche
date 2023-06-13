@extends('adminlte::page')

@section('content')

<head>
    <title>Financeiro</title>
</head>
<body>
    {{-- @foreach ($financa as $value) --}}
    <h1>Financeiro</h1>
    <b>Responsável:</b>          {{$financa->responsavel_id }}   <br>
    <b>Vencimento:</b>           {{$financa->vencimento }}   <br>
    <b>Valor:</b>                {{$financa->valor }} <br>
    <b>Valor Pago:</b>           {{$financa->valor_pagos }} <br>
    <b>Status:</b>               {{$financa->status}} <br>
    {{-- @endforeach --}}
</body>
@endsection