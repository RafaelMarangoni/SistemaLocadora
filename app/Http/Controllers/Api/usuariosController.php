<?php

namespace App\Http\Controllers\Api;


use Illuminate\Http\Request;
use App\Usuarios;
use App\Http\Controllers\Controller;

class usuariosController extends Controller
{
    public function listarUsuarios(){
        $usuarios= Usuarios::all();

        return response()->json($usuarios);
    }

    public function selecionarUsuario(Request $request, $id){
        $usuario = Usuarios::find($id);

        return response()->json($usuario);

    }
    public function criarUsuario(Request $request){
        
        $usuario = new Usuarios();
        $usuario->nome = $request->nome;
        $resultado = $usuario->save();

        return response()->json([
            "resultado"=>$resultado,
            "mensagem"=>"cadastro concluido"
        ]);        

    }
    public function deletarUsuario($id){       
       $usuario = Usuarios::find($id);

        if ($usuario != null) {
            $resultado = $usuario->delete($id);
            return response()->json([
                "resultado"=>$resultado,
                "mensagem"=>"delete concluido"
            ],200);
        }else {
            return response()->json([
                "resultado"=>false,
                "mensagem"=>"usuarionao existe"
            ],404);
        }  
     

      
      
    }
} 
