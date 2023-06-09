<?php

namespace App\Http\Controllers;
use App\models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PerfilController extends Controller
{
    

    public function index()
    {
        $usuario = Auth::user();
        return view('/perfil', compact('usuario'));
    }

    public function mostrarResponsavel($id)
    {
        $profile = user::find($id);
        return view('/perfil', compact('profile'));
    }
}
