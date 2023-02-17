<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); //con esto, al tratar de entrar aqui si no se ha echo login, te llevara a la pagina de login
    }
    public function index(){
        return view('dashboard');
    }
}