<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function loadEvents() 
    {
        $events = Event::all();

        return response()->json($events);
    }

    public function listar_eventos(){
        $data_atual = date("Y-m-d");    
        $eventos = Event::where('end', '>=', $data_atual)->orderBy('end', 'ASC')->orderBy('title', 'ASC')->get();
        //dd($eventos);

        foreach ($eventos as $key => $value) {
            echo($value->start . ' - ' . $value->title . '<br>');
        }
        // @todo - jogar para dentro de uma view

    }

}
