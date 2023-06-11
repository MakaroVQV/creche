@extends('adminlte::page')

@section('content')

    {!! Form::open(['url' => 'postagem/create']) !!}

    {!! Form::label('titulo', 'Título') !!}<br>
    {!! Form::text('titulo') !!}<br>

    {!! Form::label('conteudo', 'Conteudo') !!}<br>
    {!! Form::text('conteudo') !!}<br>

    {!! Form::submit('Enviar') !!}<br>

    {!! Form::close() !!}

@endsection