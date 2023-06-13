<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Aluno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PerfilController extends Controller
{
    
    public function index()
    {
        $usuario = Auth::user();
        //dd ($usuario);
        $alunos = Aluno::where('responsavel_id', $usuario->id)->get();
        return view('/perfil', compact('usuario', 'alunos'));
    }

    public function selecionarAluno($id)
    {
        session(['aluno_id' => $id]);
        $aluno_id = session('aluno_id');
        //dd($aluno_id);
        $usuario = Auth::user();
        //dd ($usuario);
        $alunos = Aluno::where('responsavel_id', $usuario->id)->get();
        return view('/perfil', compact('usuario', 'alunos'));
    }

 

    
}
