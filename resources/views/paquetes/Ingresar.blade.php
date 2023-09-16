<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Ingreso de Paquetes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #333;
        }

        form {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            max-width: 400px;
            width: 100%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            text-align: left; /* Alinea el texto a la izquierda */
            margin-top: 20px; /* Agrega un poco de espacio arriba */
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
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
    <h1>Ingreso de Paquetes</h1>

    <form id="myForm" action="{{ route('paquetes.Insertar') }}" method="POST">
        @csrf
        <label for="calle">Calle:</label>
        <input type="text" id="calle" name="calle" required>

        <label for="numero">Número:</label>
        <input type="text" id="numero" name="numero" required>

        <label for="localidad">Localidad:</label>
        <input type="text" id="localidad" name="localidad" required>

        <label for="departamento">Departamento:</label>
        <select id="departamento" name="departamento" required>
        <option value="">Selecciona un departamento</option>
        </select>

        <label for="estatus">Estatus:</label>
        <select id="estatus" name="estatus" required>
        <option value="En transito">En transito</option>
        <option value="Despachado">Despachado</option>
        <option value="Entregado">Entregado</option>
       </select>


       <label for="tamaño">Tamaño:</label>
       <select id="tamaño" name="tamaño" required>
       <option value="chico">Chico</option>
       <option value="mediano">Mediano</option>
       <option value="grande">Grande</option>
       <option value="extra_grande">Extra Grande</option>
       </select>


        <label for="peso">Peso:</label>
        <input type="number" step="0.01" id="peso" name="peso" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required>

        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required readonly>



        <input type="submit" value="Guardar">
    </form>

    <script>

    var departamentos = ["Artigas", "Canelones", "Cerro Largo", "Colonia", "Durazno", "Flores", "Florida", "Lavalleja", "Maldonado", "Montevideo", "Paysandú", "Río Negro", "Rivera", "Rocha", "Salto", "San José", "Soriano", "Tacuarembó", "Treinta y Tres"];
    var selectDepartamento = document.getElementById("departamento");


    for (var i = 0; i < departamentos.length; i++) {
        var option = document.createElement("option");
        option.value = departamentos[i];
        option.text = departamentos[i];
        selectDepartamento.appendChild(option);
    }

const fechaActual = new Date();
const anio = fechaActual.getFullYear();
const mes = (fechaActual.getMonth() + 1).toString().padStart(2, '0');
const dia = fechaActual.getDate().toString().padStart(2, '0');
document.getElementById('fecha').value = `${anio}-${mes}-${dia}`;


</script>
</body>
</html>
