<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torneos</title>
</head>
<body>
    <h1>Lista de torneos</h1>
    <a href="{{ route('tournaments.create') }}">Crear nuevo Torneo</a>
    <ul>
        @foreach ($tournaments as $tournament)
            <li>
                <strong>{{ $tournament->name }}</strong>
                <a href="{{ route('tournaments.show', $tournament) }}">Ver</a>
                <a href="{{ route('tournaments.edit', $tournament) }}">Editar</a>
                <form action="{{ route('tournaments.destroy', $tournament) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
