<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RespuestasController extends Controller
{
    public function miMetodo()
    {
        return view('respuestas');
    }
}
