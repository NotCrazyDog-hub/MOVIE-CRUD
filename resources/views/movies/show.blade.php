<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filme</title>
</head>
<body>
    <h1>{{ $movie->title }}</h1>
    <p style="">{{ $movie->synopsis }}</p>
    <p>Tem duração de {{ $movie->duration }} minutos</p>
    <p>Lançado em: {{ $movie->release_year }}</p>
    <form action="{{ route('movies.destroy', ['movie' => $movie->id]) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" onclick="return confirm('Tem certeza que deseja deletar esse filme?')" value="Deletar">
    </form>
</body>
</html>