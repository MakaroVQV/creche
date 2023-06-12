<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagem;

class PostagemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postagem = Postagem::orderBy('id')->get();
        return view('postagem.index', ['postagem' => $postagem]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/postagem.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $postagem = new Postagem;
        $postagem->titulo = $request->titulo;
        $postagem->conteudo = $request->conteudo;
        $postagem->save();

        return redirect('postagem/')->with('status', 'Postagem criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $postagem = Postagem::find($id);
        return view('postagem.show', ['postagem' => $postagem]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $postagem = Postagem::find($id);
        return view('postagem.edit', ['postagem' => $postagem]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $postagem = Postagem::find($id);
        $postagem->titulo = $request->titulo;
        $postagem->conteudo = $request->conteudo;
        $postagem->save();

        return redirect('postagem/')->with('status', 'Postagem atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $postagem = Postagem::find($id);
        $postagem->delete();
        
        return redirect('/postagem')->with('status', 'Postagem apagada com sucesso');
    }
}