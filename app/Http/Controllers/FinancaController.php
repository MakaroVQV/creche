<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Financa;
class FinancaController extends Controller
{

    public function index()
    {
        // $financas = Financa::orderBy('status')->get();
        $pendentes = Financa::where('status', 'pendente')->get();
        $pagos = Financa::where('status', 'pago')->get();
        return view('financas/Financa', ['pendentes' => $pendentes, 'pagos' => $pagos]);    
    }

    public function create()
    {
        return view('financas/create');
    }

    public function store(Request $request)
    {
        
            $validated  = $request->validate([
                'vencimento'     => 'required',
                'valor'          => 'required',
                'valor_pagos'    => 'required',
                'status'         => 'required'
            ]);
    
            $financas = new financa;
            $financas->vencimento = $request->input('vencimento');
            $financas->valor = $request->input('valor');
            $financas->valor_pagos = $request->input('valor_pagos');
            $financas->status = $request->option('status');
            $financas->save();
    }

    public function show(string $id)
    {
        $financa = Financa::find($id);
        return view('financas/show', ['financa' => $financa]);
    }

    public function edit(string $id)
    {
        $financas = financa::find($id);
        return view('financas/edit', ['financa' => $financas]);
    }

    public function update(Request $request, string $id)
    {
        $validated  = $request->validate([
            'vencimento'     => 'required',
            'valor'          => 'required',
            'valor_pagos'    => 'required',
            'status'         => 'required'
        ]);

        $financas = new financa;
        $financas->vencimento = $request->input('vencimento');
        $financas->valor = $request->input('valor');
        $financas->valor_pagos = $request->input('valor_pagos');
        $financas->status = $request->option('status');
        $financas->save();
    }

    public function destroy(string $id)
    {
        $financas = financa::find($id);
        $financas->delete();

        return redirect('financas/Financa');
    }
}
