<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\AgendaController;

    Route::get('/', [AgendaController::class, 'index'])->name('contatos-index');
    Route::get('/create', [AgendaController::class, 'create'])->name('contatos-create');
    Route::post('/', [AgendaController::class, 'store'])->name('contatos-store');
    Route::get('/{id}/edit', [AgendaController::class, 'edit'])->name('contatos-edit');
    Route::put('/{id}', [AgendaController::class, 'update'])->name('contatos-update');
    Route::delete('/{id}', [AgendaController::class, 'destroy'])->name('contatos-destroy');


Route::get('/login', function () {
    return view('login');
});

Route::fallback(function(){
    return "ERRO!";
});
