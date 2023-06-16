@extends('adminlte::page')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <div class="container">
    <h1>Cardápio</h1>
    <table class="table table-dark table-striped">
        <thead>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Visualizar</th>
            </tr>
        </thead>
        <tbody>
            
        @foreach($cardapio as $value)
            <tr>
                <td class="">{{ $value->id }}</td>
                <td class="">Cardápio do Dia</td>
                <td class="">
                    
                    <a class=" btn btn-primary" href="{{ url('cardapio/' . $value->id) }}">Vizualizar</a>
                    <a class=" btn btn-warning" href="{{ url('cardapio/'. $value->id . '/edit') }}">Editar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection