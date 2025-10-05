@extends('layouts.layout')

@section('title', 'Detalhes do Filme')

@section('content')
    <h1>Detalhes do filme "{{ $movie->title }}"</h1>
    <div class="movie-details">
        <p>Sinopse: {{ $movie->synopsis }}.</p>
        <p>Duração: {{ $movie->duration }} minutos</p>
        <p>Lançado em: {{ $movie->release_year }}</p>
    </div>
@endsection