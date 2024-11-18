<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar rol</title>
</head>
<body>
    <h1> Editar Rol</h1>

    <form action="{{route("roles.update", $roles->id)}}"method= "POST">
        @csrf
        @method("PUT")

        <label for = "name">Editar nombre del Rol: </label>
        <input type="text" name="name" id="name" value="{{$roles->name}}" required>

        <label for="description">Editar descripcion del Rol: </label>
        <input type="text" name="description" id="description" value="{{$roles->description}}">

        <button type="submit">Actualizar Rol</button>
     </form>
     <br>

     <a href="{{route("roles.index")}}">Regresar a la lista de roles</a>






</body>
</html>

