<!DOCTYPE html>
<html>
<head>
    <title>Editar Producto</title>

</head>
<body>


<style>
 
 body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    padding: 20px;
}

h1 {
    text-align: center;
}

form {
    background-color: #fff;
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="number"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #3b3f3b;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color:  #3b3f3b;
}

 </style>


    
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
    <select id="estado" name="estado" value="{{ $producto->estado }}" required>
    <option value="admitido">Admitido</option>
    <option value="entregado">Entregado</option>
    <option value="administrado">Administrado</option>
</select><br><br>



        <label for="id_lote">Id_lote:</label>
        <input type="text" id="id_lote" name="id_lote" value="{{ $producto->id_lote }}"><br>

        <input type="submit" value="Guardar cambios">
    </form>
</body>
</html>