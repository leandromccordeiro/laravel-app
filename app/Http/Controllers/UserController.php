<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        
        return view('users.index', [
            'greeting' => "Hello World",
            'users' => $users
        ]);
    }
    
    public function show(User $user) {
        return view('users.show', [
            'user' => $user
        ]);
    }

    public function create() {
        return view('users.create');
    }

    public function store() {
        dd('store');
    }
}
