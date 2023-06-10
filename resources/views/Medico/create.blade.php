@extends('adminlte::page')

@section('content')

    <title>Criar Fichas Medicas</title>
</head>
<body>
    <h1>Criar Fichas Medicas</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    
    {!! Form::open(['url' => 'medico/create']) !!}<br>

    {!! Form::label('aluno', 'Aluno:') !!}<br>
    {!! Form::select('aluno_id', $alunos ) !!}<br>

    {{ Form::label('altura', 'Altura:')}}<br>
    {{ Form::text('altura')}}<br>
    
    {!! Form::label('peso', 'Peso:') !!}<br>
    {!! Form::text('peso') !!}<br>
    
    {{ Form::label('alergias', 'Alergias:')}}<br>
    {{ Form::text('alergias')}}<br>

    {!! Form::label('medicamentos', 'Medicamentos:') !!}<br>
    {!! Form::text('medicamentos', )!!}<br>

    {!! Form::label('tipo_sanguineo', 'Tipo sanguineo:') !!}<br>
    {!! Form::select('tipo_sanguineo', ['O+' => 'O+', 'O-' => 'O-' , 'A+' => 'A+' , 'A-' => 'A-' , 'B+' => 'B+' , 'B-' => 'B-' , 'AB+' => 'AB+' , 'AB-' => 'AB-' ]) !!}<br>
        
    {!! Form::label('obrsevacoes', 'Obrsevações:') !!}<br>
    {!! Form::text('obrsevacoes', )!!}<br>

    <br>
    {{ Form::submit('Enviar')}}

    {!! Form::close() !!}

</body>

@endsection
