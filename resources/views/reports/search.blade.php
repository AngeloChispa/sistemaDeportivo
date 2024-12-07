<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Reporte</title>

</head>
<body>
    <h1>Generar Reporte</h1>

    <h2>Reporte de Jugadores</h2>
    <form action="{{ route('report.player') }}" method="GET">
        <label for="nationality">Nacionalidad:</label>
        <input type="text" name="nationality" id="nationality">
        <br>



        <button type="submit">Generar Reporte de Jugadores</button>
    </form>

    <hr>


    <h2>Reporte de Torneos</h2>
    <form action="{{ route('report.tournament') }}" method="GET">
        <label for="start_date">Fecha de Inicio:</label>
        <input type="date" name="start_date" id="start_date">
        <br>

        <label for="end_date">Fecha de Finalizaion:</label>
        <input type="date" name="end_date" id="end_date">
        <br>

        <button type="submit">Generar Reporte de Torneos</button>
    </form>

</body>
</html>
