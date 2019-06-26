<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Filme;

class filmeController extends Controller
{
    public function index(Request $request){
        if ($request->isMethod('GET')) {
            $todosFilmes = Filme::all();
            return view('filme',["todosFilmes"=>$todosFilmes]);
        }
    }

    public function editar(Request $request,$id){
        if($request->isMethod('GET')){
            $filme = Filme ::find($id);
            return view('editarFilme',["filme"=>$filme]);
        }
        $filme =  Filme::find($request->filme_id);
        $filme->titulo = $request->filmeNome;
        
        $resultado = $filme->save();

 

        return view("editarFilme",["resultado"=>$resultado,"filme"=>$filme]);
    }
// Essa função só funcionaria caso tive setado nas tabelas a exclusão em cascata.


    // public function deletar(Request $request, $id){       
    //     if($request ->isMethod('GET')){
    //     $filme->foreign('id')->references('id')->on('filme')->onDelete('cascade');
    //     return view('filmeDelete',["filme"=>$filmeDel]);
    // }

    //     //   $filme->id('filme_id')->unsigned();
    //     $filme->foreign('filme_id')->references('id')->on('filme')->onDelete('cascade');
    //     $filmeDel->titulo = $request ->filmeDelete;

    //     $resultado = $filmeDel->save();

    //     return view("filmeDelete",["resultado"=>$resultado,"filme"=>$filmeDel]);
    //}

    //função para deletar em casos que não há uma foreign key
    //public function deletar($id){

        //$filme= Filme::find($id);
        //$filme-> delete();

    
    //}
}
