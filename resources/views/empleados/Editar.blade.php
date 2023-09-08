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
    <h1>Editar Empleados</h1>
    <form action="{{ route('empleados.Actualizar', $empleado->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ $empleado->nombre }}" required>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" value="{{ $empleado->calle }}" required>

        <label for="email">Correo Electrónico:</label>
        <input type="email" name="email" value="{{ $empleado->numero }}" required>

        <label for="telefono">Número de Teléfono:</label>
        <input type="tel" name="telefono" value="{{ $empleado->ciudad }}" required>

        <label for="cargo">Cargo:</label>
        <input type="text" name="cargo" value="{{ $empleado->latitud }}" required>
    

        <button type="submit">Guardar cambios</button>
    </form>
</div>

</body>
</html>