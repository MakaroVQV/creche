<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $users= User::orderby('nome')->get();
        return view('usuarios.index',['users'=>$users]);
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
        'nome'      => 'required',
        'email'     => 'required|email',
        'password'  => 'required',
        'profile'   => 'required'

        ]);



        $user = new User;
        $user->nome = $request->input('nome');
        $user->email = $request->input('email');
        $user->password = ($request->input('password'));
        $user->profile = $request->input('profile');

        $user->save();
        return redirect('/usuarios')->with('status', 'Usuário criado com sucesso!');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuario=User::find($id);
        return view('usuarios.show',['usuario'=>$usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario=User::find($id);
        return view('usuarios.edit',['usuario' => $usuario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        

        $validated  = $request->validate([
            'nome'      => 'required',
            'email'     => 'required|email',
            'password'  => 'required',
            'profile'   => 'required',
        ]);

            $user = User::find($id);
            $user->nome         = $request->input('nome');
            $user->email        = $request->input('email');
            $user->password     = ($request->input('password'));
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


