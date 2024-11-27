<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Jugador</title>
</head>
<body>
    <h1>Crear Jugador</h1>
    <form action="{{ route('playerss.store') }}" method="POST">
        @csrf
        <label>Estado:</label>
        <input type="text" name="status" required><br>
        <label>Altura:</label>
        <input type="number" step="0.01" name="height" required><br>
        <label>Peso:</label>
        <input type="number" step="0.01" name="weight" required><br>
        <label>Lado Dominante:</label>
        <input type="text" name="dominant_side" required><br>
        <label>Lugar de Nacimiento:</label>
        <input type="text" name="birthplace" required><br>
        <label>Nacionalidad:</label>
        <input type="text" name="nationality" required><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
