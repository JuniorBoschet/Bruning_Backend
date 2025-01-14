<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ColaboradorController;

Route::prefix('colaboradores')->group(function(){

    Route::get('/',[ColaboradorController::class, 'pegarColaboradores']);
    Route::post('/adicionar',[ColaboradorController::class, 'adicionarColaborador']);
    Route::put('/atualizar/{id}',[ColaboradorController::class, 'atualizarColaborador']);
    Route::delete('/deletar/{id}',[ColaboradorController::class, 'deletarColaborador']);
});
