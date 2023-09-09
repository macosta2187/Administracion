<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

     /* Estilos para los labels */
label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

/* Estilos para los inputs */
input[type="text"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

/* Estilos para el botón */
button[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer;
    font-weight: bold;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

/* Estilos para el contenedor del formulario */
.form-container {
    max-width: 400px;
    margin: 0 auto;
}
    </style>

</head>
<body>

<div class="container">
    <h1>Editar Vehiculos</h1>
    <form action="{{ route('vehiculos.Actualizar', $vehiculo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="matricula">matricula:</label>
        <input type="text" name="matricula" value="{{ $vehiculo->matricula }}" required>

        <label for="marca">marca:</label>
        <input type="text" name="marca" value="{{ $vehiculo->marca }}" required>

        <label for="modelo">modelo:</label>
        <input type="text" name="modelo" value="{{ $vehiculo->modelo }}" required>

        <label for="capacidad_peso">capacidad_peso:</label>
        <input type="text" name="capacidad_peso" value="{{ $vehiculo->capacidad_peso }}" required>

        <label for="ruta">ruta:</label>
        <input type="text" name="ruta" value="{{ $vehiculo->ruta }}" required>

        <label for="id_chofer">id_chofer:</label>
        <input type="text" name="id_chofer" value="{{ $vehiculo->id_chofer }}" required>    

        <button type="submit">Guardar cambios</button>
    </form>
</div>

</body>
</html>