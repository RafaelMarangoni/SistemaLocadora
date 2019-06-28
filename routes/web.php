<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro', function(){
    return view('cadastro',["usuarios" =>[
        ["nome"=>"Vinicius"],
        ["nome"=>"Rafa"]
    ]]);
});
Route::get('/vendas', function(){
    return view('vendas');
});

// Route::get('template'function(){
//     return view('template');
// });

Route::get('compras',"comprasController@index");

Route::get('ator',"atorController@index")->middleware('checkadmin');

Route::get('ator/cadastro',"atorController@create");
Route::post('ator/cadastro',"atorController@create");

Route::get('ator/editar/{id}',"atorController@editar");
Route::post('ator/editar/{id}',"atorController@editar");

Route::get('filme',"filmeController@index");
Route::post('filme',"filmeController@index");

Route::get('filme/editar/{id}',"filmeController@editar");
Route::post('filme/editar/{id}',"filmeController@editar");

Route::get('filme/delete/{id}',"filmeController@deletar");
Route::post('filme/delete/{id}',"filmeController@deletar");

Route::get('categoria',"categoriaController@index");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


