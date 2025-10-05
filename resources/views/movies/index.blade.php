@extends('layouts.layout')

@section('title', 'Catálogo de Filmes')

@section('content')
<h1>Catálogo de filmes</h1>
<a class="btn-add" href="{{ route('movies.create') }}">+ Cadastrar filme</a>
<ul class="movie-list">
    @foreach ($movies as $movie)
    <li>
        <div class="movie-info">
            <span class="movie-id">#{{ $movie->id }}:</span>
            <span class="movie-title">{{ $movie->title }}</span>
        </div>
        <div class="actions">
            <nav>
                <a class="btn-action" href="{{ route('movies.edit', ['movie' => $movie->id]) }}">Editar</a>
                <a class="btn-action" href="{{ route('movies.show', ['movie' => $movie->id]) }}">Mostrar detalhes</a>
            </nav>
            <form action="{{ route('movies.destroy', ['movie' => $movie->id]) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" class="btn-delete" onclick="return confirm('Tem certeza que deseja deletar esse filme do seu catálogo?')" value="Deletar">
            </form>
        </div>
    </li>
    @endforeach
</ul>
@endsection