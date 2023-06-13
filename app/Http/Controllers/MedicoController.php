<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Medico;
use App\Models\Aluno;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MedicoController extends Controller
{

    public function index()
    {
        // dd('index');
        // $fichas = User::with('user')->get();
        $fichas = Medico::orderby('id')->get();
        return view('Medico.index', ['fichas' => $fichas]);
    }


    public function create()
    {
        $alunos = Aluno::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('Medico.create', ['alunos' => $alunos]);
    }


    public function store(Request $request)
    {

        //dd($request->all());
        $validated = $request->validate([
            'aluno_id'          => 'required',
            'altura'            => 'required|integer|min:2|max_digits:3',
            'peso'              => 'required|integer|min:2',
            'alergias'          => 'required',
            'medicamentos'      => '',
            'tipo_sanguineo'    => 'required',
            'observacoes'       => ''
        ]);

        $ficha = new Medico;
        $ficha->aluno_id        = $request->aluno_id;
        $ficha->altura          = $request->input('altura');
        $ficha->peso            = $request->input('peso');
        $ficha->alergias        = $request->input('alergias');
        $ficha->medicamentos    = $request->input('medicamentos');
        $ficha->tipo_sanguineo  = $request->input('tipo_sanguineo');
        $ficha->observacoes     = $request->input('observacoes');
        $ficha->save();

        return redirect('/Medico.index')->with('status', 'Ficha criada com sucesso!');
    }


    public function show(string $id)
    {

        $fichas = Medico::find($id);
        return view('Medico.show', ['fichas' => $fichas]);
    }


    public function edit(string $id)
    {
        $fichas = Medico::find($id);
        return view('Medico.edit', ['fichas' => $fichas]);
    }


    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'altura'            => 'required|integer|min:2|max_digits:3',
            'peso'              => 'required|integer|min:2',
            'alergias'          => 'required',
            'medicamentos'      => '',
            'tipo_sanguineo'    => 'required',
            'observacoes'       => ''
        ]);
        $ficha = Medico::find($id);
        $ficha->altura = $request->input('altura');
        $ficha->peso = $request->input('peso');
        $ficha->alergias = $request->input('alergias');
        $ficha->medicamentos = $request->input('medicamentos');
        $ficha->tipo_sanguineo = $request->input('tipo_sanguineo');
        $ficha->observacoes = $request->input('observacoes');
        $ficha->save();

        return redirect('/Medico/index')->with('status', 'Ficha atualizada com sucesso!');
    }


    public function destroy(string $id)
    {
        $fichas = Medico::find($id);
        $fichas->delete();

        return redirect('/medico/index')->with('status', 'Ficha deletada com sucesso!');
    }


    public function index2()
    {
        // dd('index');
        // $fichas = User::with('user')->get();
        $fichas = Medico::orderBy('id')->get();
        return view('/saude', ['fichas' => $fichas]);
    }
}
