<?php

namespace App\Http\Controllers\Api;
// use rota para poder utilizarmos o controller
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Ator é o metodo de acessar o model
use App\Ator; 

class atorController extends Controller
{// estamos colocando  o Request apenas por padrao, nao sendo necessario nessa situação, (de apenas imprimir na tela, nao requerindo nada do banco)
    public function listarAtores(Request $request){
        $atores = Ator::all();
        // chamamos o metodo response em formato Json
        return response()->json($atores);

    }
}
