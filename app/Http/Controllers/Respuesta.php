<?php

namespace App\Http\Controllers;
use App\Http\Middleware\ComprobarDivisor;

//le añadimos el modelo
use App\Divisiones;
use Illuminate\Http\Request;


class Respuesta extends Controller
{

    function __construct()
    {
        $this->middleware('tamara');
    }

    function comprobarResultado(Request $request){

        $divisiones = new Divisiones;
        $divisiones -> dividiendo = $request->dividiendo;
        $divisiones -> divisor = $request->divisor;
        $divisiones -> resultado = $request->resultado;
        $divisiones -> save();
        return (view('/respuesta'));
    }



}
