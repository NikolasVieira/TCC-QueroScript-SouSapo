<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionar categorias</title>
</head>

<body>

    <form id="categoria" name="categoria" action="{{ url('categoria') }}" method="POST">
        @csrf

        <input type="text" name="titulo" id="titulo" placeholder="nome titulo">
        

        <button type="submit">Adicionar</button>
    </form>
</body>

</html>