<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// podemos criar a nossa propria API e rotas, mas ela tem q ser validada. 
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//pode ser feito de duas formas a API, sendo com pasta avulta criada por nos, ou tbm podemos criar nossa propria pasta, sendo assim temos que fazer algumas alterações. 
Route::get('/ator',"Api\atorController@listarAtores");

Route::get('/usuarios','Api\usuariosController@listarUsuarios');
Route::get('/usuarios/{id}', 'Api\usuariosController@selecionarUsuario');

Route::post('/usuarios','Api\usuariosController@criarUsuario');

Route::delete('/usuarios/{id}','Api\usuariosController@deletarUsuario');



