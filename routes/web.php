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

