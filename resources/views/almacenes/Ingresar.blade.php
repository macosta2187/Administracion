<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/style_almacenes.css">
    <title>Registro de Almacén</title>
</head>
<body>
    <h1>Registro de almacen</h1>

    <form id="myForm" action="{{ route('almacenes.Insertar') }}" method="POST">
     @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="calle">Calle:</label>
        <input type="text" id="calle" name="calle" required>

        <label for="numero">Numero:</label>
        <input type="text" id="numero" name="numero" required>\

        <label for="ciudad">Ciudad:</label>
        <input type="text" id="ciudad" name="ciudad" required>

        <label for="latitud">Latitud:</label>
        <input type="text" id="latitud" name="latitud" required>

        <label for="longitud">Longitud:</label>
        <input type="text" id="longitud" name="longitud" required>

        <input type="submit" value="Guardar">
    </form>

</body>
</html>
