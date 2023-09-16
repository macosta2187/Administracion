<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Ingreso de Vehiculos</title>
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
    <h1>Formulario de Ingreso de Vehiculos</h1>

    <form id="myForm" action="{{ route('vehiculos.Insertar') }}" method="POST">
     @csrf

        <label for="matricula">matricula:</label>
        <input type="text" id="matricula" name="matricula" required>

        <label for="marca">marca:</label>
        <input type="text" id="marca" name="marca" required>

        <label for="modelo">modelo:</label>
        <input type="text" id="modelo" name="modelo" required>

        <label for="tipo">tipo:</label>
        <input type="text" id="tipo" name="tipo" required>

        <label for="capacidad_peso">capacidad_peso</label>
        <input type="text" id="capacidad_peso" name="capacidad_peso">


        <label for="ruta">ruta</label>
        <input type="text" id="ruta" name="ruta">

        <label for="id_chofer">id_chofer:</label>
        <input type="text" id="id_chofer" name="id_chofer">

        <input type="submit" value="Guardar">
    </form>
</body>
</html>

