<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Financa;
use App\Models\User;
use App\Models\Aluno;

class FinancaController extends Controller
{


    public function index()
    {   
        
        $financas = Financa::orderby('id')->get();
        return view('financas.index', ['financa' => $financas]);
    }
    public function exibir()
    {
        $user = Auth::user('id');
        //$status = Financa::where('status', 'pendente')->get();
        $financas = Financa::where('responsavel_id', $user->id)->get();
        //$pendentes = Financa::where('status', 'pendente', $user->id)->get();
        //$pagos = Financa::where('status', 'pago', $user->id)->get();
        return view('financas/Financa', ['financas' => $financas]);
    }

    public function create()
    {
        $responsavel = User::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('financas.create', ['responsavel' => $responsavel]);
    }

    public function store(Request $request)
    {
        $validated  = $request->validate([
            'responsavel_id'    => 'required',
            'vencimento'        => 'required',
            'valor'             => 'required',
            'valor_pagos'       => '',
            'status'            => 'required'
        ]);

        $financas = new Financa;
        $financas->responsavel_id        = $request->input('responsavel_id');
        $financas->vencimento            = $request->input('vencimento');
        $financas->valor                 = $request->input('valor');
        $financas->valor_pagos           = $request->input('valor_pagos');
        $financas->status                = $request->input('status');
        $financas->save();

        return redirect('financas/')->with('status', 'Cobrança criada com sucesso!');
    }

    public function show(string $id)
    {

        $financas = Financa::find($id);
        return view('financas/show', ['financa' => $financas]);
    }

    public function edit(string $id)
    {

        $financas = Financa::find($id);
        return view('financas.edit', ['financas' => $financas]);
    }

    public function update(Request $request, string $id)
    {
        $validated  = $request->validate([
            'vencimento'     => 'required',
            'valor'          => 'required',
            'valor_pagos'    => '',
            'status'         => 'required'
        ]);

        $financas = Financa::find($id);
        $financas->vencimento            = $request->input('vencimento');
        $financas->valor                 = $request->input('valor');
        $financas->valor_pagos           = $request->input('valor_pagos');
        $financas->status                = $request->input('status');
        $financas->save();
        return redirect('financas/')->with('status', 'Cobrança atualizada com sucesso!');
    }

    public function destroy(string $id)
    {
        $financas = Financa::find($id);
        $financas->delete();

        return redirect('financas/');
    }
}
