<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Jugadores</title>
</head>
<body>
    <h1>Jugadores</h1>
    <a href="{{ route('playerss.create') }}">Crear nuevo jugador</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Estado</th>
                <th>Altura</th>
                <th>Peso</th>
                <th>Lado Dominante</th>
                <th>Lugar de Nacimiento</th>
                <th>Nacionalidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($players as $player)
                <tr>
                    <td>{{ $player->id }}</td>
                    <td>{{ $player->status }}</td>
                    <td>{{ $player->height }}</td>
                    <td>{{ $player->weight }}</td>
                    <td>{{ $player->dominant_side }}</td>
                    <td>{{ $player->birthplace }}</td>
                    <td>{{ $player->nationality }}</td>
                    <td>
                        <a href="{{ route('playerss.show', $player->id) }}">Ver</a>
                        <a href="{{ route('playerss.edit', $player->id) }}">Editar</a>
                        <form action="{{ route('playerss.destroy', $player->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
