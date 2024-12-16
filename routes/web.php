<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;

Route::get('/', function () {

    // --- Forma pouco usual de se adicionar dados ao banco de dados
    // $post = new Post();
    // $post->title = 'Meu título';
    // // $post->body = 'Meu body';
    // $post->save();
    // --- Forma mais comum de se adicionar dados ao banco de dados
    // $post = Post::create([
    //     'title' => 'meu segundo titulo',
    //     'body' => 'meu segundo body'
    // ]);
    
    // ----------------------------------------------------
    // Consultando dados com Eloquent
    // $post = Post::where('id', 3)->first();
    // $post = Post::where('body', 'LIKE', '%segundo%')->first();
    // dd($post);

    // ----------------------------------------------------
    // Alterando dados com Eloquent
    // $input = [
    //     'title' => 'Gillian Jenkins',
    //     'body' => 'Body alterado'
    // ];
    // $post = Post::find(3);
    // $post->fill($input);
    // $post->save();
    // dd($post);

    // ----------------------------------------------------
    // Deletando dados com Eloquent
    // $post = User::find(12);
    // $post->delete();
    // dd($post);

    // ----------------------------------------------------
    // Testando relações (1 para 1), através de consulta no banco.
    // $user = User::with('profile')->find(11);
    
    // ----------------------------------------------------
    // Criando relação, a partir do usuário.
    // $user = User::with('profile')->find(10);
    // $user->profile()->create([
    //     'type' => 'PJ',
    //     'document_number' => '923874283'
    // ]);
    
    // ----------------------------------------------------
    // Adicionando multiplos posts a determinado usuário (1 para n)
    // $user = User::find(2);
    // $user->posts()->createMany([
    //     [
    //         'title' => 'Primeiro título',
    //         'body' => 'Primeiro body',
    //     ],
    //     [
    //         'title' => 'Segundo título',
    //         'body' => 'Segundo body',
    //     ],
    //     [
    //         'title' => 'Terceiro título',
    //         'body' => 'Terceiro body',
    //     ],
    // ]);
    
    // Consultando user e os relacionamentos profile e posts
    // $user = User::with('profile', 'posts')->find(2);
    // dd($user);

    // Consultando roles (n para n)
    // $roles = Role::all();

    // $user = User::find(1); //usuário
    // $user->roles()->attach(4);//anexar cargo ao usuário
    // $user->roles()->detach(3);//desanexar cargo ao usuário


    // dd($user);


    

    return view('welcome');
});

// Exemplo chamando a função direto (sem controller)
// Route::get('admin/usuarios', function() {
//     return [
//         'id' => 1,
//         'name' => 'Jon Snow'
//     ];
// });

Route::get('admin/usuarios', 
    [UserController::class, 'index'])
    ->name('users.index');

Route::get('admin/usuarios/cadastrar', 
    [UserController::class, 'create'])
    ->name('users.create');

Route::post('admin/usuarios/cadastrar', 
    [UserController::class, 'store'])
    ->name('users.store');

Route::get('admin/usuarios/{user}', 
    [UserController::class, 'show'])
    ->name('users.show');