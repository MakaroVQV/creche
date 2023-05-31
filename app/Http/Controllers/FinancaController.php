<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Financa;
class FinancaController extends Controller
{

    public function index()
    {
        $financas = Financa::orderBy('status')->get();
        dd($financas);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
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
