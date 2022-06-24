<?php

use App\Http\Controllers\ProdutosController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/produtos/novo', [ProdutosController::class, 'create']);

Route::post('/produtos', [ProdutosController::class,'store']);

Route::get('/produtos/exibir', [ProdutosController::class,'show']);

Route::get('produtos/{id}/edit', [ProdutosController::class,'edit']);

Route::post('/produtos/update/{id}', [ProdutosController::class,'update']);

Route::delete('/produtos/destroy/{id}', [ProdutosController::class,'destroy']);
