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

<!-- teste utilizado na primeira aula -->
<!-- 
<h1>Listagem de Usuário</h1>

<p>O nome do usuário é {{ $userList->name }} e seu e-mail é {{ $userList->email }}</p> 
-->

<h1>{{ $userList->name }}</h1>
<p>{{ $userList->email }}</p>
<p>{{ date('d/m/Y H:i', strtotime($userList->created_at)) }}</p>

<form action="{{ route('users.formEditUser', ['user' => $userList->id]) }}">
    @csrf
    @method('PUT')
    <input type="submit" value="editar" value="{{ $userList->id }}">
</form>
<a href="javascript:history.back()">Voltar</a>


</body>
</html>
