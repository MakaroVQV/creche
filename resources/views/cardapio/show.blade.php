@extends('adminlte::page')

@section('content')

    <strong>Colação:</strong> {{ $cardapio->colacao }} <br>
    <strong>Lanche da Manhã:</strong> {{ $cardapio->lanche_manha }} <br>
    <strong>Almoço:</strong> {{ $cardapio->almoco }} <br>
    <strong>Lanche da Tarde:</strong> {{ $cardapio->lanche_tarde }} <br>
    
@endsection