<?php

use Illuminate\Support\Facades\Route;

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
use app\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

// Route::get('/', function () {
    
// });

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/', function () {
    $nome = "Hugo";
    $idade= 28;
    $arr  = [1,2,3,4,5];
    $nomes= ["Hugo","Conceição","Cortez"];

    return view('teste', 
        [
            'nome'      => $nome,
            'idade'     => $idade,
            'profissao' => 'TI',
            'arr'       => $arr,
            'nomes'     => $nomes,
        ]);
});

Route::get('/produtos', function () {
    $busca = request('search');
    return view('produtos', ['busca' => $busca]);
});

Route::get('/produto/{id?}', function ($id =  null) {
    return view('produto',['id' => $id]);
});