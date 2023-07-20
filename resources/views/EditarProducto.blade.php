<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/style_editproducto.css">
    <title>Editar Producto</title>

</head>
<body>
    
    <form action="{{ route('producto.actualizar', ['id' => $producto->id]) }}" method="POST">
        @csrf

        <label for="descripcion">Descripcion:</label>
        <input type="text" id="descripcion" name="descripcion" value="{{ $producto->descripcion }}"><br>

        <label for="calle">Calle:</label>
        <input type="text" id="calle" name="calle" value="{{ $producto->calle }}"><br>

        <label for="numero">Número:</label>
        <input type="text" id="numero" name="numero" value="{{ $producto->numero }}"><br>

        <label for="ciudad">Ciudad:</label>
        <input type="text" id="ciudad" name="ciudad" value="{{ $producto->ciudad }}"><br>

        <label for="estado">Estado:</label>
        <select id="estado" name="estado" required>
            <option value="admitido" {{ $producto->estado == 'admitido' ? 'selected' : '' }}>Admitido</option>
            <option value="entregado" {{ $producto->estado == 'entregado' ? 'selected' : '' }}>Entregado</option>
            <option value="administrado" {{ $producto->estado == 'administrado' ? 'selected' : '' }}>Administrado</option>
        </select><br><br>

        <label for="id_lote">Id_lote:</label>
        <input type="text" id="id_lote" name="id_lote" value="{{ $producto->id_lote }}"><br>

        <input type="submit" value="Guardar cambios">
    </form>
</body>
</html>