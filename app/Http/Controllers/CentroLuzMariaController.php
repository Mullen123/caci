<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CentroLuzMariaController extends Controller
{
    public function index(){
    	return view('centros_Luz_Maria');
    }



    public function show_titular(){
    	
    	return view('titular_Elisa_Tamara');

    }



    public function show_instalaciones(){
    	
    	return view('instalaciones_Luz_Maria');

    }

}

