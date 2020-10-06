<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CentroCarmenController extends Controller
{
    public function index(){
    	return view('centros_Carmen_Serdan');
    }


       public function  show_titular(){
      	return view('titular_Maria_Ofelia');
      

      }




       public function show_instalaciones(){
    	
    	return view('instalaciones_Carmen_Serdan');

    }
}
