<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Tournament</title>
</head>
<body>
    <h1>Crear Nuevo Torneo</h1>
    <form action="{{ route('tournaments.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="icon">Icon (URL):</label>  <!-- CHECAR URL IMAGEN DESPUES -->
        <input type="text" id="icon" name="icon"><br>

        <label for="type">Type:</label>
        <input type="text" id="type" name="type" required><br>

        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" required><br>

        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date" required><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea><br>

        <button type="submit">Crear Torneo</button>
    </form>
    <a href="{{ route('tournaments.index') }}">Regresar a la lista de Torneos</a>
</body>
</html>
