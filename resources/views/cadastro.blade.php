
@extends('template')

@section('container')
    <h1>Cadastro</h1>
    <ul>
        @forelse($usuarios as $usuarios)
        <li>{{$usuario['nome']}}</li>
        @empty
            <li>Não tem Usuarios</li>
        @endforelse
    </ul>
@endsection