<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edição de Usuário</title>
</head>
<body>
    <form action="{{ route('users.update', ['user' => $user->id]) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Nome do usuário</label>
        <input type="text" name="name" id="name" placeholder="Seu nome" value="{{ $user->name }}">

        <label for="email">E-mail do usuário</label>
        <input type="email" name="email" id="email" placeholder="Seu e-mail" value="{{ $user->email }}">

        <label for="password">Senha do usuário</label>
        <input type="password" name="password" id="password">

        <input type="submit" value="Editar usuário">
    </form>
    </table>
</body>
</html>