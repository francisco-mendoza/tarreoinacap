<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class HomeController extends Controller
{
    public function index(Request $request){

        return view('home.index');
    }

    public function registro(){

        return view('home.registro');
    }

    public function participantes(){
        return view('home.inscritos');
    }

    public function registrar(Request $request){

        //dd($request);

        $respuesta = "";
        $usuarioExistente = Usuario::getUsuarioByEmail($request->email);
        if($usuarioExistente){
            $respuesta = "existe";
        }else{
            $user = new Usuario();
            $user->nombre   = $request->nombre;
            $user->apellido = $request->apellido;
            $user->rut      = $request->rut;
            $user->email    = $request->email;
            $user->carrera  = $request->carrera;

            $user->save();
            $respuesta = "registrado";
        }

        return response()->json($respuesta);
    }

    public function getUsers(){
        
        $usuarios = Usuario::all();

        return response()->json(["data"=>$usuarios]);
    
    }    
}
