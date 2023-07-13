<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style_camiones.css">
    <title>Listar Almacenes</title>
</head>
<body>

@csrf
 @method('DELETE')
<style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        a {
            color: blue;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>

    <table>
        <tr>
            <td>
                ID
            </td>          
            <td>
                Nombre 
            </td>
            <td>
                Calle 
            </td>
            <td>
                Numero 
            </td>
            <td>
                Ciudad 
            </td>
            <td>
                Latitud 
            </td>
            </tr>
                Longitud
                </td>
                 </tr>

        @foreach($almacenes as $p)
            <tr>
                <td>
                    {{ $p -> id }}
                </td>               
                <td>
                    {{ $p -> nombre }}
                </td>
                <td>
                    {{ $p -> calle }}
                </td>
                <td>
                    {{ $p -> numero }}
                </td>
                <td>
                    {{ $p -> ciudad }}
                </td>
                <td>
                    {{ $p -> latitud }}
                </td>
                <td>
                   {{ $p -> longitud }}
                </td>

                <td>
                <a href="{{ route('almacen.eliminar', ['id' => $p->id]) }}">Eliminar</a>
                </td>
                <td>
                <a href="{{ route('almacenes.editar', ['id' => $p->id]) }}">Editar</a>
                </td>

            </tr>
        @endforeach


    </table>
</body>
</html>