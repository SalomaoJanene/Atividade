<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; // Importação correta da classe Request
use App\Http\Controllers\PessoaController;

// Listar todos os usuários
Route::get('/users', [PessoaController::class, 'index']);

// Retorna "Meu nome é PARAMETRO"
Route::get('/name', function (Request $request) {
    $param = $request->query('param');
    return 'Meu nome é ' . $param;
});
