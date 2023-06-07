<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Medico;
use App\models\User;
use Illuminate\Support\Facades\Hash;

class MedicoController extends Controller
{

    public function index()
    {
        // dd('index');
        $fichas = User::with('user')->get();
        $fichas = Medico::orderby('id')->get();
        return view('medico.index', ['fichas' => $fichas]);
    }


    public function create()
    {
        return view('medico.create');
    }


    public function store(Request $request)
    {

        //dd($request->all());
        $validated = $request->validate([
            'altura'            => 'required|integer|min:3',
            'peso'              => 'required|integer|min:2',
            'alergias'          => 'required',
            'medicamentos'      => '',
            'tipo_sanguineo'    => 'required',
            'observacoes'       => ''
        ]);

        $ficha = new Medico;
        $ficha->altura = $request->input('altura');
        $ficha->peso = $request->input('peso');
        $ficha->alergias = $request->input('alergias');
        $ficha->medicamentos = $request->input('medicamentos');
        $ficha->tipo_sanguineo = $request->input('tipo_sanguineo');
        $ficha->observacoes = $request->input('observacoes');
        $ficha->save();

        return redirect('/medico')->with('status', 'Ficha criada com sucesso!');
    }


    public function show(string $id)
    {

        $fichas = Medico::find($id);
        return view('medico.show', ['fichas' => $fichas]);
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
