<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de Usuários</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>#ID</th>
                <th>Nome:</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.show', ['user' => $user->id]) }}">Ver usuário</a>
                        <a href="{{ route('users.edit', ['user' => $user->id]) }}">Editar usuário</a>
                        <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <input type="hidden" name="user" value="{{ $user->id }}">
                            <input type="submit" value="Remover">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>