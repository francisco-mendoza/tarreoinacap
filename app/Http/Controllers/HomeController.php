<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){

        return view('home.index');
    }

    public function registro(){

        return view('home.registro');
    }

    public function registrar(Request $request){
        
    }
}
