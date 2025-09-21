<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar filme</title>
</head>
<body>
    <h1>Editar filme</h1>
    <form action="{{ route('movies.update', ['movie' => $movie->id]) }}" method="post">
        @csrf
        @method('put')
        <input type="text" name="title" value="{{ $movie->title }}">
        <br>
        <textarea name="synopsis">{{ $movie->synopsis }}</textarea>
        <br>
        <input type="number" name="duration" value="{{ $movie->duration }}">
        <br>
        <input type="number" name="release_year" value="{{ $movie->release_year }}">
        <br>
        <input type="submit" value="Editar">
    </form>
</body>
</html>