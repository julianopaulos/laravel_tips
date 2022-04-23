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
                        <a href="/user/{{ $user->id }}">Ver usuário</a>
                        <form action="{{ route('user.destroy', $user->id) }}" method="post">
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