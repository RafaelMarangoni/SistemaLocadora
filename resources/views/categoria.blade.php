@extends ('template')

@section ('container')

<h1>Teste das categorias</h1>
<ul>

    @foreach($todasCategorias as $categoria)
    <li>{{$categoria->nome}}</li>
    @endforeach
</ul>

@endsection