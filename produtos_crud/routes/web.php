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

Route::prefix('/produtos')->group(function() {
    Route::get('/', [ProdutosController::class, 'index'])->name('produtos.index');
    Route::get('/create', [ProdutosController::class, 'create'])->name('produtos.create');
    Route::post('/', [ProdutosController::class, 'store'])->name('produtos.store');
    Route::get('/{id}/edit', [ProdutosController::class, 'edit'])->name('produtos.edit');
    Route::put('/{id}', [ProdutosController::class, 'update'])->name('produtos.update');
    Route::delete('/{id}', [ProdutosController::class, 'destroy'])->name('produtos.destroy');

});

