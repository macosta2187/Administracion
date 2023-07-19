<!DOCTYPE html>
<html>
<head>
    <title>Almacenes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
            margin: 0;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Registro de almacen</h1>
    <form id="myForm" action="http://127.0.0.1:8002/api/APIinsertoAlmacen" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="calle">Calle:</label>
        <input type="text" id="calle" name="calle" required>

        <label for="numero">Numero:</label>
        <input type="text" id="numero" name="numero" required>

        <label for="ciudad">Ciudad:</label>
        <input type="text" id="ciudad" name="ciudad" required>

        <label for="latitud">Latitud:</label>
        <input type="text" id="latitud" name="latitud" required>

        <label for="longitud">Longitud:</label>
        <input type="text" id="longitud" name="longitud" required>

        <input type="submit" value="Guardar">
    </form>

    <script>      
        function postForm() {
            const form = document.getElementById('myForm');
            const formData = new FormData(form);
            const xhr = new XMLHttpRequest();
            xhr.open('POST', form.action, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        alert('Formulario enviado correctamente.');
                    } else {
                        alert('Error al enviar el formulario.');
                    }
                }
            };
            xhr.send(formData);
        }

        document.getElementById('myForm').addEventListener('submit', function(event) {
            event.preventDefault(); 
            postForm();
        });
    </script>
</body>
</html>