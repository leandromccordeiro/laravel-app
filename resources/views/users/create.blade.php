@extends('layouts.default')
@section('title', 'Cadastro de Usuário')

@section('content')
    <h1>Cadastro de Usuário</h1>
    <form action="{{ route('users.store') }}" 
    method="POST"
    enctype="multipart/form-data">
        @csrf

        @if($errors->any())
            @foreach($errors->all() as $error)
            <div class="title">
                {{ $error }}
            </div>
            @endforeach
        @endif

            <div>
                <label for="">Nome</label>
                <input type="text" name="name" value="{{ old('name') }}">
            </div>

            <div>
                <label for="">Email</label>
                <input type="text" name="email" value="{{ old('email') }}">
            </div>

            <div>
                <label for="">Senha</label>
                <input type="password" name="password">
            </div>

            <div>
                <label for="">Avatar</label>
                <input type="file" name="avatar">
            </div>

            <div>
                <button type="submit">Cadastrar</button>
            </div>
    </form>
@endsection