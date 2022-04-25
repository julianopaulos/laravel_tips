<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de Usuários</title>
</head>
<body>
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <label for="name">Nome do usuário</label>
        <input type="text" name="name" id="name" placeholder="Seu nome">

        <label for="email">E-mail do usuário</label>
        <input type="email" name="email" id="email" placeholder="Seu e-mail">

        <label for="password">Senha do usuário</label>
        <input type="password" name="password" id="password">

        <input type="submit" value="Cadastrar usuário">
    </form>
    </table>
</body>
</html>