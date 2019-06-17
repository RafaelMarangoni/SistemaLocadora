@extends('template')

@section('container')
    <h1>cadastro de Ator</h1>

    <form action="cadastro" method="post">
    @csrf
    
    <input type="text" name="primeiroNome" id=" ">
    <input type="text" name="segundoNome" id=" ">
    <button type="submit">Enviar</button>

    </form>
    @if(isset($resultado))
        @if( $resultado)
        <h1>Cadastro Concluido !!! </h1>
    @else
        <h1> Erro ao tentar cadastrar</h1>
    @endif
    @endif
@endsection
