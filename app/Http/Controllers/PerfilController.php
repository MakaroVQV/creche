<?php

namespace App\Http\Controllers;
use App\models\User;
use App\models\Aluno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PerfilController extends Controller
{
    
    public function index()
    {   
        $users = Aluno::orderby('name')->get();
        $usuario = Auth::user();
        
        return view('/perfil', compact('usuario'));
    }

}
