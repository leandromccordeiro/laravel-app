@extends('layouts.default')
@section('title')
 Listagem de usuários
@endsection

@section('content')
    <h1 class="title">{{ $greeting }}</h1>
    <img width="100" src="{{ Vite::asset('resources/images/cruzeiro.jpg') }}" alt="">
    @foreach ($users as $user)
        <div class="user-name">{{ $user->name }} ({{ $user->id }})</div>
    @endforeach

    {{ $users->links() }}
@endsection