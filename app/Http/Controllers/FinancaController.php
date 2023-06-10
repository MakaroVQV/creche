<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Financa;
use App\models\User;
class FinancaController extends Controller
{

    public function index()
    {
            // $financas = Financa::orderBy('status')->get();
            //$pendentes = Financa::where('status', 'pendente')->get();
            //$pagos = Financa::where('status', 'pago')->get();
            //return view('financas/Financa', ['pendentes' => $pendentes, 'pagos' => $pagos]); 
            
            $financa = Financa::orderby('id')->get();
        return view('financas.index', ['financa' => $financa]);
    }
    

    public function create()
    {
        $responsavel = User::orderBy('name', 'ASC')-> pluck('name','id');
        return view('financas.create',['responsavel'=>$responsavel]);
    }

    public function store(Request $request)
    { 
            $validated  = $request->validate([
                'vencimento'     => 'required',
                'valor'          => 'required',
                'valor_pagos'    => 'required',
                'status'         => 'required'
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
            'valor_pagos'    => 'required',
            'status'         => 'required'
        ]);

        $financas = new Financa;
        $financas->responsavel_id        = $request->input('responsavel_id');
        $financas->vencimento            = $request->input('vencimento');
        $financas->valor                 = $request->input('valor');
        $financas->valor_pagos           = $request->input('valor_pagos');
        $financas->status                = $request->input('status');
        $financas->save();
    }

    public function destroy(string $id)
    {
        $financas = Financa::find($id);
        $financas->delete();

        return redirect('financas/');
    }
}
