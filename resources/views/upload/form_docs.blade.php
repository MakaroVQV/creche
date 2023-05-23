<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <form action="{{route('upload_docs')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="document">
    <button type="submit">Enviar</button>
    
    </form>
    </body>
</html>
