<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('public/css/formularios.css')}}">

        <title>Formulado de upload</title>

        
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    </head>
    <body>
    <form action="{{ route('upload_docs') }}" method="post" enctype="multipart/form-data" class="my-4">
    @csrf
    <div class="form-group">
        <label for="document">Selecione o documento:</label>
        <input type="file" name="document" id="document" class="form-control-file">
    </div>
    <button onclick="sendDocument()" class="btn btn-primary">Enviar</button>
</form>

<script>
    function openPopup() {
        popup.onload = function() {
            // Quando a janela pop-up é carregada, você pode fazer alguma ação aqui, se necessário
        };
    }

    function sendDocument() {
        var popup = window.open('', '_blank');
        var form = document.createElement('form');
       
        form.method = 'post';
        form.enctype = 'multipart/form-data';

        var input = document.createElement('input');
        input.type = 'file';
        input.name = 'document';

        form.appendChild(input);
        popup.document.body.appendChild(form);
        form.submit();

        popup.addEventListener('unload', function() {
            // A janela pop-up foi fechada
            alert('Documento enviado com sucesso!');
        });
    }
</script>
    </body>
</html>
