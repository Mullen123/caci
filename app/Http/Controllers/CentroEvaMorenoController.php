<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CentroEvaMorenoController extends Controller
{
     public function index(){
    		return view('Centros_Eva_Moreno');
    }

      public function  show_titular(){
      	return view('titular_laura_patricia');
      

      }


      public function show_instalaciones(){
    	
    	return view('instalaciones_Eva_Moreno');

    }





}
