<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Listar Productos</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        thead {
            background-color: #f2f2f2;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            font-weight: bold;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #f5f5f5;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
    
</head>
<body>

@csrf
 @method('DELETE')
 <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Descripcion</th>
        <th>Calle</th>
        <th>Numero</th>
        <th>Ciudad</th>
        <th>Estado</th>
        <th>Lote</th>
        <th>Eliminar</th>
        <th>Editar</th>
      </tr>
    </thead>
    <tbody>
      @foreach($productos as $p)
        <tr>
          <td>{{ $p->id }}</td>               
          <td>{{ $p->descripcion }}</td>
          <td>{{ $p->calle }}</td>
          <td>{{ $p->numero }}</td>
          <td>{{ $p->ciudad }}</td>
          <td>{{ $p->estado }}</td>
          <td>{{ $p->id_lote }}</td>

          <td><a href="{{ route('producto.eliminar', ['id' => $p->id]) }}">Eliminar</a></td>
          <td><a href="{{ route('producto.editar', ['id' => $p->id]) }}">Editar</a></td>
        </tr>

      @endforeach
    </tbody>
  </table>
</body>
</html>