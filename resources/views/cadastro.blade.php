<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Casdastro</title>
</head>
<body>
<form method="POST" action="{{route("ca-post")}}"> 
    @csrf                       
        <label for="nome">Nome</label>
        <input name="nome" type="text" id="nome"><br>
        <label for="senha">Senha</label>
        <input name="senha" type="password" id="senha"><br>
        <label for="email">E-mail</label>
        <input name="email" type="email" id="email">
        <input name="enviar" type="submit">
    </form>

</body>
</html>