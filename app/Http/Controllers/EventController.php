<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $nome  = "Hugo";
        $idade = 28;
        $arr   = [10,20,30,40,50];
        $nomes = ["Hugo","Conceição","Cortez"];

        return view('teste',
        [
            'nome'      => $nome,
            'idade'     => $idade,
            'profissao' => "TI",
            'arr'       => $arr,
            'nomes'     => $nomes
        ]);
    }

    public function create(){
        return view('events.create');

    }
}
