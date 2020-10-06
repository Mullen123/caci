<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CentroCarolinaController extends Controller
{
    public function index(){

 	return view('centros_Carolina_Agazzi');
   }




    public function show_titular(){

 	return view('titular_Maria_jesus');
   }

    public function show_instalaciones(){
    	
    	return view('instalaciones_Carolina_Agazzi');

    }



}
