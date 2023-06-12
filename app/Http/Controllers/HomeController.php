<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Postagem;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $postagem = Postagem::orderBy('id', 'ASC')->get();
        return view('home', ['postagem' => $postagem]);
    }
}
