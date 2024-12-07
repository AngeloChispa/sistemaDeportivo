<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Torneos</title>
</head>
<body>
    <h1>Reporte de Torneos</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Torneo</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Fin</th>
                <th>Descripcion</th>
                <th>Tipo</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($tournaments as $tournament)
                <tr>
                    <td>{{ $tournament->id }}</td>
                    <td>{{ $tournament->name }}</td>
                    <td>{{ $tournament->start_date }}</td>
                    <td>{{ $tournament->end_date }}</td>
                    <td>{{ $tournament->description }}</td>
                    <td>{{ $tournament->type }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
