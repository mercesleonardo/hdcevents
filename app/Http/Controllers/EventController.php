<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function index() {
        $nome = "Leonardo";
        return view('welcome', ['nome' => $nome]);
    }

    public function create () {
        return view('events.create');
    }

    public function enter() {
        return view('events.enter');
    }

    public function cadastro() {
        return view('events.cadastrar');
    }
}
