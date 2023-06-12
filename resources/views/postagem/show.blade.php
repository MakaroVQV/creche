@extends('adminlte::page')

@section('content')

    <strong>id:</strong> {{ $postagem->id }} <br>
    <strong>Título:</strong> {{ $postagem->titulo }} <br>
    <strong>Conteúdo:</strong> {{ $postagem->conteudo }} <br>
    
@endsection