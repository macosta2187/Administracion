<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Lote</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }

        p {
            color: #555;
            font-size: 16px;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        td button {
            background-color: #333;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        td button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h1>Ingresar Lote</h1>
    <form action="{{ route('ingresarLote') }}" method="post">
        @csrf <!-- Laravel CSRF token -->
        <label for="inputLote">LOTE:</label>
        <input type="number" name="lote" id="inputLote" placeholder="Ingrese el número de lote" min="1">
        <button type="submit">Ingresar Lote</button>
    </form>


   
       
        <label for="camionesSelect">Selecciona un camión:</label>
        <select name="camionId" id="camionesSelect">
            @foreach($camiones as $camion)
                <option value="{{ $camion->id_camion }}">{{ $camion->id_camion }}</option>
            @endforeach
        </select>

        <h1>Lista de Paquetes</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Calle</th>
                    <th>Número de puerta</th>
                    <th>Localidad</th>
                    <th>Departamento destino</th>
                    <th>Estatus</th>
                    <th>Tamaño del paquete</th>
                    <th>Peso (kg)</th>
                    <th>Teléfono contacto</th>
                    <th>Fecha de recepción</th>
                    <th>Seleccionar</th> <!-- Nueva columna -->
                </tr>
            </thead>
            <tbody>
                @foreach($paquetes as $paquete)
                    <tr>
                        <td>{{ $paquete->id }}</td>
                        <td>{{ $paquete->calle }}</td>
                        <td>{{ $paquete->numero }}</td>
                        <td>{{ $paquete->localidad }}</td>
                        <td>{{ $paquete->departamento }}</td>
                        <td>{{ $paquete->estatus }}</td>
                        <td>{{ $paquete->tamaño }}</td>
                        <td>{{ $paquete->peso }}</td>
                        <td>{{ $paquete->telefono }}</td>
                        <td>{{ $paquete->fecha }}</td>
                        <td><input type="checkbox" name="seleccionarPaquete[]" value="{{ $paquete->id }}"></td> <!-- Checkbox de selección -->
                    </tr>
                @endforeach
            </tbody>
        </table>

        <button type="submit" name="submitType" value="asignarLote">Asignar Lote</button>
    
</body>
</html>

