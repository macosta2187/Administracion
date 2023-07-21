<!DOCTYPE html>
<html>
<head>
    <title>Editar Almacén</title>

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
    
    <form action="{{ route('almacenes.actualizar', ['id' => $almacenes->id]) }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $almacenes->nombre }}"><br>

        <label for="calle">Calle:</label>
        <input type="text" id="calle" name="calle" value="{{ $almacenes->calle }}"><br>

        <label for="numero">Número:</label>
        <input type="text" id="numero" name="numero" value="{{ $almacenes->numero }}"><br>

        <label for="ciudad">Ciudad:</label>
        <input type="text" id="ciudad" name="ciudad" value="{{ $almacenes->ciudad }}"><br>

        <label for="latitud">Latitud:</label>
        <input type="text" id="latitud" name="latitud" value="{{ $almacenes->latitud }}"><br>

        <label for="longitud">Longitud:</label>
        <input type="text" id="longitud" name="longitud" value="{{ $almacenes->longitud }}"><br>

        <input type="submit" value="Guardar cambios">
    </form>
</body>
</html>