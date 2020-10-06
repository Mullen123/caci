<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CentroBerthaController extends Controller
{
    public function index(){
    	return view('centros_Bertha_von');
    }




     public function  show_titular(){
      	return view('titular_Alicia_Judith');
      

      }


      public function show_instalaciones(){
    	
    	return view('instalaciones_Bertha_Von');

    }





}
