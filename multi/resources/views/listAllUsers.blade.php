<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equive="X-UA-Compatible" content="ie=edge"> 
    <title>Listagem de Usuário</title>
</head>
<body>

<table>
    <tr>
        <td>#ID</td>
        <td>Nome:</td>
        <td>E-mail:</td>
        <td>Ações:</td>
    </tr>

    @foreach($usersList as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="">Ver Usuário</a>
                <form action="" method="post">
                    <input type="hidden" name="user" value="">
                    <input type="submit" value="remover">
                </form> 
            </td>
        </tr>
    @endforeach

</table>

</body>
</html>