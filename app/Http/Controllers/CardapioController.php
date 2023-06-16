<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cardapio;

class CardapioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cardapio = Cardapio::orderBy('id')->get();
        return view('cardapio.index', ['cardapio' => $cardapio]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/cardapio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cardapio = new Cardapio;
        $cardapio->colacao = $request->colacao;
        $cardapio->lanche_manha = $request->lanche_manha;
        $cardapio->almoco = $request->almoco;
        $cardapio->lanche_tarde = $request->lanche_tarde;
        $cardapio->save();

        return redirect('cardapio/')->with('status', 'Cardápio criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cardapio = Cardapio::find($id);
        return view('cardapio.show', ['cardapio' => $cardapio]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cardapio = Cardapio::find($id);
        return view('cardapio.edit', ['cardapio' => $cardapio]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cardapio = Cardapio::find($id);
        $cardapio->colacao = $request->colacao;
        $cardapio->lanche_manha = $request->lanche_manha;
        $cardapio->almoco = $request->almoco;
        $cardapio->lanche_tarde = $request->lanche_tarde;
        $cardapio->save();

        return redirect('cardapio/')->with('status', 'Cardápio atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cardapio = Cardapio::find($id);
        $cardapio->delete();
        
        return redirect('/cardapio')->with('status', 'Cardápio apagado com sucesso');
    }

}
