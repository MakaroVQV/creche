@extends('adminlte::page')

@section('content')

<head>
    <title>Visualizar Usuários</title>
</head>
<body>
    <h1>Visualizar Fichas</h1>
<b>Nome:              </b>{{$fichas->ficha->name}}<br>
<b>ID:              </b>{{$fichas->id}}<br>
<b>Altura:          </b>{{$fichas->altura}}<br>
<b>Peso:            </b>{{$fichas->peso}}<br>
<b>Alergias:        </b>{{$fichas->alergias}}<br>
<b>Medicamentos:    </b>{{$fichas->medicamentos}}<br>
<b>Tipo Sanguineo:  </b>{{$fichas->tipo_sanguineo}}<br>
<b>Observações:     </b>{{$fichas->observacoes}}<br>


</body>
@endsection