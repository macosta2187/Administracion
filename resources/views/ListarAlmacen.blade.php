<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style_camiones.css">
    <title>Almacenes en el sistema</title>
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
</head>
<body>

<table id="tabla-almacen">
    <tr>
        <td>
            ID
        </td>          
        <td>
            Direccion 
        </td>
        <td>
            Ciudad 
        </td>
        <td>
            Latitud 
        </td>
        <td>
            Longitud 
        </td>
        <td>
            Telefono 
        </td>
    </tr>
    
</table>

<script>
  const tablaAlmacen = document.getElementById('tabla-almacen');
  function eliminarAlmacen(id) {
    fetch(`http://127.0.0.1:8002/api/APIEliminarAlmacen/${id}`, {
      method: 'DELETE',
    })
      .then(response => response.json())
      .then(data => {
        alert(data.mensaje); 
       
      })
      .catch(error => {
        console.error('Error al eliminar el almacén:', error);
      });
  }

  fetch('http://127.0.0.1:8002/api/APIlistarAlmacen',
    {
      headers: {
        "Authorization": localStorage.getItem('token')
      }
    })
    .then(response => response.json())
    .then(data => {
      tablaAlmacen.innerHTML = '';

      data.forEach(item => {
        const fila = document.createElement('tr');

        const idCelda = document.createElement('td');
        idCelda.textContent = item.id;
        fila.appendChild(idCelda);

        const direccionCelda = document.createElement('td');
        direccionCelda.textContent = item.direccion;
        fila.appendChild(direccionCelda);

        const ciudadCelda = document.createElement('td');
        ciudadCelda.textContent = item.ciudad;
        fila.appendChild(ciudadCelda);

        const latitudCelda = document.createElement('td');
        latitudCelda.textContent = item.latitud;
        fila.appendChild(latitudCelda);

        const longitudCelda = document.createElement('td');
        longitudCelda.textContent = item.longitud;
        fila.appendChild(longitudCelda);

        const telefonoCelda = document.createElement('td');
        telefonoCelda.textContent = item.telefono;
        fila.appendChild(telefonoCelda);
       
        const eliminarCelda = document.createElement('td');
        const eliminarEnlace = document.createElement('a');
        eliminarEnlace.textContent = 'Eliminar';
        eliminarEnlace.href = 'ListarAlmacen'; 
        eliminarEnlace.addEventListener('click', () => eliminarAlmacen(item.id));
        eliminarCelda.appendChild(eliminarEnlace);
        fila.appendChild(eliminarCelda);

        tablaAlmacen.appendChild(fila);
      });
    })
    .catch(error => {
      console.error('Error al obtener los datos:', error);
    });
</script>
</body>
</html>