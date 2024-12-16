<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Post;

Route::get('/', function () {

    // -------------- Forma pouco usual de se adicionar dados ao banco de dados
    // $post = new Post();
    // $post->title = 'Meu título';
    // // $post->body = 'Meu body';
    // $post->save();
    // -------------- Forma mais comum de se adicionar dados ao banco de dados
    $post = Post::create([
        'title' => 'meu segundo titulo',
        'body' => 'meu segundo body'
    ]);
    
    // ----------------------------------------------------
    // $post = Post::where('id', 1)->first();
    // $post = Post::where('body', 'LIKE', '%segundo%')->first();


    dd($post);

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