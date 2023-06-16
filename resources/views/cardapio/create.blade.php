@extends('adminlte::page')

@section('content')

    {!! Form::open(['url' => 'cardapio/create']) !!}

    {!! Form::label('colacao', 'Colação') !!}<br>
    {!! Form::text('colacao') !!}<br>

    {!! Form::label('lanche_manha', 'Lanche da Manhã') !!}<br>
    {!! Form::text('lanche_manha') !!}<br>

    {!! Form::label('almoco', 'Almoço') !!}<br>
    {!! Form::text('almoco') !!}<br>

    {!! Form::label('lanche_tarde', 'Lanche da Tarde') !!}<br>
    {!! Form::text('lanche_tarde') !!}<br>

    {!! Form::submit('Enviar') !!}<br>

    {!! Form::close() !!}

@endsection