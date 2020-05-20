<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equive="X-UA-Compatible" content="ie=edge"> 
    <title>Cadastro de Usuário</title>
</head>
<body>

<form action="{{ route('users.store') }}" method="post">
    @csrf
    <p><label for="">Nome do Usuário</label></p>
    <input type="text" name="name">

    <p><label for="">E-mail:</label></p>
    <input type="email" name="email">

    <p><label for="">Senha:</label></p>
    <input type="password" name="password">

    <p><input type="submit" value="Cadastrar Usuário"></p>
</form>

</body>
</html>