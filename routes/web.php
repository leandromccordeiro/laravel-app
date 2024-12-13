<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Exemplo chamando a função direto (sem controller)
// Route::get('admin/usuarios', function() {
//     return [
//         'id' => 1,
//         'name' => 'Jon Snow'
//     ];
// });

Route::get('admin/usuarios', [UserController::class, 'index']);
Route::get('admin/usuarios/{user}', [UserController::class, 'show']);