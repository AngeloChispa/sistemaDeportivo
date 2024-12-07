<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Jugadores</title>
</head>
<body>
    <h1>Reporte de Jugadores</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nacionalidad</th>
                <th>Estado de Residencia</th>
                <th>Altura</th>
                <th>Peso</th>
                <th>Lado Dominante</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($players as $player)
                <tr>
                    <td>{{ $player->id }}</td>
                    <td>{{ $player->nationality }}</td>
                    <td>{{ $player->birthplace }}</td>
                    <td>{{ $player->height }}</td>
                    <td>{{ $player->weight }}</td>
                    <td>{{ $player->dominant_side }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
