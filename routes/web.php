<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rotas da Agenda
|--------------------------------------------------------------------------
|
| Essas rotas são responsáveis por gerenciar a agenda de contatos.
|
*/

use App\Http\Controllers\AgendaController;

    Route::get('/', [AgendaController::class, 'index'])->name('contatos-index'); //Rota para a página inicial da agenda. Exibe a lista de todos os contatos.
    Route::get('/create', [AgendaController::class, 'create'])->name('contatos-create'); //Rota para a página de criação de contatos. Permite que o usuário crie um novo contato.
    Route::post('/', [AgendaController::class, 'store'])->name('contatos-store'); //Rota para a ação de salvar um contato. Salva um novo contato no banco de dados.
    Route::get('/{id}/edit', [AgendaController::class, 'edit'])->name('contatos-edit'); //Rota para a página de edição de contatos. Permite que o usuário edite um contato existente.
    Route::get('/{id}/visualizar', [AgendaController::class, 'visualizar'])->name('contatos-visualizar'); //Rota para a página de visualização de contatos. Exibe as informações de um contato existente.
    Route::put('/{id}', [AgendaController::class, 'update'])->name('contatos-update'); //Rota para a ação de atualizar um contato. Atualiza as informações de um contato existente no banco de dados.
    Route::delete('/{id}', [AgendaController::class, 'destroy'])->name('contatos-destroy'); //Rota para a ação de excluir um contato. Exclui um contato do banco de dados.
    Route::get('/logout', [AgendaController::class, 'logout'])->name('contatos-logout'); //Rota para a ação de logout. Desloga o usuário do sistema.
    Route::get('/contatos', [AgendaController::class, 'lista'])->name('contatos-json'); //Rota para a ação de listar contatos em JSON. Retorna uma lista de contatos em formato JSON.


/* Rota de fallback.Retorna uma mensagem de erro caso nenhuma rota seja encontrada. */
Route::fallback(function(){
    return "ERRO!";
});

/* Rota para a página de login. Exibe a página de login do sistema. */
Route::get('/login', function () {
    return view('auth/login');
})->name('login');

/* Grupo de rotas que exigem autenticação. Exibe a página inicial do sistema caso o usuário esteja autenticado. */
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect('/');
    })->name('dashboard');
});
