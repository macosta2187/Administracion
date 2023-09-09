<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Ingreso de Empleados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        form {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            max-width: 400px;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Formulario de Ingreso de Empleados</h1>

    <form id="myForm" action="{{ route('empleados.Insertar') }}" method="POST">
     @csrf

        <label for="ci">CI:</label>
        <input type="text" id="ci" name="ci" required>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>

        <label for="fechanac">Fecha nacimiento:</label>
        <input type="date" id="fechanac" name="fechanac">


        <label for="celular">Número de celular:</label>
        <input type="text" id="celular" name="celular">

        <label for="rol">Rol:</label>
     <select id="rol" name="rol">
        <option value="Chofer">Chofer</option>
        <option value="Cajero">Cajero</option>
        <option value="Administrativo">Administrativo</option>
    </select>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>
