<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    function index(){

        return view('noticias');
        
    }
}
