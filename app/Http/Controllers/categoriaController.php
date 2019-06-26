<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\categoria;

class categoriaController extends Controller
{
    public function index(Request $request){
        if($request->isMethod('GET')){
            $todasCategorias = categoria::all();
            return view('categoria',["todasCategorias"=>$todasCategorias]);
        }
    }
}
