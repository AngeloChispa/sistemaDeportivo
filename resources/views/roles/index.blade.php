<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LISTA DE ROLES</title>
</head>
<body>

    <h1>Lista de roles</h1>
    <ul>
        @foreach ($roles as $rol)
        <li>{{$rol->name}} - {{$rol->description}}</li>
        <a href="{{ route('roles.edit', $rol->id) }}">Editar Rol</a>

        <form action="{{ route('roles.destroy', $rol->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE') 
            <button type="submit" onclick="return confirm('¿Estás seguro de eliminar este rol?')">Eliminar</button>
        </form>
        @endforeach
    </ul>

    <a href="{{route("roles.create")}}">Crear nuevo rol</a>


</body>
</html>

