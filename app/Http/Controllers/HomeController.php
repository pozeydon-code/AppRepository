<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

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
        return view('home');
    }

    public function acount()
    {
        $respuesta = Http::get('https://mindicador.cl/api');
        $dolar = $respuesta -> json();

        $respuesta2 = Http::get('http://jsonplaceholder.typicode.com/posts');
        $posts = $respuesta2 -> json();

        return view('cuenta', compact ('dolar', 'posts'));
    }

    public function visualizacion()
    {
        return view('visualizacion');
    }

}
