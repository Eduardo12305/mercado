<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">

    <title>Index</title>
</head>
<body>
    pagina index

    <form action="{{route('logout')}}" method="get">
        <button class="botao" type="submit" style="color: white;">logout</button>
    </form>

    <div>
        <a href="{{route('eletronico')}}">
            <button type="button">Eletrônico</button>
        </a>
    </div>
    <a href="{{route('config')}}">
        <button type="buttobn">Configuração</button>
    </a>

    

</body>
</html>