@extends('template')

@section('container')
<h1>Filmes</h1>

<ul class='container'>
@foreach($todosFilmes as $filme)
<li>{{$filme->titulo}} <a href="filme/editar/{{$filme->filme_id}}">editar</a></li>
<li>{{$filme->titulo}} <a href="filme/delete/{{$filme->filme_id}}">deletar</a></li>
   
</ul>
@endforeach

@endsection