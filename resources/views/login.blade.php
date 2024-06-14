<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form method="POST" action="{{route("processoLogin")}}"> 
    @csrf                       
        <label for="senha">Senha</label>
        <input name="password" type="password" id="senha"><br>
        <label for="email">E-mail</label>
        <input name="email" type="email" id="email">
        <input name="enviar" type="submit">
    </form>
</body>
</html>