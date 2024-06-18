<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="assets/css/index.css">

    <style>
        /* CSS para posicionar o dropdown à direita */
        .dropdown-menu-right {
            right: 0;
            left: auto !important;
        }
    </style>

    <title>Amazonflix</title>
</head>
<body>
<div class="container mt-5">
        <h1 class="mb-4">Pagina index</h1>

        <!-- Incluir o dropdown -->
        @include('dropdown')

        <hr>

        <!-- Conteúdo da página -->
        

    <div>
    <a href="{{route('filmes')}}">
        <button type="button">Filmes</button>
    </a>
    </div>


</div>
</body>
</html>