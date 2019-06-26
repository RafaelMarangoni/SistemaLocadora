@extends('template')

@section('container')

<h1>Editar Filme :)</h1>
<form action="" method="POST">
    @csrf
    <input type="text" name="filme_id" value="{{$filme->filme_id}}" hidden >
    <input type="text" name="filmeNome" value="{{$filme->titulo}}">
    <input type="submit">
</form>
@if(isset($resultado))
@if($resultado)
<h1>Edição Concluida !!!!</h1>
@else
<h1>Deu ruim irmao</h1>

@endif
@endif