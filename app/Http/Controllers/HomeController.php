<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //El método __invoke() sólo se una cuando se administra una sólo ruta
    public function __invoke()
    {
        //return "Bienvenido a la página xD";
        return view('home');
    }
}
