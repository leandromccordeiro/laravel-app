@extends('layouts.default')
@section('title', 'Cadastro de Usuário')

@section('content')
    <h1>Cadastro de Usuário</h1>
    <form action="{{ route('users.store') }} method="POST">
        @csrf
            <div>
                <label for="">Nome</label>
                <input type="text" name="nome">
            </div>

            <div>
                <label for="">Email</label>
                <input type="text" name="email">
            </div>

            <div>
                <label for="">Senha</label>
                <input type="password" name="senha">
            </div>

            <div>
                <button type="submit">Cadastrar</button>
            </div>
    </form>
@endsection