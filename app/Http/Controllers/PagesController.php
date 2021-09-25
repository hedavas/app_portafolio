<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMessageRequest;

class PagesController extends Controller
{
    // protected $request;

    // function __construct(Request $request)
    // {
    //     $this->request = $request;
    // }
    // public function __construct()
    // {
    //     $this->middleware('example', ['only' =>['home']]);
    // }

    public function home()
    {
        return view('home');
    }


    /*public function contact()
    {
        return view('contactos');
    }*/


    /*public function mensajes(CreateMessageRequest $request)
    {

        $data = $request->all(); //procesar los datos

        //Guardar en base de datos.

        //redirección
        return back()->with('info', 'Tu mensaje ha sido enviado correctamente :)');
     
    }*/


    public function saludo($nombre = "Invitado")
    {
        $html = "<h2>Contenido html</h2>";
        $script = "<script>alert('Problema XSS - Cross Site Scripting')</script>";
    
        $consolas = ["Play Station 5", "Xbox One", "Wii U"];

        //return view('saludo', ['nombre' => $nombre]);
        //return view('saludo')->with(['nombre' => $nombre]);
        return view('saludo', compact('nombre', 'html', 'script', 'consolas'));
    }

}
