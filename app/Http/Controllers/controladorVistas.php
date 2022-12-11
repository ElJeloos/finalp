<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function showWelcome(){
        return view('Registrar');

    }

    public function showIngresar(){
        return view('Registrar');
    }

    public function showConsultar(){
        return view('consultar');
    }
}
