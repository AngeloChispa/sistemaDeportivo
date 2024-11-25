<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tournament</title>
</head>
<body>
    <h1>Editar torneo{{ $tournament->name }}</h1>
    <form action="{{ route('tournaments.update', $tournament) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $tournament->name }}" required><br>

        <label for="icon">Icon (URL):</label>
        <input type="text" id="icon" name="icon" value="{{ $tournament->icon }}"><br>

        <label for="type">Type:</label>
        <input type="text" id="type" name="type" value="{{ $tournament->type }}" required><br>

        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" value="{{ $tournament->start_date }}" required><br>

        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date" value="{{ $tournament->end_date }}" required><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description">{{ $tournament->description }}</textarea><br>

        <button type="submit">Actualizar Torneo</button>
    </form>
    <a href="{{ route('tournaments.index') }}">Regresar a la lista de Torneos</a>
</body>
</html>
