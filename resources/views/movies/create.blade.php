<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de filme</title>
</head>
<body>
    <h1>Cadastro de filme</h1>
    <form action="{{ route('movies.store') }}" method="post">
        @csrf
        <input type="text" name="title" placeholder="Título do filme">
        <br>
        <textarea name="synopsis" placeholder="Sinopse do filme"></textarea>
        <br>
        <input type="number" name="duration" placeholder="Duração do filme (em minutos)">
        <br>
        <input type="number" name="release_year" placeholder="Ano de lançamento">
        <br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>