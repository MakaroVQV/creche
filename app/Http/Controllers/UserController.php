<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Medico;
use App\Models\Aluno;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $users = User::orderby('name')->get();
        return view('usuarios.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated  = $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'password'  => 'required',
            'profile'   => 'required'

        ]);



        $user = new User;
        $user->name             = $request->input('name');
        $user->email            = $request->input('email');
        $user->password         = Hash::make($request->input('password'));
        $user->telefone         = $request->input('telefone');
        $user->profile          = $request->input('profile');

        $user->save();
        return redirect('/usuarios')->with('status', 'Usuário criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuario = User::find($id);
        $telefoneFormatado = $usuario->telefoneFormatado;
        return view('usuarios.show', ['usuario' => $usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = User::find($id);
        return view('usuarios.edit', ['usuario' => $usuario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $validated  = $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            //'password'  => 'required',
            //'profile'   => 'required',
            'telefone'     => 'required'
        ]);

        $user = User::find($id);
        $user->name         = $request->input('name');
        $user->email        = $request->input('email');
        //if (trim($request))
        $user->password     = Hash::make($request->input('password'));
        $user->telefone     =$request->input('telefone');
        $user->profile      = $request->input('profile');
        $user->save();

        return redirect('/usuarios')->with('status', 'Usuário atualizado com sucesso!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/usuarios')->with('status', 'Usuário deletado com sucesso!');
    }



    

}
