<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //listar todos os usuaios do sistema
    public function index(){
        return view('index-usuarios');
    }
}
