<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de filmes</title>
</head>
<body>
    <h1>Catálogo de filmes</h1>
    <a href="{{ route('movies.create') }}">+ Cadastrar filme</a>
    <ul>
        @foreach ($movies as $movie)
        <li>
            {{ $movie->id }} - {{ $movie->title }} | <a href="{{ route('movies.edit', ['movie' => $movie->id]) }}">Editar</a> | 
            <form action="{{ route('movies.destroy', ['movie' => $movie->id]) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" onclick="return confirm('Tem certeza que deseja deletar esse filme?')" value="Deletar">
            </form>
        </li>
        @endforeach
    </ul>
</body>
</html>