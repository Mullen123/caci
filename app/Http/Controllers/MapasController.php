<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapasController extends Controller
{
    public function index(){
    	return view('mapas');
    }
}
