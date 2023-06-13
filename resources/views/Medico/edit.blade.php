@extends('adminlte::page')

@section('content')
    <title>Editar Fichas Medicas</title>
</head>
<body>
    <h1>Editar Usuários</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    
    {!! Form::open(['url' => 'medico/'. $fichas->id , 'method'=>'put']) !!}<br>
    
    {{ Form::label('altura', 'Altura:')}}<br>
    {{ Form::text('altura',$fichas->altura)}}<br>
    
    {!! Form::label('peso', 'Peso:') !!}<br>
    {!! Form::text('peso',$fichas->peso) !!}<br>
    
    {{ Form::label('alergias', 'alergias:')}}<br>
    {{ Form::text('alergias', $fichas->alergias)}}<br>

    {{ Form::label('medicamentos', 'Medicamentos::')}}<br>
    {{ Form::text('medicamentos', $fichas->medicamentos)}}<br>

    {!! Form::label('tipo_sanguineo', 'Tipo sanguineo:') !!}<br>
    {!! Form::select('tipo_sanguineo', ['O+' => 'O+', 'O-' => 'O-' , 'A+' => 'A+' , 'A-' => 'A-' , 'B+' => 'B+' , 'B-' => 'B-' , 'AB+' => 'AB+' , 'AB-' => 'AB-'], $fichas->tipo_sanguineo)!!}<br>

    {{ Form::label('observacoes', 'Observações:')}}<br>
    {{ Form::text('observacoes', $fichas->observacoes)}}<br>
    
    {{ Form::submit('Enviar')}}

    {!! Form::close() !!}

</body>

@endsection
