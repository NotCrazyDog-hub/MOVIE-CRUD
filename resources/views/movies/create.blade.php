<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de filme</title>
</head>
<body>
    <h1>Cadastro de filme</h1>
    <form class="forms" action="{{ route('movies.store') }}" method="post">
        @csrf
        <label for="title">Título do filme:</label>
        <input type="text" name="title">

        <label for="synopsis">Sinopse do filme:</label>
        <textarea name="synopsis"></textarea>

        <label for="duration">Duração do filme (em minutos)"</label>
        <input type="number" name="duration">

        <label for="release_year">Ano de lançamento</label>
        <input type="number" name="release_year">

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>