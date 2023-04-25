<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagemController extends Controller
{
    public function exibir($nome)
{
    $caminhoImagem = public_path('imagens/' . $nome);
    if (file_exists($caminhoImagem)) {
        return response()->file($caminhoImagem);
    } else {
        abort(404);
    }
}

}
