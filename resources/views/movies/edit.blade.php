@extends('layouts.layout')

@section('title', 'Editar Filmes')

@section('content')
<h1>Editar filme</h1>
<form class="forms" action="{{ route('movies.update', ['movie' => $movie->id] ) }}" method="post">
    @csrf
    @method('put')
    <label for="title">Título do filme:</label>
    <input type="text" name="title" value="{{ $movie->title }}">

    <label for="synopsis">Sinopse do filme:</label>
    <textarea name="synopsis">{{ $movie->synopsis }}</textarea>

    <label for="duration">Duração do filme (em minutos):</label>
    <input type="number" name="duration" value="{{ $movie->duration }}">

    <label for="release_year">Ano de lançamento:</label>
    <input type="number" name="release_year" value="{{ $movie->release_year }}">

    <input class="btn-submit" type="submit" value="Atualizar">
</form>
@endsection